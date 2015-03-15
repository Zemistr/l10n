<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class ChineseLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'zh';
	}

	public function getIso639_2() {
		return 'chi';
	}

	public function getEnglishName() {
		return 'Chinese';
	}

	public function getOriginalName() {
		return '中文、汉语、漢語';
	}

	public function isRtl() {
		return false;
	}
}
