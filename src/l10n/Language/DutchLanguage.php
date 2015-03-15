<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class DutchLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'nl';
	}

	public function getIso639_2() {
		return 'dut';
	}

	public function getEnglishName() {
		return 'Dutch';
	}

	public function getOriginalName() {
		return 'Nederlands';
	}

	public function isRtl() {
		return false;
	}
}
