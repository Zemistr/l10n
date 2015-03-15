<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule15 implements IPlural {
	final public function getPlural($n = 1) {
		return $n % 10 == 1 && $n % 100 != 11 ? 0 : 1;
	}

	final public function getPluralForm() {
		return 'nplurals=2; plural=n%10==1&&n%100!=11?0:1;';
	}

	final public function getPluralsCount() {
		return 2;
	}
}
