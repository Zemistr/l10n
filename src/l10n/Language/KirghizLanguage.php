<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class KirghizLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'ky';
	}

	public function getIso639_2() {
		return 'kir';
	}

	public function getEnglishName() {
		return 'Kirghiz';
	}

	public function getOriginalName() {
		return 'кыргыз тили';
	}

	public function isRtl() {
		return false;
	}
}
