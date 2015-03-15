<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule1 implements IPlural {
	final public function getPlural($n = 1) {
		return $n != 1 ? 1 : 0;
	}

	final public function getPluralForm() {
		return 'nplurals=2; plural=n!=1?1:0;';
	}

	final public function getPluralsCount() {
		return 2;
	}
}
