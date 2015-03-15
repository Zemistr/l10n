<?php
namespace l10n\Language;

use l10n\Plural\PluralRule7;

class RussianLanguage extends PluralRule7 implements ILanguage {
	public function getIso639_1() {
		return 'ru';
	}

	public function getIso639_2() {
		return 'rus';
	}

	public function getEnglishName() {
		return 'Russian';
	}

	public function getOriginalName() {
		return 'русский язык';
	}

	public function isRtl() {
		return false;
	}
}
