<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class TurkishLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'tr';
	}

	public function getIso639_2() {
		return 'tur';
	}

	public function getEnglishName() {
		return 'Turkish';
	}

	public function getOriginalName() {
		return 'Türkçe';
	}

	public function isRtl() {
		return false;
	}
}
