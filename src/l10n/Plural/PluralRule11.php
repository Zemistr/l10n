<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule11 implements IPlural {
	final public function getPlural($n = 1) {
		return $n == 1 ? 0 : ($n == 2 ? 1 : ($n >= 3 && $n <= 6 ? 2 : ($n >= 7 && $n <= 10 ? 3 : 4)));
	}

	final public function getPluralForm() {
		return 'nplurals=5; plural=n==1?0:(n==2?1:(n>=3&&n<=6?2:(n>=7&&n<=10?3:4)));';
	}

	final public function getPluralsCount() {
		return 5;
	}
}
