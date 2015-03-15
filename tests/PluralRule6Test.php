<?php
use l10n\Plural\PluralRule6;

class PluralRule6Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule6();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		$data[] = array(1, 0);

		for ($i = 21; $i < 250; $i += 10) {
			if ($i % 100 != 11) {
				$data[] = array($i, 0);
			}
		}

		// Plural: 1
		$data[] = array(0, 1);

		for ($i = 10; $i < 250; $i += 1) {
			if (!($i % 100 < 10 || $i % 100 >= 20)) {
				$data[] = array($i, 1);
			}
		}

		// Plural: 2
		for ($i = 2; $i < 10; $i += 1) {
			$data[] = array($i, 2);
		}

		for ($i = 22; $i < 250; $i += 1) {
			if ($i % 10 >= 2 && ($i % 100 < 10 || $i % 100 >= 20)) {
				$data[] = array($i, 2);
			}
		}

		return $data;
	}
}
