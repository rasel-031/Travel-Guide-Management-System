
<?php 

if (isset($_POST['sign-up-btn'])) 
{
	
   $conn = mysqli_connect("localhost","root","","tms");

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['psw'];
   $re_pass = $_POST['psw-repeat'];

   if (!empty($name) && !empty($email) && !empty($pass) && !empty($re_pass))
   {

    $len = strlen($email);

    $check = true;

    for ($i=0; $i < $len; $i++)
    { 
        if ($email[$i]=='@')
        {
            $gmail_id = substr($email, $i, $len-1);
            $check = true;
            break;
        }
        else
        {
            $check = false;
        }
    }

    if ($check == true)
    {
        if ($gmail_id == "@gmail.com")
        {
            if ($pass == $re_pass)
            {
               $query = "INSERT INTO register(Name, Email, Password) VALUES('$name', '$email', '$pass') ";

               $result = mysqli_query($conn, $query);

               if ($result)
               {
                echo "<script>alert('Your are registered.')</script>";
                header("Location: home.php");
                exit();
            }
            else
            {
                echo "<script>alert('A problem is generated.')</script>";
                header("Location: registration.php");
                exit();
            }
        }
        else
        {
           echo "<script>alert('your password is not matched.')</script>";
           header("Location: registration.php");
           exit();
       }
   }
   else
   {
    echo "<script>alert('Invalid gmail.')</script>";
    
    header("Refresh: 1; url=registration.php");
}
}
else
{
    echo "<script>alert('Invalid gmail.')</script>";

    header("Refresh: 1; url=registration.php");
}
}
else
{
  echo "<script>alert('Please, fill the requirement.')</script>";
  header("Location: registration.php");
  exit();
}

}
else
{
    echo "Sign-up problem";
}


?>