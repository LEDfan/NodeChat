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
use OCP\Chat\IBackend;
use OCA\NodeChat\NodeChatBackend;


class NodeChat extends App {

	/**
	 * @var \OCP\AppFramework\IAppContainer
	 */
	private $c;

	public function __construct (array $urlParams=array()) {
		parent::__construct('nodechat', $urlParams);

		$container = $this->getContainer();
		$this->c = $container;

		$container->registerService('NodeChatBackend', function($c){
			return new NodeChatBackend();
		});

		$container->registerService('BackendManager', function($c){
			return $c->getServer()->getChatBackendManager();
		});

	}

	public function registerBackend(IBackend $backend){
		$backendManager = $this->c['BackendManager'];
		$backendManager::registerBackend($backend);
	}

}