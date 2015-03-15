<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class GalicianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'gl';
	}

	public function getIso639_2() {
		return 'glg';
	}

	public function getEnglishName() {
		return 'Galician';
	}

	public function getOriginalName() {
		return 'Galego';
	}

	public function isRtl() {
		return false;
	}
}
