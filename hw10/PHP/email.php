<?php
$email = 'example@mail.com';
$getUserName = explode('@', $email);
$username = $getUserName[0];

echo $username;
