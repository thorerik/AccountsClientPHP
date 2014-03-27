<?php
/**
 * @author Janek Ostendorf (ozzyfant) <ozzy@ozzyfant.de>
 * @copyright Copyright (c) 2014 ozzyfant
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License, version 3
 */

require_once 'vendor/autoload.php';

$profileRepo = new \AccountsClientPHP\HTTPProfileRepository();

$criteria = new \AccountsClientPHP\ProfileCriteria('ozzy2345', 'minecraft');

$profiles = $profileRepo->findProfilesByCriteria($criteria);

var_dump($profiles[0]->getName()); // ozzy2345
var_dump($profiles[0]->getID());   // c709e602680b40459dbe00e47f3f4b4b