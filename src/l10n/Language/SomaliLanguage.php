<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class SomaliLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'so';
	}

	public function getIso639_2() {
		return 'som';
	}

	public function getEnglishName() {
		return 'Somali';
	}

	public function getOriginalName() {
		return 'Soomaaliga';
	}

	public function isRtl() {
		return false;
	}
}
