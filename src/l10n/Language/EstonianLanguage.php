<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class EstonianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'et';
	}

	public function getIso639_2() {
		return 'est';
	}

	public function getEnglishName() {
		return 'Estonian';
	}

	public function getOriginalName() {
		return 'Eesti keel';
	}

	public function isRtl() {
		return false;
	}
}
