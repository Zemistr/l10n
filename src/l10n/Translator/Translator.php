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
	 * @param \l10n\Plural\IPlural      $plural
	 * @param \l10n\Translator\IStorage $loader
	 */
	public function __construct(IPlural $plural, IStorage $loader = null) {
		$this->plural = $plural;

		if ($loader) {
			$this->storage = $loader;
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
				return $this->translated[$key][$plural];
			}
		}
		else {
			if (isset($this->translated[$key])) {
				return $this->translated[$key];
			}
		}

		return null;
	}

	/**
	 * @param string $key
	 * @param int    $plural
	 */
	public function removeText($key, $plural = 0) {
		if (func_num_args() === 2) {
			unset($this->translated[$key][$plural]);
		}
		else {
			unset($this->translated[$key]);
		}

		unset($this->untranslated[$key]);
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
			$this->untranslated[$key] = true;

			return $key;
		}

		unset($this->untranslated[$key]);

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
		return array_keys($this->untranslated);
	}
}
