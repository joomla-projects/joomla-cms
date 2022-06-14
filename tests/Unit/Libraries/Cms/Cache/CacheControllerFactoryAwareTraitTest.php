<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Base
 *
 * @copyright   (C) 2022 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Tests\Unit\Libraries\Cms\User;

use Joomla\CMS\Cache\CacheControllerFactory;
use Joomla\CMS\Cache\CacheControllerFactoryAwareTrait;
use Joomla\CMS\User\CurrentUserTrait;
use Joomla\CMS\User\User;
use Joomla\Tests\Unit\UnitTestCase;

/**
 * Test class for \Joomla\CMS\MVC\Model\BaseDatabaseModel
 *
 * @package     Joomla.UnitTest
 * @subpackage  MVC
 *
 * @testdoc    The CacheControllerFactoryAwareTrait
 *
 * @since       __DEPLOY_VERSION__
 */
class CacheControllerFactoryAwareTraitTest extends UnitTestCase
{
	/**
	 * @testdox  can set a cache controller factory
	 *
	 * @return  void
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function testGetCacheControllerFactory()
	{
		$cacheControllerFactory = new CacheControllerFactory;

		$trait = new class
		{
			use CacheControllerFactoryAwareTrait;

			public function getFactory(): CacheControllerFactory
			{
				return $this->getCacheControllerFactory();
			}
		};

		$trait->setCacheControllerFactory($cacheControllerFactory);

		$this->assertEquals($cacheControllerFactory, $trait->getFactory());
	}
}
