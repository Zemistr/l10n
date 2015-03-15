<?php
namespace l10n\Language;

use l10n\Plural\PluralRule7;

class CroatianLanguage extends PluralRule7 implements ILanguage {
	public function getIso639_1() {
		return 'hr';
	}

	public function getIso639_2() {
		return 'scr';
	}

	public function getEnglishName() {
		return 'Croatian';
	}

	public function getOriginalName() {
		return 'Hrvatski';
	}

	public function isRtl() {
		return false;
	}
}
