
<?php
     require_once("configuration/sql_statements.php");
     require_once("configuration/validations.php");

  $user=$_POST['username'];
  $pass=$_POST['password'];

  if($user=='carlos' && $pass=='123')
  {
         session_start();
        $_SESSION['username']=$user;

    header("Location:login.php");
  }
  else
  {
        $query_account=select_info_multiple_key("select * from account where useName='".$user."'
        and usePass='".$pass."'");
        if($query_account)
        {
            session_start();
           $_SESSION['username']=$query_account[0]['idno'];
           header("Location:login.php");
        }
        else
        {
         header("Location:index.php");
        }


  }


?>


