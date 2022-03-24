<?php
$con = mysqli_connect('localhost','root','','facebook_clone');
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];
$check_data = mysqil_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail'");
$check = mysqil_num_rows($check_data)
if($check >0){
    header("Location:http://localhost/facbookclone")
} else {
    $input = mysqli_query($con,"INSERT INTO userdata(id,firstname,secondname,phoneoremail,password)VALUES('$id','$firstname','$secondname','$phoneoremail','$password')");
    if($input){
        header("Location:http://localhost/facebookclone/mainpage.html")
    }
}
?>