<?php
namespace l10n\Language;

use l10n\Plural\PluralRule6;

class LithuanianLanguage extends PluralRule6 implements ILanguage {
	public function getIso639_1() {
		return 'lt';
	}

	public function getIso639_2() {
		return 'lit';
	}

	public function getEnglishName() {
		return 'Lithuanian';
	}

	public function getOriginalName() {
		return 'lietuvių kalba';
	}

	public function isRtl() {
		return false;
	}
}
