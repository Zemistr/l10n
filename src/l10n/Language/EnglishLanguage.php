<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class EnglishLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'en';
	}

	public function getIso639_2() {
		return 'eng';
	}

	public function getEnglishName() {
		return 'English';
	}

	public function getOriginalName() {
		return 'English';
	}

	public function isRtl() {
		return false;
	}
}
