<?php

$con=mysqli_connect("localhost","root","","hackathon");

if($con){
    // echo "connected";
}else{
    mysqli_connect_error($con);
}
?>