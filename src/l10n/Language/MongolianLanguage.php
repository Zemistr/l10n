<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class MongolianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'mn';
	}

	public function getIso639_2() {
		return 'mon';
	}

	public function getEnglishName() {
		return 'Mongolian';
	}

	public function getOriginalName() {
		return 'Монгол';
	}

	public function isRtl() {
		return false;
	}
}
