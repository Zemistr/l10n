<?php
use l10n\Plural\PluralRule3;

class PluralRule3Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule3();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(0, 0);

		// Plural: 1
		$data[] = array(1, 1);

		// Plural: 2
		for ($i = 2; $i < 21; $i += 1) {
			$data[] = array($i, 2);
		}

		// Plural: 1 + 2
		for ($i = 21; $i < 220; $i += 1) {
			$data[] = array($i, $i % 10 == 1 && $i % 100 != 11 ? 1 : 2);
		}

		return $data;
	}
}
