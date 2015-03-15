<?php
namespace l10n\Language;

use l10n\Plural\PluralRule0;

class MalayLanguage extends PluralRule0 implements ILanguage {
	public function getIso639_1() {
		return 'ms';
	}

	public function getIso639_2() {
		return 'may';
	}

	public function getEnglishName() {
		return 'Malay';
	}

	public function getOriginalName() {
		return 'bahasa Melayu‫بهاس ملايو‬';
	}

	public function isRtl() {
		return true;
	}
}
