<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class PortugueseLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'pt';
	}

	public function getIso639_2() {
		return 'por';
	}

	public function getEnglishName() {
		return 'Portuguese';
	}

	public function getOriginalName() {
		return 'Português';
	}

	public function isRtl() {
		return false;
	}
}
