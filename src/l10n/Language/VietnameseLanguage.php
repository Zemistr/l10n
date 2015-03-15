<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class VietnameseLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'vi';
	}

	public function getIso639_2() {
		return 'vie';
	}

	public function getEnglishName() {
		return 'Vietnamese';
	}

	public function getOriginalName() {
		return 'Tiếng Việt';
	}

	public function isRtl() {
		return false;
	}
}
