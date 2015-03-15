<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class ArmenianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'hy';
	}

	public function getIso639_2() {
		return 'arm';
	}

	public function getEnglishName() {
		return 'Armenian';
	}

	public function getOriginalName() {
		return 'Հայերեն';
	}

	public function isRtl() {
		return false;
	}
}
