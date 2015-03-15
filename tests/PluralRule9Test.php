<?php
use l10n\Plural\PluralRule9;

class PluralRule9Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule9();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		// Plural: 1
		$data[] = array(2, 1);
		$data[] = array(3, 1);
		$data[] = array(4, 1);

		for ($i = 22; $i < 400; $i += 10) {
			if ($i % 100 != 12) {
				$data[] = array($i, 1);
				$data[] = array($i + 1, 1);
				$data[] = array($i + 2, 1);
			}
		}

		// Plural: 2
		$data[] = array(0, 2);

		for ($i = 5; $i < 22; $i += 1) {
			$data[] = array($i, 2);
		}

		for ($i = 25; $i < 250; $i += 10) {
			$data[] = array($i, 2);
			$data[] = array($i + 1, 2);
			$data[] = array($i + 2, 2);
			$data[] = array($i + 3, 2);
			$data[] = array($i + 4, 2);
			$data[] = array($i + 5, 2);
			$data[] = array($i + 6, 2);
		}

		return $data;
	}
}
