<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class UighurLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'ug';
	}

	public function getIso639_2() {
		return 'uig';
	}

	public function getEnglishName() {
		return 'Uighur';
	}

	public function getOriginalName() {
		return 'Uyƣurqə‫ئۇيغۇرچ ‬';
	}

	public function isRtl() {
		return true;
	}
}
