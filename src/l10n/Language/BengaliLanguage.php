<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class BengaliLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'bn';
	}

	public function getIso639_2() {
		return 'ben';
	}

	public function getEnglishName() {
		return 'Bengali';
	}

	public function getOriginalName() {
		return 'বাংলা';
	}

	public function isRtl() {
		return false;
	}
}
