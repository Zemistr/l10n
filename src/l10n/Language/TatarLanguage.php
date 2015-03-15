<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class TatarLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'tt';
	}

	public function getIso639_2() {
		return 'tat';
	}

	public function getEnglishName() {
		return 'Tatar';
	}

	public function getOriginalName() {
		return 'татарча‬';
	}

	public function isRtl() {
		return true;
	}
}
