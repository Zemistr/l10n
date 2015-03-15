<?php
use l10n\Plural\PluralRule2;

class PluralRule2Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule2();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(0, 0);
		$data[] = array(1, 0);

		// Plural: 1
		for ($i = 0; $i < 20; $i += 1) {
			$data[] = array(rand(2, 500), 1);
		}

		return $data;
	}
}
