<?php
namespace l10n\Language;

use l10n\Plural\PluralRule11;

class IrishLanguage extends PluralRule11 implements ILanguage {
	public function getIso639_1() {
		return 'ga';
	}

	public function getIso639_2() {
		return 'gle';
	}

	public function getEnglishName() {
		return 'Irish';
	}

	public function getOriginalName() {
		return 'Gaeilge';
	}

	public function isRtl() {
		return false;
	}
}
