<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class FinnishLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'fi';
	}

	public function getIso639_2() {
		return 'fin';
	}

	public function getEnglishName() {
		return 'Finnish';
	}

	public function getOriginalName() {
		return 'Suomen kieli';
	}

	public function isRtl() {
		return false;
	}
}
