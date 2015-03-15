<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class SindhiLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'sd';
	}

	public function getIso639_2() {
		return 'snd';
	}

	public function getEnglishName() {
		return 'Sindhi';
	}

	public function getOriginalName() {
		return 'सिन्धी‫سنڌي، سندھی‬';
	}

	public function isRtl() {
		return false;
	}
}
