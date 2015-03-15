<?php
namespace l10n\Language;

use l10n\Plural\PluralRule7;

class BelarusianLanguage extends PluralRule7 implements ILanguage {
	public function getIso639_1() {
		return 'be';
	}

	public function getIso639_2() {
		return 'bel';
	}

	public function getEnglishName() {
		return 'Belarusian';
	}

	public function getOriginalName() {
		return 'Беларуская';
	}

	public function isRtl() {
		return false;
	}
}
