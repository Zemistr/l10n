<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class NorthernSamiLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'se';
	}

	public function getIso639_2() {
		return 'sme';
	}

	public function getEnglishName() {
		return 'Northern Sami';
	}

	public function getOriginalName() {
		return 'Davvisámegiella';
	}

	public function isRtl() {
		return false;
	}
}
