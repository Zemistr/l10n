<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule13 implements IPlural {
	final public function getPlural($n = 1) {
		return $n == 1 ? 0 : ($n == 0 || $n % 100 > 0 && $n % 100 <= 10 ? 1 : ($n % 100 > 10 && $n % 100 < 20 ? 2 : 3));
	}

	final public function getPluralForm() {
		return 'nplurals=4; plural=n==1?0:(n==0||n%100>0&&n%100<=10?1:(n%100>10&&n%100<20?2:3));';
	}

	final public function getPluralsCount() {
		return 4;
	}
}
