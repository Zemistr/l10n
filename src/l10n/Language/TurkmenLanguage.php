<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class TurkmenLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'tk';
	}

	public function getIso639_2() {
		return 'tuk';
	}

	public function getEnglishName() {
		return 'Turkmen';
	}

	public function getOriginalName() {
		return 'Türkmen';
	}

	public function isRtl() {
		return false;
	}
}
