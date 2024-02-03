<?php
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if( empty($_POST['email']) ||
    empty($_POST['username']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
       
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $username.rand(100,999);

        $users  = new User($id,$email,$username,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($users);


    }
}



?>