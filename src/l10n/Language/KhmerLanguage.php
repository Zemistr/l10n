<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class KhmerLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'km';
	}

	public function getIso639_2() {
		return 'khm';
	}

	public function getEnglishName() {
		return 'Khmer';
	}

	public function getOriginalName() {
		return 'ភាសាខ្មែរ';
	}

	public function isRtl() {
		return false;
	}
}
