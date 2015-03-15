<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class KurdishLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ku';
	}

	public function getIso639_2() {
		return 'kur';
	}

	public function getEnglishName() {
		return 'Kurdish';
	}

	public function getOriginalName() {
		return 'Kurdî‫كوردی‬';
	}

	public function isRtl() {
		return false;
	}
}
