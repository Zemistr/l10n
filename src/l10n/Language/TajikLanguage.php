<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class TajikLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'tg';
	}

	public function getIso639_2() {
		return 'tgk';
	}

	public function getEnglishName() {
		return 'Tajik';
	}

	public function getOriginalName() {
		return 'тоҷикӣ';
	}

	public function isRtl() {
		return true;
	}
}
