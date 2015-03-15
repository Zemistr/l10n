<?php
namespace l10n\Plural;

/**
 * @link https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#List_of_Plural_Rules
 */
class PluralRule4 implements IPlural {
	final public function getPlural($n = 1) {
		return $n == 1 || $n == 11 ? 0 : ($n == 2 || $n == 12 ? 1 : ($n > 0 && $n < 20 ? 2 : 3));
	}

	final public function getPluralForm() {
		return 'nplurals=4; plural=n==1||n==11?0:(n==2||n==12?1:(n>0&&n<20?2:3));';
	}

	final public function getPluralsCount() {
		return 4;
	}
}
