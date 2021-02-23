<?php

require_once './vendor/autoload.php';

use Ejemplos\User;
use Ejemplos\Admin;

$user = new User();
$user->type = new Admin();

echo $user->type->greet();

echo "\n#########################################\n";
echo "########      Abstracción        ########\n";
echo "#########################################\n\n";

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
echo "########          Alcance         #######\n";
echo "#########################################\n\n";

use Alcance\User as AlcanceUser;

$userAlcance = new AlcanceUser();
$userAlcance->username = "User: Alcance";
echo "$userAlcance->username\n";

echo $userAlcance->getUsername();
echo $userAlcance->getLastname();

echo "\n#########################################\n";
echo "########       Polimorfismo       #######\n";
echo "#########################################\n\n";

use Polimorfismo\Guest;
use Polimorfismo\User as PoliUser;
use Polimorfismo\Admin as PoliAdmin;

$guest = new Guest();
echo $guest->login();

$poliUser = new PoliUser('UserPoli');
echo $poliUser->login();

$poliAdmin = new PoliAdmin('AdminPoli');
echo $poliAdmin->login();

echo "\n#########################################\n";
echo "########          Interface       #######\n";
echo "#########################################\n\n";

use Interfaz\User as userInterface;
use Interfaz\Post;

$userInter = new userInterface();
echo $userInter->all();
$post = new Post();
echo $post->all();

echo "\n#########################################\n";
echo "########          Herencia        #######\n";
echo "#########################################\n\n";

use Herencia\Admin as AdminHerencia;
use Herencia\User as UserHerencia;

$adminHerencia = new AdminHerencia('Admin Gonzalo');
echo $adminHerencia->getName();
$userHerencia = new UserHerencia('Admin Gonzalo');
echo $userHerencia->getName();

echo "\n#########################################\n";
echo "########         InterfaceTwo     #######\n";
echo "#########################################\n\n";

use InterfazTwo\Admin as AdminInterface;

$adminInterfaceTwo = new AdminInterface('AdminInterfaceTwo');
echo $adminInterfaceTwo->getName();
