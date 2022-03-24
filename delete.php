<?php
$con = mysqli_connect('locaalhost','root','facebook_clone');
$phoneoremail = $_POST['phoneoremail'];
$check = mysqli_query($con,"DELETE FROM userdata WHERE phoneoremail = 'phoneoremail");

if($check>0){
    header("http://localhost/facebookclone/mainpage.html")
}