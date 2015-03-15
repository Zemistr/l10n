<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class AymaraLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'ay';
	}

	public function getIso639_2() {
		return 'aym';
	}

	public function getEnglishName() {
		return 'Aymara';
	}

	public function getOriginalName() {
		return 'aymar aru';
	}

	public function isRtl() {
		return false;
	}
}
