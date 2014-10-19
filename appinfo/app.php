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

$nodeChat = new NodeChat();
$c = $nodeChat->getContainer();
$nodeChat->registerBackend($c['NodeChatBackend']);

\OCP\Util::addScript('nodechat', 'nodechatbackend');
\OCP\Util::addScript('nodechat', 'socket.io');