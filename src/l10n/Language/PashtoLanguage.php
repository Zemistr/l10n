<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class PashtoLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ps';
	}

	public function getIso639_2() {
		return 'pus';
	}

	public function getEnglishName() {
		return 'Pashto';
	}

	public function getOriginalName() {
		return '‫پښتو‬';
	}

	public function isRtl() {
		return false;
	}
}
