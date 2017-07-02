<?php 

namespace app\model;

use app\model\UserDTO;

Class UserDAO {

    public function __construct($user, $pass)
    {
        $userDTO = new UserDTO();

        $userDTO->setUser($user);
        $userDTO->setPass($pass);
    }

    

}