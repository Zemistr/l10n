<?php
namespace l10n\Language;

use l10n\Plural\PluralRule8;

class CzechLanguage extends PluralRule8 implements ILanguage {
	public function getIso639_1() {
		return 'cs';
	}

	public function getIso639_2() {
		return 'cze';
	}

	public function getEnglishName() {
		return 'Czech';
	}

	public function getOriginalName() {
		return 'čeština';
	}

	public function isRtl() {
		return false;
	}
}
