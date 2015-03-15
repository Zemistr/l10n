<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class HungarianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'hu';
	}

	public function getIso639_2() {
		return 'hun';
	}

	public function getEnglishName() {
		return 'Hungarian';
	}

	public function getOriginalName() {
		return 'Magyar';
	}

	public function isRtl() {
		return false;
	}
}
