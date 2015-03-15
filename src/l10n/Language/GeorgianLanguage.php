<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class GeorgianLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'ka';
	}

	public function getIso639_2() {
		return 'geo';
	}

	public function getEnglishName() {
		return 'Georgian';
	}

	public function getOriginalName() {
		return 'ქართული';
	}

	public function isRtl() {
		return false;
	}
}
