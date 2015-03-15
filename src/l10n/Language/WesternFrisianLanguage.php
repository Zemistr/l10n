<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class WesternFrisianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'fy';
	}

	public function getIso639_2() {
		return 'fry';
	}

	public function getEnglishName() {
		return 'Western Frisian';
	}

	public function getOriginalName() {
		return 'Frysk';
	}

	public function isRtl() {
		return false;
	}
}
