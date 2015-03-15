<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class NorwegianNynorskLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'nn';
	}

	public function getIso639_2() {
		return 'nno';
	}

	public function getEnglishName() {
		return 'Norwegian Nynorsk';
	}

	public function getOriginalName() {
		return 'Nynorsk';
	}

	public function isRtl() {
		return false;
	}
}
