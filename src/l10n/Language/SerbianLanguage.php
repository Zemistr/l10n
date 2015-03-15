<?php
namespace l10n\Language;

use l10n\Plural\PluralRule7;

class SerbianLanguage extends PluralRule7 implements ILanguage {
	public function getIso639_1() {
		return 'sr';
	}

	public function getIso639_2() {
		return 'scc';
	}

	public function getEnglishName() {
		return 'Serbian';
	}

	public function getOriginalName() {
		return 'српски језик';
	}

	public function isRtl() {
		return false;
	}
}
