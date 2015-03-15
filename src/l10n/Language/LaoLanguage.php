<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class LaoLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'lo';
	}

	public function getIso639_2() {
		return 'lao';
	}

	public function getEnglishName() {
		return 'Lao';
	}

	public function getOriginalName() {
		return 'ພາສາລາວ';
	}

	public function isRtl() {
		return false;
	}
}
