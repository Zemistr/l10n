<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class TeluguLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'te';
	}

	public function getIso639_2() {
		return 'tel';
	}

	public function getEnglishName() {
		return 'Telugu';
	}

	public function getOriginalName() {
		return 'తెలుగు';
	}

	public function isRtl() {
		return false;
	}
}
