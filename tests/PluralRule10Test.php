<?php
use l10n\Plural\PluralRule10;

class PluralRule10Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule10();
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

		// Plural: 3
		$data[] = array(0, 3);

		for ($i = 5; $i < 300; $i += 1) {
			if ($i > 100) {
				if ($i % 100 > 4) {
					$data[] = array($i, 3);
				}
			}
			else {
				$data[] = array($i, 3);
			}
		}

		// Plural: 0 + 1 + 2
		for ($i = 1; $i < 12; $i += 1) {
			$data[] = array(($i * 100) + 1, 0);
			$data[] = array(($i * 100) + 2, 1);
			$data[] = array(($i * 100) + 3, 2);
		}

		return $data;
	}
}
