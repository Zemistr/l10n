<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class CatalanLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ca';
	}

	public function getIso639_2() {
		return 'cat';
	}

	public function getEnglishName() {
		return 'Catalan';
	}

	public function getOriginalName() {
		return 'Català';
	}

	public function isRtl() {
		return false;
	}
}
