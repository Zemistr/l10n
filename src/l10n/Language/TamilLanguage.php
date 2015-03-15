<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class TamilLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ta';
	}

	public function getIso639_2() {
		return 'tam';
	}

	public function getEnglishName() {
		return 'Tamil';
	}

	public function getOriginalName() {
		return 'தமிழ்';
	}

	public function isRtl() {
		return false;
	}
}
