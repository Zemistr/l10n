<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class AragoneseLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'an';
	}

	public function getIso639_2() {
		return 'arg';
	}

	public function getEnglishName() {
		return 'Aragonese';
	}

	public function getOriginalName() {
		return 'Aragonés';
	}

	public function isRtl() {
		return false;
	}
}
