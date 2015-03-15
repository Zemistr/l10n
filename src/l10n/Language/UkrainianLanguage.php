<?php
namespace l10n\Language;

use l10n\Plural\PluralRule7;

class UkrainianLanguage extends PluralRule7 implements ILanguage {
	public function getIso639_1() {
		return 'uk';
	}

	public function getIso639_2() {
		return 'ukr';
	}

	public function getEnglishName() {
		return 'Ukrainian';
	}

	public function getOriginalName() {
		return 'українська мова';
	}

	public function isRtl() {
		return false;
	}
}
