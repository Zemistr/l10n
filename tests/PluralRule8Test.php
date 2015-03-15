<?php
use l10n\Plural\PluralRule8;

class PluralRule8Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule8();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		// Plural: 1
		$data[] = array(2, 1);
		$data[] = array(3, 1);
		$data[] = array(4, 1);

		// Plural: 2
		$data[] = array(0, 2);

		for ($i = 5; $i < 200; $i += 1) {
			$data[] = array($i, 2);
		}

		return $data;
	}
}
