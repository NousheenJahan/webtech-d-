<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $name = $_POST['email'];
    $name = $_POST['password'];
    $name = $_POST['confirmpassword'];
    if (empty($name)) {
        echo "Name is Empty";
    }
    else {
        echo $name;
        }
        if (empty($name))
         {
            echo "Email is Empty";
            }
            else {
                echo $email;
                }
                }
                ?>
                <!DOCTYPE html> 
                <html>
                    <head>
                        <title>Person Profile</title>
                    </head>
                        <body>
                        <form method="POST" action=" <?php echo $_SERVER['PHP_SELF'];
                        ?>">
                       <fieldset>
                             <legend>REGISTRATION</legend>
                             <label for ="name"> Name: </label> 
                             <input type="text" name="name" value=""><br>
                             <hr>
                             <label for ="email"> Email: </label>
                             <input type="email" name="email" value=""><br>
                             <hr>
                             <label for ="user name"> User Name: </label>
                             <input type="text" name="username" value=""><br>
                             <hr>
                             <label for ="password"> Password: </label>
                             <input type="password" name="password" value=""><br>
                             <hr>
                             <label for ="confirmpassword"> Confirm Password: </label>
                             <input type="password" name="confirmpassword" value=""><br>
                             <hr>
                        

                             <fieldset>
                             <legend>Gender :</legend>
                             <input type="radio" name="gender" value=""/>Male
                             <input type="radio" name="gender" value=""/>Female
                             <input type="radio" name="gender" value=""/>Other
                             </fieldset>

                             <fieldset>
                                <legend>Date of Birth:</legend>
                                <input type="number" name="" value="">/<input type="number" name="" value="">/ <input type="number" name="" value="">(dd/m/yyy)<br>
                                <hr>
                                <input type="submit" name="submit" value="Submit"> 
                                <input type="reset" name="reset" value="Reset">
                             </fieldset>

                       </fieldset>
                       </body>
                </html>