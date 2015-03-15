<?php
namespace l10n\Language;

use l10n\Plural\PluralRule14;

class MacedonianLanguage extends PluralRule14 implements ILanguage {
	public function getIso639_1() {
		return 'mk';
	}

	public function getIso639_2() {
		return 'mac';
	}

	public function getEnglishName() {
		return 'Macedonian';
	}

	public function getOriginalName() {
		return 'македонски јазик';
	}

	public function isRtl() {
		return false;
	}
}
