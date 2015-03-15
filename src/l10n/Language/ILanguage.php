<?php
namespace l10n\Language;

interface ILanguage {
	public function getIso639_1();

	public function getIso639_2();

	public function getEnglishName();

	public function getOriginalName();

	public function isRtl();
}
