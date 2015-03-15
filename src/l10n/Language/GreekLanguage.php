<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class GreekLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'el';
	}

	public function getIso639_2() {
		return 'gre';
	}

	public function getEnglishName() {
		return 'Greek';
	}

	public function getOriginalName() {
		return 'Ελληνικά';
	}

	public function isRtl() {
		return false;
	}
}
