<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>OOP2 - 11 Maggio</title>
</head>
<body>

<?php require_once 'new_users.php';?>
    <div class="main_container">
        <div id="users">
            <div class="user_card">
                <div class="user_pic">
                    <img src="img<?php echo $user1->avatar;?>">
                </div>
                <h2 class="user_full_name"><?php echo $user1->first_name ." ". $user1->last_name;?></h2>
                <p class="username"><?php echo $user1->username;?></p>
            </div>
            <div class="user_card">
                <div class="user_pic">
                    <img src="img<?php echo $user2->avatar;?>">
                </div>
                <h2 class="user_full_name"><?php echo $user2->first_name ." ". $user2->last_name;?></h2>
                <p class="username"><?php echo $user2->username;?></p>
            </div>
            <div class="user_card">
                <div class="user_pic">
                    <img src="img<?php echo $user3->avatar;?>">
                </div>
                <h2 class="user_full_name"><?php echo $user3->first_name ." ". $user3->last_name;?></h2>
                <p class="username"><?php echo $user3->username;?></p>
            </div>       
        </div>
    </div>

</body>
</html>