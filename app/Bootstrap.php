<?php declare(strict_types = 1);

namespace App;

use Nette\Bootstrap\Configurator;

final class Bootstrap
{

	public static function boot(): Configurator
	{
		$configurator = new Configurator();
		$rootDir = dirname(__DIR__);

		$configurator->enableTracy($rootDir . '/log');
		$configurator->setTempDirectory($rootDir . '/temp');

		$configurator->addConfig($rootDir . '/config/config.neon');

		if (file_exists($rootDir . '/config/config.local.neon')) {
			$configurator->addConfig($rootDir . '/config/config.local.neon');
		}

		return $configurator;
	}

}
