<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class RaetoRomanceLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'rm';
	}

	public function getIso639_2() {
		return 'roh';
	}

	public function getEnglishName() {
		return 'Raeto-Romance';
	}

	public function getOriginalName() {
		return 'rumantsch grischun';
	}

	public function isRtl() {
		return false;
	}
}
