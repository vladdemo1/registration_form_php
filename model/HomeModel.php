<?php

class HomeModel{

    public $db;

    public function CheckUserLogin($username, $password){
        $query = "SELECT count(*) FROM tbl_user WHERE username='{$username}' AND password='{$password}'";

        $stmt = $this->db->prepare($query)->execute();

        return $stmt;
    }

    public function GetUsersCount(){
        $query = "SELECT count(*) FROM form";
        $stmt = $this->db->prepare($query)->execute();

        return $stmt;
    }

    public function GetUsers(){
        $query = "SELECT * FROM form";
        $stmt = $this->db->prepare($query)->execute();

        return $stmt;
    }

    public function UserRegister($firstName, $lastName, $birthdate, $reportSubject, $country,
                                 $phone, $email, $company, $position, $aboutMe, $photo){
        $query = "INSERT INTO form (
                                    first_name,
                                    last_name,
                                    birthdate,
                                    report_subject,
                                    country,
                                    phone,
                                    email,
                                    company,
                                    position,
                                    about_me,
                                    photo) 
                            VALUES (
                                    '$firstName',
                                    '$lastName',
                                    '$birthdate',
                                    '$reportSubject',
                                    '$country',
                                    '$phone',
                                    '$email',
                                    '$company',
                                    '$position',
                                    '$aboutMe',
                                    '$photo')";

        $this->db->prepare($query)->execute();

        return 1;
    }
}