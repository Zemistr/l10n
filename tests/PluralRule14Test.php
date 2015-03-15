<?php
use l10n\Plural\PluralRule14;

class PluralRule14Test extends PluralRule0Test {
	protected function setUp() {
		$this->class = new PluralRule14();
	}

	public function getPluralProvider() {
		$data = array();

		// Singular/Plural: 0
		for ($i = 1; $i < 502; $i += 10) {
			$data[] = array($i, 0);
		}

		// Plural: 1
		for ($i = 2; $i < 503; $i += 10) {
			$data[] = array($i, 1);
		}

		// Plural: 2
		$data[] = array(0, 2);

		for ($i = 3; $i < 200; $i += 10) {
			$data[] = array($i, 2);
			$data[] = array($i + 1, 2);
			$data[] = array($i + 2, 2);
			$data[] = array($i + 3, 2);
			$data[] = array($i + 4, 2);
			$data[] = array($i + 5, 2);
			$data[] = array($i + 6, 2);
			$data[] = array($i + 7, 2);
		}

		return $data;
	}
}
