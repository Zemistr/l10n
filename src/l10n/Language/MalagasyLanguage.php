<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class MalagasyLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'mg';
	}

	public function getIso639_2() {
		return 'mlg';
	}

	public function getEnglishName() {
		return 'Malagasy';
	}

	public function getOriginalName() {
		return 'Malagasy fiteny';
	}

	public function isRtl() {
		return false;
	}
}
