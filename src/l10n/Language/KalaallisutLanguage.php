<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class KalaallisutLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'kl';
	}

	public function getIso639_2() {
		return 'kal';
	}

	public function getEnglishName() {
		return 'Kalaallisut';
	}

	public function getOriginalName() {
		return 'kalaallisut';
	}

	public function isRtl() {
		return false;
	}
}
