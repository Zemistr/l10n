<?php
require(__DIR__ . '/../src/l10n.php');

spl_autoload_register(
	function ($class_name) {
		if ($class_name == 'PluralRule0Test') {
			require __DIR__ . '/PluralRule0Test.php';
		}
	}
);
