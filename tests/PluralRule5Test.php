<?php
use l10n\Plural\PluralRule5;

class PluralRule5Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule5();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		// Plural: 1
		$data[] = array(0, 1);

		// Plural: 1 + 2
		for ($i = 2; $i < 200; $i += 1) {
			$data[] = array($i, $i % 100 > 0 && $i % 100 < 20 ? 1 : 2);
		}

		return $data;
	}
}
