<?php
if(!empty($_POST['Id']) && !empty($_POST['Name']) && !empty($_POST['Pass']) && !empty($_POST['Email']) && !empty($_POST['Age'])){
    $id=$_POST['Id'];
    $name=$_POST['Name'];
    $pass=$_POST['Pass'];
    $email=$_POST['Email'];
    $age=$_POST['Age'];
    $conn= new mysqli('localhost','root','') or die (mysqli_error());
    $db=mysqli_select_db($conn,'interior_designer') or die("DB Error");
    //Selecting Database
    //echo "asdsa";
    $query1="select * from user_pass where User_Id = '$id'";
    //echo "asdsa";
    $query=mysqli_query($conn,$query1);
    $numrows=mysqli_num_rows($query);
    if($numrows==0){
        //Insert to Mysqli Query
        $sql="insert into user_pass values('$id','$name','$pass','$email','$age')";
        $result=mysqli_query($conn,$sql);
        //Result Message
        if($result){
            //echo "Your Accout Created Successfully";
            session_start();
            $_SESSION['created']="created";
            header("Location:index.php");
        }
        else{
            //echo "Failure";
            session_start();
            $_SESSION['failure']="failure";
            header("Location:index.php");
        }
    }
    else{
        session_start();
        $_SESSION['tryagain']="tryagain";
        header("Location:index.php");
        //echo "That User Id Already Exist! Please try Again.";
    }
}
?>