<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class NorwegianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'no';
	}

	public function getIso639_2() {
		return 'nor';
	}

	public function getEnglishName() {
		return 'Norwegian';
	}

	public function getOriginalName() {
		return 'Norsk';
	}

	public function isRtl() {
		return false;
	}
}
