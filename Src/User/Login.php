<?php
if (isset($_POST['btnLogin'])) {
    $username = trim($_POST["txtSignIn"]);
    $password = trim($_POST["txtPassword"]);
    
    $err = "";
    if ($username ==""){
        $err .= "Please type your username!<br/>";
    }
    if ($password==""){
        $err .= "Please type your password!<br/>";
    }

    if ($err != ""){
        echo "<span class=\"cssLoi\">".$err."</span>";
    }
    else{
        //$username = mysql_real_escape_string($conn, $username);
        $password = md5($password);
        $result = mysql_query("SELECT * FROM User WHERE Username='$username' AND Password='$password'") or die(mysql_error());
        if (mysql_num_rows($result) == 1)
        {
            //$Role = mysql_fetch_object($result)->Role;
            $_SESSION["username"] = $username;
            //if ($Role) 
               // $_SESSION['admin'] = $username;
            echo "<script language='javascript'>window.location='Index.php'</script>";
        }
        else{
            echo 'Username or Password is not correct';
        }
    }
}
?>
