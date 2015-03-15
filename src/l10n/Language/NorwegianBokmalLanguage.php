<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class NorwegianBokmalLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'nb';
	}

	public function getIso639_2() {
		return 'nob';
	}

	public function getEnglishName() {
		return 'Norwegian Bokmål';
	}

	public function getOriginalName() {
		return 'Norsk';
	}

	public function isRtl() {
		return false;
	}
}
