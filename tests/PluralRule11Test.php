<?php
use l10n\Plural\PluralRule11;

class PluralRule11Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule11();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		// Plural: 1
		$data[] = array(2, 1);

		// Plural: 2
		$data[] = array(3, 2);
		$data[] = array(4, 2);
		$data[] = array(5, 2);
		$data[] = array(6, 2);

		// Plural: 3
		$data[] = array(7, 3);
		$data[] = array(8, 3);
		$data[] = array(9, 3);
		$data[] = array(10, 3);

		// Plural: 4
		$data[] = array(0, 4);

		for ($i = 11; $i < 200; $i += 1) {
			$data[] = array($i, 4);
		}

		return $data;
	}
}
