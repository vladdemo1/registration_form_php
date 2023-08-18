<?php

class HomeModel{
/*
* Main model for this project
*/

    public $db;

    public function GetUsersCount(){
    /*
    * Get's users count from 'form' table
    *
    * @return users count
    *
    * @access public
    */

        $query = "SELECT * FROM form";
        $stmt = $this->db->query($query)->rowCount();

        return $stmt;
    }

    public function GetUsers(){
    /*
    * Get's users
    *
    * @return query with users (for next render in table with fetch method)
    *
    * @access public
    */
        $query = "SELECT * FROM form";

        $stmt = $this->db->query($query);
        return $stmt;
    }

    public function UserRegister($firstName, $lastName, $birthdate, $reportSubject, $country,
                                 $phone, $email, $company, $position, $aboutMe, $photo){
    /*
    * Register user
    *
    * @access public
    */
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