<?php
/**
 * MyCrawler extension hooks
 *
 * @file
 * @ingroup Extensions
 * @license GPL-2.0+
 */
class MyCrawlerHooks {
	/**
	 * Conditionally register the unit testing module for the ext.myCrawler module
	 * only if that module is loaded
	 *
	 * @param array $testModules The array of registered test modules
	 * @param ResourceLoader $resourceLoader The reference to the resource loader
	 * @return true
	 */
	public static function onResourceLoaderTestModules( array &$testModules, ResourceLoader &$resourceLoader ) {
		$testModules['qunit']['ext.myCrawler.tests'] = [
			'scripts' => [
				'tests/MyCrawler.test.js'
			],
			'dependencies' => [
				'ext.myCrawler'
			],
			'localBasePath' => __DIR__,
			'remoteExtPath' => 'MyCrawler',
		];
		return true;
	}
}
