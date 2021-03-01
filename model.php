<?php

class Model
{
    public $con;
    public function Model()
    {
        $this->con = new mysqli("localhost", "root", "root", "stackoverflow");
        if ($this->con->connect_error) {
            //echo "not connected";
        } else {
            //echo "connected";
        }
    }

    public function insert_data()
    {
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $qry = "insert into User (username,email,password) values('$name','$email','$password')";
            $result = mysqli_query($this->con, $qry);
            if ($result) {
                echo "Insert Data Successfully.";
            } else {
                echo "Error...! Not Inserted.";
            }
        } else {
            return "";
        }
    }

    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo $_POST['email'];
            echo $_POST['password'];

            $qry = "select * from User where email='$email' && password='$password'";
            $result = mysqli_query($this->con, $qry);

            if (mysqli_num_rows($result) > 0) {
                //echo "<script>alert('logged')</script>";
                header('location:view/index.php');
            } else {

                header('location:view/sign-in.php');
            }
        }
    }
}
