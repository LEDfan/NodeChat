<?php

namespace OCA\NodeChat;

use OCP\Chat\IBackend;

class NodeChatBackend implements IBackend {

	public function getId(){
		return 'nodechatbackend';
	}

	public function getInitConvs(){
		return array(
			"CONV_ID_14132352345699887_56" => array(
				"id" => "CONV_ID_14132352345699887_56",
				"users" => [
					"admin",
					1
				],
				"backend" => "och",
				"messages" => array(
					array(
						"id" => 14,
						"convid" => "CONV_ID_14132352345699887_56",
						"timestamp" => 1413699893,
						"user" => "admin",
						"msg" => "test"
					),
				),
				"files" => array()
			)
		);
	}

	public function getDisplayName(){
		return 'NodeJS chat';
	}

	public function getProtocols(){
		return 'nodejs';
	}

	public function hasProtocol($protocol){

	}

	public function isEnabled(){
		return true;
	}

	public function getConfig(){
		return array();
	}

	public function toArray(){
		$result = array();
		$result['id'] = $this->getId();
		$result['enabled'] = $this->isEnabled();
		$result['displayname'] = $this->getDisplayName();
		$result['protocols'] = $this->getProtocols();
		$result['config'] = $this->getConfig();
		return $result;
	}

}