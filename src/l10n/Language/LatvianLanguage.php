<?php
namespace l10n\Language;

use l10n\Plural\PluralRule3;

class LatvianLanguage extends PluralRule3 implements ILanguage {
	public function getIso639_1() {
		return 'lv';
	}

	public function getIso639_2() {
		return 'lav';
	}

	public function getEnglishName() {
		return 'Latvian';
	}

	public function getOriginalName() {
		return 'latviešu valoda';
	}

	public function isRtl() {
		return false;
	}
}
