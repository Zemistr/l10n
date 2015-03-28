<?php
namespace l10n\Translator;

interface IStorage {
	/**
	 * @param \l10n\Translator\Translator $translator
	 * @return void
	 */
	public function load(Translator $translator);

	/**
	 * @param \l10n\Translator\Translator $translator
	 * @return void
	 */
	public function save(Translator $translator);
}
