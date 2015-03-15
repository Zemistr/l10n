<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class MaoriLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'mi';
	}

	public function getIso639_2() {
		return 'mao';
	}

	public function getEnglishName() {
		return 'Māori';
	}

	public function getOriginalName() {
		return 'te reo Māori';
	}

	public function isRtl() {
		return false;
	}
}
