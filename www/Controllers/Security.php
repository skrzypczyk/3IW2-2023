<?php
namespace App\Controllers;

use App\Core\View;
use App\Models\User;

class Security{

    public function login(): void
    {
        //Insertion d'un utilisateur
        $myUser = new User();
        $myUser->setFirstname("toto");
        $myUser->setLastname("   SKrZypczYK    ");
        $myUser->setEmail("Y.skrzypczyk@gmail.com");
        $myUser->setPwd("Test1234");
        //$myUser->save();

        //Modification d'un utilisateur
        $myUser = User::populate(3);
        if(!empty($myUser)){
            $myUser->setFirstname("Test");
            $myUser->save();
        }


        new View("Security/login", "back");
    }
    public function logout(): void
    {
        echo "Logout";
    }
    public function register(): void
    {
        echo "Register";
    }


}