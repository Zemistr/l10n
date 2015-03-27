<?php
namespace l10n\Translator;

interface IStorage {
	public function load(Translator $translator);

	public function save(Translator $translator);
}
