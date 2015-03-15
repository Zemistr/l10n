<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class GermanLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'de';
	}

	public function getIso639_2() {
		return 'ger';
	}

	public function getEnglishName() {
		return 'German';
	}

	public function getOriginalName() {
		return 'Deutsch';
	}

	public function isRtl() {
		return false;
	}
}
