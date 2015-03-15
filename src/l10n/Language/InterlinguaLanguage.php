<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class InterlinguaLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ia';
	}

	public function getIso639_2() {
		return 'ina';
	}

	public function getEnglishName() {
		return 'Interlingua';
	}

	public function getOriginalName() {
		return 'Interlingua';
	}

	public function isRtl() {
		return false;
	}
}
