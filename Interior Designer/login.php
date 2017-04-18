<?php
//if(isset($_POST["Login"])){
    if(!empty($_POST['user']) && !empty($_POST['pass'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        //Database Connect
        $conn =new mysqli('localhost','root','') or die(mysqli_error());
        //Selecting Database
        $db=mysqli_select_db($conn,'interior_designer') or die("database error"); 
        $query=mysqli_query($conn,"select * from user_pass where User_Id='".$user."' and Password='".$pass."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0){
            while($row=mysqli_fetch_assoc($query)){
                $dbusername=$row['User_Id'];
                $dbpassword=$row['Password'];
            }
            if($user==$dbusername && $pass==$dbpassword){
                session_start();
                $_SESSION['sess_user']=$user;
                //echo $_SESSION['sess_user'];
                //Redirect The Browser
                header("Location:index.php");
                //echo $_SESSION['sess_user'];

            }
        }
        else{
            session_start();
            $_SESSION['false']="incorrect";
            header("Location:index.php");
            ?>
<!--                <script>alert('Username or Password is incorrect');</script>                -->
            <?php
            //header("Location:index.php");
        }
    }
    else{
?>
<!--<script>alert("Please Fill All Fields");</script>-->
<?php
        header("Location:index.php");
    }
//}
?>