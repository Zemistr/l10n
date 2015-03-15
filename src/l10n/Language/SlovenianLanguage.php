<?php
namespace l10n\Language;

use l10n\Plural\PluralRule10;

class SlovenianLanguage extends PluralRule10 implements ILanguage {
	public function getIso639_1() {
		return 'sl';
	}

	public function getIso639_2() {
		return 'slv';
	}

	public function getEnglishName() {
		return 'Slovenian';
	}

	public function getOriginalName() {
		return 'slovenščina';
	}

	public function isRtl() {
		return false;
	}
}
