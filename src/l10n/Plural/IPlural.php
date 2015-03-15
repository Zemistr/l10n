<?php
namespace l10n\Plural;

interface IPlural {
	/**
	 * @param int $n
	 * @return int
	 */
	public function getPlural($n = 1);

	/**
	 * @return string
	 */
	public function getPluralForm();

	/**
	 * @return int
	 */
	public function getPluralsCount();
}
