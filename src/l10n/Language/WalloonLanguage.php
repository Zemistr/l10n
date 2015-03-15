<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class WalloonLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'wa';
	}

	public function getIso639_2() {
		return 'wln';
	}

	public function getEnglishName() {
		return 'Walloon';
	}

	public function getOriginalName() {
		return 'Walon';
	}

	public function isRtl() {
		return false;
	}
}
