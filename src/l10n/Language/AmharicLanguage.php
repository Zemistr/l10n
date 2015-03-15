<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class AmharicLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'am';
	}

	public function getIso639_2() {
		return 'amh';
	}

	public function getEnglishName() {
		return 'Amharic';
	}

	public function getOriginalName() {
		return 'አማርኛ';
	}

	public function isRtl() {
		return false;
	}
}
