<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class SpanishLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'es';
	}

	public function getIso639_2() {
		return 'spa';
	}

	public function getEnglishName() {
		return 'Spanish';
	}

	public function getOriginalName() {
		return 'español';
	}

	public function isRtl() {
		return false;
	}
}
