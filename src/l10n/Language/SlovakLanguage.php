<?php
namespace l10n\Language;

use l10n\Plural\PluralRule8;

class SlovakLanguage extends PluralRule8 implements ILanguage {
	public function getIso639_1() {
		return 'sk';
	}

	public function getIso639_2() {
		return 'slo';
	}

	public function getEnglishName() {
		return 'Slovak';
	}

	public function getOriginalName() {
		return 'slovenčina';
	}

	public function isRtl() {
		return false;
	}
}
