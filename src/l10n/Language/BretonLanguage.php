<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class BretonLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'br';
	}

	public function getIso639_2() {
		return 'bre';
	}

	public function getEnglishName() {
		return 'Breton';
	}

	public function getOriginalName() {
		return 'brezhoneg';
	}

	public function isRtl() {
		return false;
	}
}
