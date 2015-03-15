<?php
use l10n\Plural\PluralRule4;

class PluralRule4Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule4();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		// Plural: 1
		$data[] = array(2, 1);

		// Plural: 1 + 2
		for ($i = 3; $i < 20; $i += 1) {
			$data[] = array($i, $i == 11 ? 0 : ($i == 12 ? 1 : 2));
		}

		// Plural: 3
		$data[] = array(0, 3);

		for ($i = 20; $i < 100; $i += 1) {
			$data[] = array($i, 3);
		}

		return $data;
	}
}
