<?php

require_once 'user.php';

$user1 = new User("Giovanni", "Porcelli", "Jopomin");
$user1->email = 'jopomin1234@gmail.com';
$user1->password = '1a2b3c4d';
$user1->date_of_birth = '23-11-1987';
$user1->created = '11-05-2021 15:05:34';
$user1->updated = '11-05-2021 17:01:01';
$user1->avatar = '/jopomin.jpg';
$user1->bio = 'Studente Boolean - Classe 26';
$user1->setRole(312);
$user1->getRole();
$user1->last_post = '15-04-2021 16:54:03';

$user2 = new User("Michele", "Salvemini", "Caparezza");
$user2->email = 'info@caparezza.com';
$user2->password = 'a1b2c3d4';
$user2->date_of_birth = '09-10-1973';
$user2->created = '13-06-2015 10:23:34';
$user2->updated = '01-05-2021 08:34:05';
$user2->avatar = '/caparezza.jpg';
$user2->bio = 'Cantante';
$user2->setRole(242);
$user2->getRole();
$user2->last_post = '01-05-2021 11:11:43';

$user3 = new User("James Patrick", "Page", "Jimmy Page");
$user3->email = 'jimmypage@gmail.com';
$user3->password = '12343210';
$user3->date_of_birth = '09-01-1944';
$user3->created = '22-11-2020 07:45:04';
$user3->updated = '31-01-2021 19:12:12';
$user3->avatar = '/jimmypage.jpg';
$user3->role = 'editor';
$user3->bio = 'Chitarrista';
$user3->setRole(14);
$user3->getRole();
$user3->last_post = '21-03-2021 09:23:23';

?>

