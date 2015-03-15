<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class TigrinyaLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'ti';
	}

	public function getIso639_2() {
		return 'tir';
	}

	public function getEnglishName() {
		return 'Tigrinya';
	}

	public function getOriginalName() {
		return 'ትግርኛ';
	}

	public function isRtl() {
		return false;
	}
}
