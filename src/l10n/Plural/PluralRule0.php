<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule0 implements IPlural {
	final public function getPlural($n = 1) {
		return 0;
	}

	final public function getPluralForm() {
		return 'nplurals=1; plural=0;';
	}

	final public function getPluralsCount() {
		return 1;
	}
}
