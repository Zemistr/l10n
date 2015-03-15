<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule14 implements IPlural {
	final public function getPlural($n = 1) {
		return $n % 10 == 1 ? 0 : ($n % 10 == 2 ? 1 : 2);
	}

	final public function getPluralForm() {
		return 'nplurals=3; plural=n%10==1?0:(n%10==2?1:2);';
	}

	final public function getPluralsCount() {
		return 3;
	}
}
