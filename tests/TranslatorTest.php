<?php
use l10n\Translator\Translator;

class TranslatorTest extends PHPUnit_Framework_TestCase {
	private function createPluralMock() {
		/** @var \l10n\Plural\IPlural|PHPUnit_Framework_MockObject_MockObject $mock */
		$mock = $this->getMock('l10n\Plural\IPlural');

		$mock->expects($this->any())
			->method("getPluralsCount")
			->willReturn(2);

		$mock->expects($this->any())
			->method("getPlural")
			->will(
				$this->returnCallback(
					function ($n) {
						return ($n != 1) ? 1 : 0;
					}
				)
			);

		return $mock;
	}

	public function testConstructor() {
		$plural = $this->createPluralMock();

		$translator = new Translator($plural);

		$this->assertInstanceOf('l10n\Plural\IPlural', $plural);
		$this->assertSame($plural, $translator->getPlural());
	}

	public function testSetGetRemoveText() {
		$plural = $this->createPluralMock();

		$translator = new Translator($plural);

		$translator->setText('key', 'text %n%', 0);
		$translator->setText('key', 'text %n%', 1);

		$this->assertSame('text %n%', $translator->getText('key', 0));
		$this->assertSame('text %n%', $translator->getText('key', 1));
		$this->assertSame(array('text %n%', 'text %n%'), $translator->getText('key'));

		$translator->removeText('key', 0);
		$this->assertSame(null, $translator->getText('key', 0));

		$translator->removeText('key', 1);
		$this->assertSame(null, $translator->getText('key', 1));

		$translator->setText('foo', 'bar', 0);
		$translator->setText('foo', 'baz', 1);
		$this->assertSame('bar', $translator->getText('foo', 0));
		$this->assertSame('baz', $translator->getText('foo', 1));

		$translator->removeText('foo');
		$this->assertSame(null, $translator->getText('foo', 0));
		$this->assertSame(null, $translator->getText('foo', 1));
	}

	public function testPluralsRange() {
		$plural = $this->createPluralMock();

		$translator = new Translator($plural);

		$translator->setText('key', 'text %n%', 0);
		$translator->setText('key', 'text %n%', 1);

		$this->setExpectedException('RangeException', 'The plural is bigger than is allowed');
		$translator->setText('key', 'text %n%', 2);
	}

	public function testTranslate() {
		$plural = $this->createPluralMock();

		$translator = new Translator($plural);
		$translator->setText('key', '%n% person', 0);
		$translator->setText('key', '%n% people', 1);
		$translator->setText('foo', 'bar %var%');

		$this->assertSame('0 people', $translator->translate('key', 0));
		$this->assertSame('1 person', $translator->translate('key', 1));
		$this->assertSame('50 people', $translator->translate('key', 50));
		$this->assertSame('100 people', $translator->translate('key', 100));
		$this->assertSame('bar baz', $translator->translate('foo', array('%var%' => 'baz')));
	}

	public function testGetTranslated() {
		$plural = $this->createPluralMock();

		$translator = new Translator($plural);
		$translator->setText('key', 'text');
		$translator->setText('key_2', 'text_2');

		$expected = array("key" => array('text'), "key_2" => array('text_2'));
		$this->assertSame($expected, $translator->getTranslated());
	}

	public function testGetUntranslated() {
		$plural = $this->createPluralMock();

		$translator = new Translator($plural);
		$translator->translate('key', 0);
		$translator->translate('key_2', 0);

		$expected = array("key", "key_2");
		$this->assertSame($expected, $translator->getUntranslated());
	}
}
