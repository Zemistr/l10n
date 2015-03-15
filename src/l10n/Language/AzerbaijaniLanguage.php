<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class AzerbaijaniLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'az';
	}

	public function getIso639_2() {
		return 'aze';
	}

	public function getEnglishName() {
		return 'Azerbaijani';
	}

	public function getOriginalName() {
		return 'azərbaycan dili';
	}

	public function isRtl() {
		return false;
	}
}
