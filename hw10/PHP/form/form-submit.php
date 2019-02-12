<?php
// block 1
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$age = $_POST['age'];

// block 2
$photo = $_POST['photo'];
$password = $_POST['password'];

// block 3 !!!
$birthday = $_POST['birthday'];

// block4 !!!
$email = $_POST['email'];
$tel = $_POST['tel'];
$password = $_POST['password'];
$url = $_POST['url'];

// block 5
$block5r1 = $_POST['5form1'];
$block5r2 = $_POST['5form2'];
$block5r3 = $_POST['5form3'];
$block5r4 = $_POST['5form4'];
$block5r5 = $_POST['5form5'];

// block 6 !!!
$box1 = $_POST['box1'];
$box2 = $_POST['box2'];
$box3 = $_POST['box3'];
$box4 = $_POST['box4'];
$box5 = $_POST['box5'];

// block 7
$variants = $_POST['variants'];

// output
echo $firstName . '<br>';
echo $lastName . '<br>';
echo $gender . '<br>';
echo $age . '<br>';
echo $photo . '<br>';
echo $password . '<br>';
echo $birthday . '<br>';
echo $email . '<br>';
echo $tel . '<br>';
echo $password . '<br>';
echo $url . '<br>';
echo $box1 . '<br>';
echo $box2 . '<br>';
echo $box3 . '<br>';
echo $box4 . '<br>';
echo $box5 . '<br>';

if (!empty($block5r1)) {
  echo $block5r1 . '<br>';
} elseif (!empty($block5r2)) {
  echo $block5r2 . '<br>';
} elseif (!empty($block5r3)) {
  echo $block5r3 . '<br>';
} elseif (!empty($block5r4)) {
  echo $block5r4 . '<br>';
} elseif (!empty($block5r5)) {
  echo $block5r5 . '<br>';
}

foreach ($variants as $variant) {
  echo $variant . '<br>';
}
