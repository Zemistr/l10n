<?php
use l10n\Plural\PluralRule16;

class PluralRule16Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule16();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		for ($i = 21; $i < 300; $i += 10) {
			if ($i % 100 != 11 && $i % 100 != 71 && $i % 100 != 91) {
				$data[] = array($i, 0);
			}
		}

		// Plural: 1
		$data[] = array(2, 1);

		for ($i = 22; $i < 300; $i += 10) {
			if ($i % 100 != 12 && $i % 100 != 72 && $i % 100 != 92) {
				$data[] = array($i, 1);
			}
		}

		// Plural: 2
		$data[] = array(3, 2);
		$data[] = array(4, 2);
		$data[] = array(9, 2);

		for ($i = 23; $i < 300; $i += 10) {
			if ($i % 100 != 13 && $i % 100 != 73 && $i % 100 != 93) {
				$data[] = array($i, 2);
				$data[] = array($i + 1, 2);
				$data[] = array($i + 6, 2);
			}
		}

		// Plural: 3
		for ($i = 1; $i < 100; $i += 1) {
			$data[] = array($i * 1000000, 3);
		}

		// Plural: 4
		$data[] = array(0, 4);
		$data[] = array(5, 4);
		$data[] = array(6, 4);
		$data[] = array(7, 4);
		$data[] = array(8, 4);
		$data[] = array(10, 4);
		$data[] = array(11, 4);
		$data[] = array(12, 4);
		$data[] = array(13, 4);
		$data[] = array(14, 4);
		$data[] = array(15, 4);
		$data[] = array(16, 4);
		$data[] = array(17, 4);
		$data[] = array(18, 4);
		$data[] = array(19, 4);

		for ($i = 20; $i < 300; $i += 10) {
			$data[] = array($i, 4);
			$data[] = array($i + 5, 4);
			$data[] = array($i + 6, 4);
			$data[] = array($i + 7, 4);
			$data[] = array($i + 8, 4);
		}

		return $data;
	}
}
