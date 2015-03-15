<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class SouthernSothoLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'st';
	}

	public function getIso639_2() {
		return 'sot';
	}

	public function getEnglishName() {
		return 'Southern Sotho';
	}

	public function getOriginalName() {
		return 'seSotho';
	}

	public function isRtl() {
		return false;
	}
}
