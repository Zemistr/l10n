<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class SinhalaLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'si';
	}

	public function getIso639_2() {
		return 'sin';
	}

	public function getEnglishName() {
		return 'Sinhala';
	}

	public function getOriginalName() {
		return 'සිංහල';
	}

	public function isRtl() {
		return false;
	}
}
