<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class UzbekLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'uz';
	}

	public function getIso639_2() {
		return 'uzb';
	}

	public function getEnglishName() {
		return 'Uzbek';
	}

	public function getOriginalName() {
		return 'O\'zbek';
	}

	public function isRtl() {
		return true;
	}
}
