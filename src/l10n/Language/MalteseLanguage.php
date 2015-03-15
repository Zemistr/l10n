<?php
namespace l10n\Language;

use l10n\Plural\PluralRule13;

class MalteseLanguage extends PluralRule13 implements ILanguage {
	public function getIso639_1() {
		return 'mt';
	}

	public function getIso639_2() {
		return 'mlt';
	}

	public function getEnglishName() {
		return 'Maltese';
	}

	public function getOriginalName() {
		return 'Malti';
	}

	public function isRtl() {
		return false;
	}
}
