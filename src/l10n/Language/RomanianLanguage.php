<?php
namespace l10n\Language;

use l10n\Plural\PluralRule5;

class RomanianLanguage extends PluralRule5 implements ILanguage {
	public function getIso639_1() {
		return 'ro';
	}

	public function getIso639_2() {
		return 'rum';
	}

	public function getEnglishName() {
		return 'Romanian';
	}

	public function getOriginalName() {
		return 'română';
	}

	public function isRtl() {
		return false;
	}
}
