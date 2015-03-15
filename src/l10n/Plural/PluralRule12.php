<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule12 implements IPlural {
	final public function getPlural($n = 1) {
		return $n == 0 ? 5 : ($n == 1 ? 0 : ($n == 2 ? 1 : ($n % 100 >= 3 && $n % 100 <= 10 ? 2 : ($n % 100 >= 11 && $n % 100 <= 99 ? 3 : 4))));
	}

	final public function getPluralForm() {
		return 'nplurals=6; plural=n==0?5:(n==1?0:(n==2?1:(n%100>=3&&n%100<=10?2:(n%100>=11&&n%100<=99?3:4))));';
	}

	final public function getPluralsCount() {
		return 6;
	}
}
