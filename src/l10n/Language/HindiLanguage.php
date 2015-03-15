<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class HindiLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'hi';
	}

	public function getIso639_2() {
		return 'hin';
	}

	public function getEnglishName() {
		return 'Hindi';
	}

	public function getOriginalName() {
		return 'हिन्दी';
	}

	public function isRtl() {
		return false;
	}
}
