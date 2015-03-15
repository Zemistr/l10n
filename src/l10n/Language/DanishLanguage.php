<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class DanishLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'da';
	}

	public function getIso639_2() {
		return 'dan';
	}

	public function getEnglishName() {
		return 'Danish';
	}

	public function getOriginalName() {
		return 'dansk';
	}

	public function isRtl() {
		return false;
	}
}
