<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class BulgarianLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'bg';
	}

	public function getIso639_2() {
		return 'bul';
	}

	public function getEnglishName() {
		return 'Bulgarian';
	}

	public function getOriginalName() {
		return 'български език';
	}

	public function isRtl() {
		return false;
	}
}
