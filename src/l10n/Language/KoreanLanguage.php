<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class KoreanLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'ko';
	}

	public function getIso639_2() {
		return 'kor';
	}

	public function getEnglishName() {
		return 'Korean';
	}

	public function getOriginalName() {
		return '한국어';
	}

	public function isRtl() {
		return false;
	}
}
