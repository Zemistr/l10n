<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class FrenchLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'fr';
	}

	public function getIso639_2() {
		return 'fre';
	}

	public function getEnglishName() {
		return 'French';
	}

	public function getOriginalName() {
		return 'français';
	}

	public function isRtl() {
		return false;
	}
}
