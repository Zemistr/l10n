<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class AlbanianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'sq';
	}

	public function getIso639_2() {
		return 'alb';
	}

	public function getEnglishName() {
		return 'Albanian';
	}

	public function getOriginalName() {
		return 'Shqip';
	}

	public function isRtl() {
		return false;
	}
}
