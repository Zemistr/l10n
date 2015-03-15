<?php
namespace l10n\Language;

use l10n\Plural\PluralRule9;

class PolishLanguage extends PluralRule9 implements ILanguage {
	public function getIso639_1() {
		return 'pl';
	}

	public function getIso639_2() {
		return 'pol';
	}

	public function getEnglishName() {
		return 'Polish';
	}

	public function getOriginalName() {
		return 'Polski';
	}

	public function isRtl() {
		return false;
	}
}
