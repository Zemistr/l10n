<?php
class AutoloaderTest extends PHPUnit_Framework_TestCase {
	public function filesProvider() {
		$data = array();
		$files = @glob(__DIR__ . '/../src/l10n/{Language,Plural}/*.php', GLOB_BRACE) ?: array();

		foreach ($files as $file) {
			$type = strpos($file, 'Language') !== false ? 'Language' : 'Plural';
			$name = basename($file, '.php');

			$data[] = array(
				"l10n\\$type\\I$type", //interface
				"l10n\\$type\\$name", //name
				"I$type" == $name // is interface
			);
		}

		return $data;
	}

	/**
	 * @dataProvider filesProvider
	 * @param $interface
	 * @param $class
	 * @param $is_interface
	 */
	public function testLoad($interface, $class, $is_interface) {
		if ($is_interface) {
			$this->assertSame(true, interface_exists($class), "Interface '$class' not found");
		}
		else {
			$this->assertSame(true, class_exists($class), "Class '$class' not found");
			$this->assertInstanceOf($interface, new $class);
		}
	}
}
