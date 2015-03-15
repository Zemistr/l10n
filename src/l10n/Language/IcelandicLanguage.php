<?php
namespace l10n\Language;

use l10n\Plural\PluralRule15;

class IcelandicLanguage extends PluralRule15 implements ILanguage {
	public function getIso639_1() {
		return 'is';
	}

	public function getIso639_2() {
		return 'ice';
	}

	public function getEnglishName() {
		return 'Icelandic';
	}

	public function getOriginalName() {
		return 'Íslenska';
	}

	public function isRtl() {
		return false;
	}
}
