<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class WolofLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'wo';
	}

	public function getIso639_2() {
		return 'wol';
	}

	public function getEnglishName() {
		return 'Wolof';
	}

	public function getOriginalName() {
		return 'Wollof';
	}

	public function isRtl() {
		return false;
	}
}
