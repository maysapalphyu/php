<!DOCTYPE html>
<html>
<body>


<?php
//generating random words 
function generate_words(){
    $random_words = substr(str_shuffle(implode("", range("a", "z"))), 0, rand(2, 6));
       return $random_words;
   };   
 echo generate_words()."<br>";
//generating random name 
function generate_name(){
    $random_name = "";
       for($i = 0; $i < rand(3, 6); $i++){
           $random_name .= generate_words()." "; 
       };
       return $random_name;
   };
   echo generate_name()."<br>";
   return $random_name;

echo generate_name()."<br>";

// generating random email
function generate_email(){
 $email_types = ["@gmail.com", "@hotmail.com", "@outlook.com"];
 for($i = 0; $i < count($email_types); $i++){
      $email_adress = str_replace(" ", "", generate_name()) . $email_types[rand(0, count($email_types)-1)];        
 };
  return $email_adress;
};
echo generate_email()."<br>";
// generating random passwords 
function generate_password(){
 $random_password = substr(str_shuffle(implode("", range(0, 9))), 0, rand(6, 16));
 return $random_password;
};  
echo generate_password()."<br>";
// generating random status
function generate_status(){
 $status = rand(0, 1);
 return $status;
};
echo generate_status()."<br>";

// creating users multidiminal array
$users = [];
// adding to users array
for($i = 0; $i <= 10; $i++){
 array_push($users, 
     [
     "userWord" => generate_words(),
        "userName" => generate_name(),
        "userEmail" => generate_email(),
        "userPassword" => generate_password(),
        "userStatus" => generate_status()
    ]
    );
};
// showing user data
foreach($users as $user){
 echo "<ul style='list-style-type: none;'>";
 echo "<li> User Word =  $user[userWord] </li>";
    echo "<li> User Name =  $user[userName] </li>";
    echo "<li> User Email = $user[userEmail] </li>";
    echo "<li> User Password = $user[userPassword] </li>";
    echo "<li> User Status = $user[userStatus] </li>";
    echo "</ul>";
};
?> 
</body>
</html>