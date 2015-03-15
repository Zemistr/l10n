<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class YorubaLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'yo';
	}

	public function getIso639_2() {
		return 'yor';
	}

	public function getEnglishName() {
		return 'Yoruba';
	}

	public function getOriginalName() {
		return 'Yorùbá';
	}

	public function isRtl() {
		return false;
	}
}
