<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class KazakhLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'kk';
	}

	public function getIso639_2() {
		return 'kaz';
	}

	public function getEnglishName() {
		return 'Kazakh';
	}

	public function getOriginalName() {
		return 'Қазақ тілі';
	}

	public function isRtl() {
		return false;
	}
}
