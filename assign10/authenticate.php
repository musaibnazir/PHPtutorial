<?php

  class Login
  {

    public $msg;
    public function getAuthenticate($e,$p){
        $db = new Database();
        $db -> query = "select * from tbl_users where email = '$e' and pswd = '$p'";
        $db -> ExecuteQuery();
        $r = $db -> result;
        $row = mysqli_num_rows($r);


        if ($row>0) {
          $this -> msg = "<div class='alert alert-success'>Logged in Successfully!</div>";

        }
        else {
          $this -> msg = "<div class='alert alert-danger'>Incorrect Crediantials!</div>";
        }

    }
  }


  class Register
  {
    public $msg;
    public function getRegister($u,$e,$p,$a){
      $db = new Database();
      $db -> query = "insert into tbl_users (user,email,pswd,address) values ('$u','$e','$p','$a')";
      $db -> ExecuteQuery();
      $r = $db -> result;
      $this -> msg = "<div class='alert alert-success'>Registered Successfully...Click <a href='login.php'>here </a> to login.</div>";
    }

  }



  class Database{
    public $query, $result;
    public function ExecuteQuery(){
      $con = mysqli_connect("localhost","root","","object_db");
      $this -> result = mysqli_query($con , $this -> query);
    }

  }


 ?>
