<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class PanjabiLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'pa';
	}

	public function getIso639_2() {
		return 'pan';
	}

	public function getEnglishName() {
		return 'Panjabi';
	}

	public function getOriginalName() {
		return 'ਪੰਜਾਬੀ‫پنجابی‬';
	}

	public function isRtl() {
		return true;
	}
}
