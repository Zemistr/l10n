<?php
use l10n\Plural\PluralRule0;

class PluralRule0Test extends PHPUnit_Framework_TestCase {
	/** @var PluralRule0 */
	protected $class;

	protected function setUp() {
		$this->class = new PluralRule0();
	}

	public function testInstance() {
		$this->assertInstanceOf('l10n\Plural\IPlural', $this->class);
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		for ($i = 0; $i < 20; $i += 1) {
			$data[] = array(rand(1, 500), 0);
		}

		return $data;
	}

	/**
	 * @dataProvider getPluralProvider
	 * @param $n
	 * @param $expected
	 */
	public function testGetPlural($n, $expected) {
		$this->assertSame($expected, $p = $this->class->getPlural($n), "Failed asserting that $p ($n) is identical to $expected.");
	}

	public function testGetPluralForm() {
		$this->assertInternalType('string', $this->class->getPluralForm());
	}

	public function testGetPluralsCount() {
		$this->assertInternalType('int', $this->class->getPluralsCount());
	}

	public function testGetPluralsCountParse() {
		$plurals_count = substr($this->class->getPluralForm(), 9, 1);

		$this->assertSame(+$plurals_count, $this->class->getPluralsCount());
	}

	/**
	 * @dataProvider getPluralProvider
	 * @param $n
	 */
	public function testGetPluralFormParse($n) {
		$plural = null;
		$plural_form = substr($this->class->getPluralForm(), 12);
		$plural_form = str_replace('n', '$n', $plural_form);
		$plural_form = str_replace('plural', '$plural', $plural_form);

		eval($plural_form);

		$this->assertSame($plural, $this->class->getPlural($n));
	}
}
