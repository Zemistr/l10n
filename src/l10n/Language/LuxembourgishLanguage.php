<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class LuxembourgishLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'lb';
	}

	public function getIso639_2() {
		return 'ltz';
	}

	public function getEnglishName() {
		return 'Luxembourgish';
	}

	public function getOriginalName() {
		return 'Lëtzebuergesch';
	}

	public function isRtl() {
		return false;
	}
}
