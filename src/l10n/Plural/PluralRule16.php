<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule16 implements IPlural {
	final public function getPlural($n = 1) {
		return $n % 10 == 1 && $n % 100 != 11 && $n % 100 != 71 && $n % 100 != 91 ? 0 : ($n % 10 == 2 && $n % 100 != 12 && $n % 100 != 72 && $n % 100 != 92 ? 1 : (($n % 10 == 3 || $n % 10 == 4 || $n % 10 == 9) && $n % 100 != 13 && $n % 100 != 14 && $n % 100 != 19 && $n % 100 != 73 && $n % 100 != 74 && $n % 100 != 79 && $n % 100 != 93 && $n % 100 != 94 && $n % 100 != 99 ? 2 : ($n % 1000000 == 0 && $n != 0 ? 3 : 4)));
	}

	final public function getPluralForm() {
		return 'nplurals=5; plural=n%10==1&&n%100!=11&&n%100!=71&&n%100!=91?0:(n%10==2&&n%100!=12&&n%100!=72&&n%100!=92?1:((n%10==3||n%10==4||n%10==9)&&n%100!=13&&n%100!=14&&n%100!=19&&n%100!=73&&n%100!=74&&n%100!=79&&n%100!=93&&n%100!=94&&n%100!=99?2:(n%1000000==0&&n!=0?3:4)));';
	}

	final public function getPluralsCount() {
		return 5;
	}
}
