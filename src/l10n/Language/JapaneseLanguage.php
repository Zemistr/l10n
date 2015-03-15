<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class JapaneseLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'ja';
	}

	public function getIso639_2() {
		return 'jpn';
	}

	public function getEnglishName() {
		return 'Japanese';
	}

	public function getOriginalName() {
		return '日本語';
	}

	public function isRtl() {
		return false;
	}
}
