<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class FaroeseLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'fo';
	}

	public function getIso639_2() {
		return 'fao';
	}

	public function getEnglishName() {
		return 'Faroese';
	}

	public function getOriginalName() {
		return 'Føroyskt';
	}

	public function isRtl() {
		return false;
	}
}
