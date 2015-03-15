<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class KannadaLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'kn';
	}

	public function getIso639_2() {
		return 'kan';
	}

	public function getEnglishName() {
		return 'Kannada';
	}

	public function getOriginalName() {
		return 'ಕನ್ನಡ';
	}

	public function isRtl() {
		return false;
	}
}
