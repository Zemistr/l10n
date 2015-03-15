<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class UrduLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ur';
	}

	public function getIso639_2() {
		return 'urd';
	}

	public function getEnglishName() {
		return 'Urdu';
	}

	public function getOriginalName() {
		return '‫اردو‬';
	}

	public function isRtl() {
		return true;
	}
}
