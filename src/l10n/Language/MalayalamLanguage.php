<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class MalayalamLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ml';
	}

	public function getIso639_2() {
		return 'mal';
	}

	public function getEnglishName() {
		return 'Malayalam';
	}

	public function getOriginalName() {
		return 'മലയാളം';
	}

	public function isRtl() {
		return false;
	}
}
