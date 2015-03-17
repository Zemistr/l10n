<?php
use l10n\Language\ILanguage;

class LanguagesTest extends PHPUnit_Framework_TestCase {
	public function filesProvider() {
		$data = array();
		$files = @glob(__DIR__ . '/../src/l10n/Language/*.php') ?: array();

		foreach ($files as $file) {
			$name = basename($file, '.php');

			if ("ILanguage" != $name) {
				$data[] = array("l10n\\Language\\$name");
			}
		}

		return $data;
	}

	/**
	 * @dataProvider filesProvider
	 * @param $class
	 */
	public function testGetters($class) {
		/** @var ILanguage $language */
		$language = new $class;

		$this->assertInternalType('string', $language->getIso639_1());
		$this->assertInternalType('string', $language->getIso639_2());
		$this->assertInternalType('string', $language->getEnglishName());
		$this->assertInternalType('string', $language->getOriginalName());
		$this->assertInternalType('bool', $language->isRtl());

		$this->assertSame(2, $length = strlen($language->getIso639_1()), 'ISO 639-1 code must be 2 characters long.');
		$this->assertSame(3, $length = strlen($language->getIso639_2()), 'ISO 639-2 code must be 3 characters long.');
	}
}
