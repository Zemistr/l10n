<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class AfrikaansLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'af';
	}

	public function getIso639_2() {
		return 'afr';
	}

	public function getEnglishName() {
		return 'Afrikaans';
	}

	public function getOriginalName() {
		return 'Afrikaans';
	}

	public function isRtl() {
		return false;
	}
}
