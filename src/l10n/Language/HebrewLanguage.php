<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class HebrewLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'he';
	}

	public function getIso639_2() {
		return 'heb';
	}

	public function getEnglishName() {
		return 'Hebrew';
	}

	public function getOriginalName() {
		return '‫עברית‬';
	}

	public function isRtl() {
		return true;
	}
}
