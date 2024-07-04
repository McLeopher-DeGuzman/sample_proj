<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
         $user1= $_POST['user1'];
          $pass1 = $_POST['pass1']; 



        $insert = mysqli_query($conn, "INSERT into userlogin VALUES ('$user1','$pass1')");
        if ($insert===true){
            header("Location: welcom.php");
        }
        

        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: home.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>