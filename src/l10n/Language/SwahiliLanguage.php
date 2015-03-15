<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class SwahiliLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'sw';
	}

	public function getIso639_2() {
		return 'swa';
	}

	public function getEnglishName() {
		return 'Swahili';
	}

	public function getOriginalName() {
		return 'Kiswahili';
	}

	public function isRtl() {
		return false;
	}
}
