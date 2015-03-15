<?php
use l10n\Plural\PluralRule12;

class PluralRule12Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule12();
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
		$data[] = array(7, 2);
		$data[] = array(8, 2);
		$data[] = array(9, 2);
		$data[] = array(10, 2);

		for ($i = 1; $i < 5; $i += 1) {
			$data[] = array(($i * 100) + 3, 2);
			$data[] = array(($i * 100) + 4, 2);
			$data[] = array(($i * 100) + 5, 2);
			$data[] = array(($i * 100) + 6, 2);
			$data[] = array(($i * 100) + 7, 2);
			$data[] = array(($i * 100) + 8, 2);
			$data[] = array(($i * 100) + 9, 2);
			$data[] = array(($i * 100) + 10, 2);
		}

		// Plural: 3
		for ($i = 11; $i < 100; $i += 1) {
			$data[] = array($i, 3);
			$data[] = array($i + 100, 3);
			$data[] = array($i + 200, 3);
			$data[] = array($i + 300, 3);
		}

		// Plural: 4
		for ($i = 1; $i < 5; $i += 1) {
			$data[] = array(($i * 100), 4);
			$data[] = array(($i * 100) + 1, 4);
			$data[] = array(($i * 100) + 2, 4);
		}

		// Plural: 5
		$data[] = array(0, 5);

		return $data;
	}
}
