<?php
namespace l10n\Plural;

interface IPlural {
	public function getPlural($n = 1);

	public function getPluralForm();

	public function getPluralsCount();
}
