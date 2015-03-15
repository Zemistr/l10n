<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class MarathiLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'mr';
	}

	public function getIso639_2() {
		return 'mar';
	}

	public function getEnglishName() {
		return 'Marathi';
	}

	public function getOriginalName() {
		return 'मराठी';
	}

	public function isRtl() {
		return false;
	}
}
