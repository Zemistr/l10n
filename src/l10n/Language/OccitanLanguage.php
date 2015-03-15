<?php
namespace l10n\Language;

use l10n\Plural\PluralRule2;

class OccitanLanguage extends PluralRule2 implements ILanguage {
	public function getIso639_1() {
		return 'oc';
	}

	public function getIso639_2() {
		return 'oci';
	}

	public function getEnglishName() {
		return 'Occitan';
	}

	public function getOriginalName() {
		return 'Occitan';
	}

	public function isRtl() {
		return false;
	}
}
