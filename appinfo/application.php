<?php
/**
 * ownCloud - nodechat
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Tobia De Koninck <hey@ledfan.be>
 * @copyright Tobia De Koninck 2014
 */

namespace OCA\NodeChat\AppInfo;


use \OCP\AppFramework\App;
use \OCP\IContainer;

use \OCA\NodeChat\Controller\PageController;


class Application extends App {


	public function __construct (array $urlParams=array()) {
		parent::__construct('nodechat', $urlParams);

		$container = $this->getContainer();

		/**
		 * Controllers
		 */
		$container->registerService('PageController', function(IContainer $c) {
			return new PageController(
				$c->query('AppName'), 
				$c->query('Request'),
				$c->query('UserId')
			);
		});


		/**
		 * Core
		 */
		$container->registerService('UserId', function(IContainer $c) {
			return \OCP\User::getUser();
		});		
		
	}


}