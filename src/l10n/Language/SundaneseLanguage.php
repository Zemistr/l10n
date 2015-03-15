<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class SundaneseLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'su';
	}

	public function getIso639_2() {
		return 'sun';
	}

	public function getEnglishName() {
		return 'Sundanese';
	}

	public function getOriginalName() {
		return 'Basa Sunda';
	}

	public function isRtl() {
		return false;
	}
}
