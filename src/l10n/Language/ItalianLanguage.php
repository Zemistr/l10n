<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class ItalianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'it';
	}

	public function getIso639_2() {
		return 'ita';
	}

	public function getEnglishName() {
		return 'Italian';
	}

	public function getOriginalName() {
		return 'Italiano';
	}

	public function isRtl() {
		return false;
	}
}
