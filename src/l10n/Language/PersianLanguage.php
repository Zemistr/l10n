<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class PersianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'fa';
	}

	public function getIso639_2() {
		return 'per';
	}

	public function getEnglishName() {
		return 'Persian';
	}

	public function getOriginalName() {
		return '‫فارسی‬';
	}

	public function isRtl() {
		return true;
	}
}
