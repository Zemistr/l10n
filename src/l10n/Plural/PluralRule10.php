<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule10 implements IPlural {
	final public function getPlural($n = 1) {
		return $n % 100 == 1 ? 0 : ($n % 100 == 2 ? 1 : ($n % 100 == 3 || $n % 100 == 4 ? 2 : 3));
	}

	final public function getPluralForm() {
		return 'nplurals=4; plural=n%100==1?0:(n%100==2?1:(n%100==3||n%100==4?2:3));';
	}

	final public function getPluralsCount() {
		return 4;
	}
}
