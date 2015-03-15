<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class TibetanLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'bo';
	}

	public function getIso639_2() {
		return 'tib';
	}

	public function getEnglishName() {
		return 'Tibetan';
	}

	public function getOriginalName() {
		return 'བོད་ཡིག';
	}

	public function isRtl() {
		return false;
	}
}
