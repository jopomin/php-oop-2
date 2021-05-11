<?php

class User {
    public $first_name;
    public $last_name;
    public $email;
    public $username;
    public $password;
    public $date_of_birth;
    public $created;
    public $updated;
    public $avatar = '/blog_user.png';
    public $role ='';
    public $bio = '';
    public $last_post;

    public function __construct($_first_name, $_last_name, $_username)
    {
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->username = $_username;
    }

    public function setRole($number_of_posts)
    {
        if ($number_of_posts >= 300) {
            $this->role = "admin";
        }
        
        elseif ($number_of_posts >= 100 && $number_of_posts < 300) {
            $this->role = "editor";
        }
        
        else {
            $this->role = "basic user";
        }

    }

    public function getRole()
    {
        return $this->role;
    }

}
