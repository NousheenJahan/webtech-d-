<?php
$ename="";
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(empty($_GET['name'])) 
{
    $ename="";
    echo $ename;

}
else
$ename= $_GET['name'];
}

$eemail="";
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(empty($_GET['email']))
{
    $eemail="";
    echo $eemail;
}
else
 $eemail= $_GET['email'];
}
?>




<!DOCTYPE html>
<html>
    <head>
         <title>Registration</title>
        </head>
        <body> 
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="get">

                 <fieldset>
                    <legend>REGISTRATION</legend>

                     Name: <input type="text" name="name" placeholder = "Enter your name"> <br> <hr> 
                     Eamil: <input type="text" name="email" placeholder = "Enter your Gmail"><br><hr>
                     Password: <input type="text" name="pass" placeholder = "Enter your Password"> <br> <hr> 
                     <label for="img">Your image:</label>
                     <input type="file" id="img" name="img" accept="image/*"> <br> <hr>
                     <button>Submit</button>

                </fieldset>
                </form>
            </body>
            </html>