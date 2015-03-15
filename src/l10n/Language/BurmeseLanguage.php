<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class BurmeseLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'my';
	}

	public function getIso639_2() {
		return 'bur';
	}

	public function getEnglishName() {
		return 'Burmese';
	}

	public function getOriginalName() {
		return 'မ္ရန္‌မာစကား';
	}

	public function isRtl() {
		return false;
	}
}
