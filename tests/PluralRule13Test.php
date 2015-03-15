<?php
use l10n\Plural\PluralRule13;

class PluralRule13Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule13();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		// Plural: 1
		$data[] = array(0, 1);
		$data[] = array(2, 1);
		$data[] = array(3, 1);
		$data[] = array(4, 1);
		$data[] = array(5, 1);
		$data[] = array(6, 1);
		$data[] = array(7, 1);
		$data[] = array(8, 1);
		$data[] = array(9, 1);
		$data[] = array(10, 1);

		for ($i = 1; $i < 5; $i += 1) {
			$data[] = array(($i * 100) + 1, 1);
			$data[] = array(($i * 100) + 2, 1);
			$data[] = array(($i * 100) + 3, 1);
			$data[] = array(($i * 100) + 4, 1);
			$data[] = array(($i * 100) + 5, 1);
			$data[] = array(($i * 100) + 6, 1);
			$data[] = array(($i * 100) + 7, 1);
			$data[] = array(($i * 100) + 8, 1);
			$data[] = array(($i * 100) + 9, 1);
			$data[] = array(($i * 100) + 10, 1);
		}

		// Plural: 2
		$data[] = array(11, 2);
		$data[] = array(12, 2);
		$data[] = array(13, 2);
		$data[] = array(14, 2);
		$data[] = array(15, 2);
		$data[] = array(16, 2);
		$data[] = array(17, 2);
		$data[] = array(18, 2);
		$data[] = array(19, 2);

		for ($i = 1; $i < 5; $i += 1) {
			$data[] = array(($i * 100) + 11, 2);
			$data[] = array(($i * 100) + 12, 2);
			$data[] = array(($i * 100) + 13, 2);
			$data[] = array(($i * 100) + 14, 2);
			$data[] = array(($i * 100) + 15, 2);
			$data[] = array(($i * 100) + 16, 2);
			$data[] = array(($i * 100) + 17, 2);
			$data[] = array(($i * 100) + 18, 2);
			$data[] = array(($i * 100) + 19, 2);
		}

		// Plural: 3
		for ($i = 20; $i < 101; $i += 1) {
			$data[] = array($i, 3);
			$data[] = array($i + 100, 3);
			$data[] = array($i + 200, 3);
			$data[] = array($i + 300, 3);
		}

		return $data;
	}
}
