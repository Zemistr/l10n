<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class LingalaLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'ln';
	}

	public function getIso639_2() {
		return 'lin';
	}

	public function getEnglishName() {
		return 'Lingala';
	}

	public function getOriginalName() {
		return 'Lingála';
	}

	public function isRtl() {
		return false;
	}
}
