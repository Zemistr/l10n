<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class IndonesianLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'id';
	}

	public function getIso639_2() {
		return 'ind';
	}

	public function getEnglishName() {
		return 'Indonesian';
	}

	public function getOriginalName() {
		return 'Bahasa Indonesia';
	}

	public function isRtl() {
		return false;
	}
}
