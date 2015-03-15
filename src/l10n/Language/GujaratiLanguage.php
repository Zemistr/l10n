<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class GujaratiLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'gu';
	}

	public function getIso639_2() {
		return 'guj';
	}

	public function getEnglishName() {
		return 'Gujarati';
	}

	public function getOriginalName() {
		return 'ગુજરાતી';
	}

	public function isRtl() {
		return false;
	}
}
