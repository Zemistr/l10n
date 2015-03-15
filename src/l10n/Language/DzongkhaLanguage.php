<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class DzongkhaLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'dz';
	}

	public function getIso639_2() {
		return 'dzo';
	}

	public function getEnglishName() {
		return 'Dzongkha';
	}

	public function getOriginalName() {
		return 'རྫོང་ཁ';
	}

	public function isRtl() {
		return false;
	}
}
