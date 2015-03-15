<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class NepaliLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ne';
	}

	public function getIso639_2() {
		return 'nep';
	}

	public function getEnglishName() {
		return 'Nepali';
	}

	public function getOriginalName() {
		return 'नेपाली';
	}

	public function isRtl() {
		return false;
	}
}
