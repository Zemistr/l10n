<?php
namespace l10n\Language;

use l10n\Plural\PluralRule4;

class GaelicLanguage extends PluralRule4 implements ILanguage {
	public function getIso639_1() {
		return 'gd';
	}

	public function getIso639_2() {
		return 'gla';
	}

	public function getEnglishName() {
		return 'Gaelic';
	}

	public function getOriginalName() {
		return 'Gàidhlig';
	}

	public function isRtl() {
		return false;
	}
}
