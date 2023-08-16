<?php

class HomeController{

    public $model;

    public function indexAction(){

        $_SESSION['usersCount'] = $this->model->GetUsersCount();

        if(isset($_GET['logout'])){
            unset($_SESSION['userLogInStatus']);
        }

        if(isset($_POST['LoginSubmit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $checkUserLogin = $this->model->CheckUserLogin($username, md5($password));

            if($checkUserLogin==1){
                $_SESSION['userLogInStatus']=1;
            }
        }

        if(isset($_POST['RegisterSubmit'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];

            $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));

            $reportSubject = $_POST['reportSubject'];
            $country = $_POST['country'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $position = $_POST['position'];
            $aboutMe = $_POST['aboutMe'];
            $photo = $_POST['photo'];

            $this->model->UserRegister($firstName, $lastName, $birthdate,
                                       $reportSubject, $country, $phone, $email,
                                       $company, $position, $aboutMe, $photo);
            $_SESSION['userLogInStatus']=1;

        }

        $this->routeManager();
    }

    public function routeManager(){

        if(isset($_SESSION['userLogInStatus'])){
            return require_once('views/dashboard.php');
        }

        if(isset($_GET['register'])){
            return require_once('views/register.php');
        }

        if(isset($_GET['dashboard'])){
            return require_once('views/dashboard.php');
        }

        if(isset($_GET['login']) || isset($_GET['logout'])){
            return require_once('views/login.php');
        }
        
        # default page
        return require_once('views/register.php');
    }
}
