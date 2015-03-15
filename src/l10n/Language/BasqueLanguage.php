<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class BasqueLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'eu';
	}

	public function getIso639_2() {
		return 'baq';
	}

	public function getEnglishName() {
		return 'Basque';
	}

	public function getOriginalName() {
		return 'euskara';
	}

	public function isRtl() {
		return false;
	}
}
