<?php
namespace l10n\Language;

use l10n\Plural\PluralRule12;

class ArabicLanguage extends PluralRule12 implements ILanguage {
	public function getIso639_1() {
		return 'ar';
	}

	public function getIso639_2() {
		return 'ara';
	}

	public function getEnglishName() {
		return 'Arabic';
	}

	public function getOriginalName() {
		return '‫العربية‬';
	}

	public function isRtl() {
		return true;
	}
}
