<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class ThaiLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'th';
	}

	public function getIso639_2() {
		return 'tha';
	}

	public function getEnglishName() {
		return 'Thai';
	}

	public function getOriginalName() {
		return 'ไทย';
	}

	public function isRtl() {
		return false;
	}
}
