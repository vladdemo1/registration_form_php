<?php

class HomeController{
/*
* Main controller for this project
*/

    public $model;

    public function indexAction(){
    /*
    * Get's actions from page
    *
    * @return view with users list
    *
    * @access public
    */

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

            return require_once('views/dashboard.php');

        }

        $this->routeManager();
    }

    public function routeManager(){
    /*
    * main router 
    *
    * @return view with context
    *
    * @access public
    */

        $users_count = $this->model->GetUsersCount();

        if(isset($_GET['register'])){

            return require_once('views/register.php');
        }

        if(isset($_GET['dashboard'])){

            $users = self::getUsersForThisPlace();

            return require_once('views/dashboard.php');
        }
        
        # default page
        return require_once('views/register.php');
    }
    public function getUsersForThisPlace(){
    /*
    * rendering part of table with users list
    *
    * @return part of table with users
    *
    * @access public
    */
        $result = $this->model->GetUsers();

        if ($result->rowCount() == 0) {
            return false;
        }

        $content = '<tr>';
        

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $content .= '<td><img src="images/default_user.png" alt="" /></td>';
                $content .= '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
                $content .= '<td>'.$row['report_subject'].'</td>';
                $content .= '<td>'.$row['email'].'</td>';
                $content .= '</tr>';

        }
        
        return $content;
    }
}
