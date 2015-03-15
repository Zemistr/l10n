<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class SwedishLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'sv';
	}

	public function getIso639_2() {
		return 'swe';
	}

	public function getEnglishName() {
		return 'Swedish';
	}

	public function getOriginalName() {
		return 'Svenska';
	}

	public function isRtl() {
		return false;
	}
}
