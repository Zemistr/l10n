<?php
namespace l10n\Translator;

use l10n\Plural\IPlural;

class Translator {
	/** @var \l10n\Plural\IPlural */
	protected $plural;

	/** @var array */
	private $translated = array();

	/** @var array */
	private $untranslated = array();

	/** @var \l10n\Translator\IStorage */
	protected $storage;

	/**
	 * @param \l10n\Plural\IPlural           $plural
	 * @param \l10n\Translator\IStorage|null $storage
	 */
	public function __construct(IPlural $plural, IStorage $storage = null) {
		$this->plural = $plural;

		if ($storage) {
			$this->storage = $storage;
			$this->storage->load($this);
		}
	}

	public function __destruct() {
		if ($this->storage instanceof IStorage) {
			$this->storage->save($this);
		}
	}

	/**
	 * @return \l10n\Plural\IPlural
	 */
	public function getPlural() {
		return $this->plural;
	}

	/**
	 * @param int $plural
	 */
	protected function checkPlural($plural) {
		if ($plural > $this->plural->getPluralsCount() - 1) {
			throw new \RangeException('The plural is bigger than is allowed');
		}
	}

	/**
	 * @param string $key
	 * @param string $text
	 * @param int    $plural
	 */
	public function setText($key, $text, $plural = 0) {
		$this->checkPlural($plural);
		$this->translated[$key][$plural] = $text;
		$this->removeUntranslated($key, $plural);
	}

	/**
	 * @param string $key
	 * @param int    $plural
	 * @return null|string
	 */
	public function getText($key, $plural = 0) {
		$this->checkPlural($plural);

		if (func_num_args() === 2) {
			if (isset($this->translated[$key][$plural])) {
				$this->removeUntranslated($key, $plural);

				return $this->translated[$key][$plural];
			}
		}
		else {
			if (isset($this->translated[$key])) {
				$this->removeUntranslated($key);

				return $this->translated[$key];
			}
		}

		return null;
	}

	/**
	 * @param string $key
	 * @param int    $plural Nothing for all plurals
	 */
	public function removeText($key, $plural = 0) {
		if (func_num_args() === 2) {
			unset($this->translated[$key][$plural]);
			$this->removeUntranslated($key, $plural);
		}
		else {
			unset($this->translated[$key]);
			$this->removeUntranslated($key);
		}
	}

	/**
	 * @param string $key
	 * @param int    $plural
	 */
	public function setUntranslated($key, $plural = 0) {
		$this->checkPlural($plural);
		$this->untranslated[$key][$plural] = true;
	}

	/**
	 * @param string $key
	 * @param int    $plural Nothing for all plurals
	 */
	public function removeUntranslated($key, $plural = 0) {
		if (func_num_args() === 2) {
			unset($this->untranslated[$key][$plural]);

			if (empty($this->untranslated[$key])) {
				unset($this->untranslated[$key]);
			}
		}
		else {
			unset($this->untranslated[$key]);
		}
	}

	/**
	 * @param string    $key
	 * @param int|array $n When $n is an array, it's used as $parameters.
	 * @param array     $parameters
	 * @return string
	 */
	public function translate($key, $n = 1, array $parameters = array()) {
		if (is_array($n)) {
			$parameters = $n;
			$n = 1;
		}

		$plural = $this->plural->getPlural($n);
		$translated = $this->getText($key, $plural);

		if ($translated === null) {
			$this->setUntranslated($key, $plural);

			return $key;
		}

		$this->removeUntranslated($key, $plural);

		$parameters += array('%n%' => $n);
		$translated = strtr($translated, $parameters);

		return $translated;
	}

	/**
	 * @return array
	 */
	public function getTranslated() {
		return $this->translated;
	}

	/**
	 * @return array
	 */
	public function getUntranslated() {
		return $this->untranslated;
	}
}
