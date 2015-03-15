<?php
namespace l10n\Language;

use l10n\Plural\PluralRule1;

class EsperantoLanguage extends PluralRule1 implements ILanguage {
	public function getIso639_1() {
		return 'eo';
	}

	public function getIso639_2() {
		return 'epo';
	}

	public function getEnglishName() {
		return 'Esperanto';
	}

	public function getOriginalName() {
		return 'Esperanto';
	}

	public function isRtl() {
		return false;
	}
}
