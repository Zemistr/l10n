<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class HausaLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'ha';
	}

	public function getIso639_2() {
		return 'hau';
	}

	public function getEnglishName() {
		return 'Hausa';
	}

	public function getOriginalName() {
		return '‫هَوُسَ‬';
	}

	public function isRtl() {
		return true;
	}
}
