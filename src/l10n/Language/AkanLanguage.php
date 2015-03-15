<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class AkanLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'ak';
	}

	public function getIso639_2() {
		return 'aka';
	}

	public function getEnglishName() {
		return 'Akan';
	}

	public function getOriginalName() {
		return 'Akan';
	}

	public function isRtl() {
		return false;
	}
}
