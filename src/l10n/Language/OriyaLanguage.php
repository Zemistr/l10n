<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class OriyaLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'or';
	}

	public function getIso639_2() {
		return 'ori';
	}

	public function getEnglishName() {
		return 'Oriya';
	}

	public function getOriginalName() {
		return 'ଓଡ଼ିଆ';
	}

	public function isRtl() {
		return false;
	}
}
