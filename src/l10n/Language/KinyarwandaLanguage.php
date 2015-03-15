<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class KinyarwandaLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'rw';
	}

	public function getIso639_2() {
		return 'kin';
	}

	public function getEnglishName() {
		return 'Kinyarwanda';
	}

	public function getOriginalName() {
		return 'Kinyarwanda';
	}

	public function isRtl() {
		return false;
	}
}
