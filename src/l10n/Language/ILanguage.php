<?php
namespace l10n\Language;

interface ILanguage {
	/**
	 * @return string
	 */
	public function getIso639_1();

	/**
	 * @return string
	 */
	public function getIso639_2();

	/**
	 * @return string
	 */
	public function getEnglishName();

	/**
	 * @return string
	 */
	public function getOriginalName();

	/**
	 * @return bool
	 */
	public function isRtl();
}
