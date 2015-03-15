<?php
namespace l10n\Language;

use l10n\Plural\PluralRule7;

class BosnianLanguage extends PluralRule7 implements ILanguage {
	public function getIso639_1() {
		return 'bs';
	}

	public function getIso639_2() {
		return 'bos';
	}

	public function getEnglishName() {
		return 'Bosnian';
	}

	public function getOriginalName() {
		return 'bosanski jezik';
	}

	public function isRtl() {
		return false;
	}
}
