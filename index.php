<?php

require_once './vendor/autoload.php';

use App\User;
use App\Admin;

$user = new User();
$user->type = new Admin();

echo $user->type->greet();

echo "\n#########################################\n";
echo "########      Abstracción        ########\n\n";

use Abs\abstraccion\Cached;
use Abs\model\Auth;

$base = new Cached();
echo $base->store();
echo $base->get();
echo $base->delete();

echo "\n";
use Abs\interfaz\Database;
use Abs\interfaz\StoreInterface;

$db = new Database();
echo $db->get();

echo "\n#########################################\n";
echo "########          Alcance         #######\n\n";

use Alcance\User as AlcanceUser;

$userAlcance = new AlcanceUser();
$userAlcance->username = "User: Alcance";
echo "$userAlcance->username\n";

echo $userAlcance->getUsername();
echo $userAlcance->getLastname();
