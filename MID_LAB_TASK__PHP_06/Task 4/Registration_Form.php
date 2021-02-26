<?php
    $f=0;

    if(isset($_POST['submit'])){
     if(empty($_POST['name']))                        // Name null checking  . . . . . .
        {
            echo "<p> Please Enter Name	</p>";
         $f=1;

         }
   
        if(empty($_POST['cpassword']))                     // Password null checking  . . . . . .
        {
            echo "<p> Please Re-type Password	</p>";
            $f=1;

        }
        if(empty($_POST['email']))
        {
            echo "<p> Please Enter Email	</p>";
            $f=1;

        }
        if(empty($_POST['gender']))
        {
             echo "<p> Please Select Gender	</p>";
            $f=1;

        }

        if(empty($_POST['myday']))
        {
            echo "<p> Please Enter Date	</p>";
            $f=1;

        }
        if(empty($_POST['mymonth']))
        {
            echo "<p> Please Enter Month</p>";
            $f=1;

        }
        if(empty($_POST['myyear']))
        {
             echo "<p> Please Enter Year	</p>";
         $f=1;

        }

	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['uname'];
    $password = $_POST['upassword'];
    $cpassword = $_POST['cpassword'];
    $day = $_POST['myday'];
    $month = $_POST['mymonth'];
    $year = $_POST['myyear'];

    $split_email =str_split($email,1);          // spliting the variable of email into an array for further checking to validate . . .

	$split_user =str_split($username,1);        // spliting the variable of username into an array for further checking to validate . . .

	$split =str_split($password,1);             // spliting the variable of password into an array for further checking to validate . . .

        if (ctype_alnum($username) || in_array('_',$split_user) ||in_array('-',$split_user) || in_array('.',$split_user) )  // restrictions of user name . . .
        {
		    if(strlen($username)<2)
            {
			    echo "<p> User Name Error	</p>";
                 $f=1;
		    }
		
        }
        else 
        {
            echo "User Name Error	!!!";
            $f=1;

        }

        if ( in_array('@',$split_email) && in_array('.',$split_email)  )        // restrictions of email . . .
        {
		
        
        }
        if ( !in_array('@',$split_email) || !in_array('.',$split_email)  )    // error tracing of email 
        {
             echo "<p> Please Enter a valid email	</p>";
            $f=1;

        }
	
    
    
		
        if(in_array('#',$split) ||in_array('@',$split) || in_array('%',$split) ||in_array('$',$split) )   // password strength and size checking. . . .
	    {
		    if(strlen($password)<8)
            {
			    echo "<p> Password Error	</p>";
                 $f=1;
		    }
		
	    }
        else
        {
        echo "Password Error	";

        }

        if($password != $cpassword)                                                 // password and confirm password matching checking . . . .
        {
            echo "<p> Password and Confirm Password Doesn't Match	</p>";
            $f=1;

        }
    

        if($day!="")                                              // Checking existance of date and then checking the proper form  . . . .
        {
            if(strlen($day)<2 || $day>31)
            {
            echo "<p> Date Error    </p>";
            $f=1;
            }
   
        }

        if($month!="")
        {
            if(strlen($month)<2 || $month>12)
            {
                 echo "<p> Month Error    </p>";
                 $f=1;
            }
    
         }

        if($year!="")
        {
            if(strlen($year)<4 ||strlen($year)>4)
            {
            echo "<p> Year Error    </p>";
            $f=1;
            }
       
        }

   
        if ($f==0)                                                      // making sure that is everything okay or not ...
        {
        echo"<p> Sucessfully Registered ! ! ! </p>";
        }

}
?>



<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend><b> Registration  </b></legend>

                Name  : <input type ="text" name="name"> </input><br><hr>
                Email  : <input type ="email" name="email"> </input><br><hr>

                Username  : <input type ="text" name="uname"> </input><br><hr>
				Password  : <input type ="text"name="upassword"> </input><br><hr>
                Confirm Password  : <input type ="text"name="cpassword"> </input><br><hr>


        <fieldset>
			<legend>Gender</legend>
			<input type="radio"  name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Others"> Others <br> <br>
						
		</fieldset><hr>

        <fieldset>
			<legend>Date Of Birth</legend>
			DD  <input type="textarea" width="80px" name="myday" value=""> 
			MM  <input type="textarea" name="mymonth" value="">
			YY  <input type="textarea" name="myyear" value=""> <br> <br>
						
		</fieldset>
			<br> <br><hr>
						<input type="submit" name="submit" value="Submit">
                        <input type="Submit" name="reset" value="Reset" >
		</fieldset>
	</form>
</body>
</html>