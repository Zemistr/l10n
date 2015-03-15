<?php
use l10n\Plural\PluralRule15;

class PluralRule15Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule15();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		for ($i = 21; $i < 522; $i += 10) {
			if ($i % 100 != 11) {
				$data[] = array($i, 0);
			}
		}

		// Plural: 1
		$data[] = array(0, 1);

		for ($i = 2; $i < 250; $i += 1) {
			if ($i % 10 != 1 || $i % 100 == 11) {
				$data[] = array($i, 1);
			}
		}

		return $data;
	}
}
