<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class FulahLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ff';
	}

	public function getIso639_2() {
		return 'ful';
	}

	public function getEnglishName() {
		return 'Fulah';
	}

	public function getOriginalName() {
		return 'Fulfulde';
	}

	public function isRtl() {
		return false;
	}
}
