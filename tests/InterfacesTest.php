<?php

class InterfacesTest extends PHPUnit_Framework_TestCase {
	public function testILanguage() {
		$mock = $this->getMock('l10n\Language\ILanguage');

		$this->assertInstanceOf('l10n\Language\ILanguage', $mock);
		$this->assertSame(true, method_exists($mock, 'getIso639_1'), 'Method "getIso639_1" must exists');
		$this->assertSame(true, method_exists($mock, 'getIso639_2'), 'Method "getIso639_2" must exists');
		$this->assertSame(true, method_exists($mock, 'getEnglishName'), 'Method "getEnglishName" must exists');
		$this->assertSame(true, method_exists($mock, 'getOriginalName'), 'Method "getOriginalName" must exists');
		$this->assertSame(true, method_exists($mock, 'isRtl'), 'Method "isRtl" must exists');
	}

	public function testIPlural() {
		$mock = $this->getMock('l10n\Plural\IPlural');

		$this->assertInstanceOf('l10n\Plural\IPlural', $mock);
		$this->assertSame(true, method_exists($mock, 'getPlural'), 'Method "getPlural" must exists');
		$this->assertSame(true, method_exists($mock, 'getPluralForm'), 'Method "getPluralForm" must exists');
		$this->assertSame(true, method_exists($mock, 'getPluralsCount'), 'Method "getPluralsCount" must exists');
	}

	public function testIStorage() {
		$mock = $this->getMock('l10n\Translator\IStorage');

		$this->assertInstanceOf('l10n\Translator\IStorage', $mock);
		$this->assertSame(true, method_exists($mock, 'load'), 'Method "load" must exists');
		$this->assertSame(true, method_exists($mock, 'save'), 'Method "save" must exists');
	}
}
