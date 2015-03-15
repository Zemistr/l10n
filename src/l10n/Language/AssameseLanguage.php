<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class AssameseLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'as';
	}

	public function getIso639_2() {
		return 'asm';
	}

	public function getEnglishName() {
		return 'Assamese';
	}

	public function getOriginalName() {
		return 'অসমীয়া';
	}

	public function isRtl() {
		return false;
	}
}
