<?php

                if(isset($_POST['submit'])){
                    $atext = array ('jpg','jpeg','png');                 // Array for string matching   .....
                    $files=$_FILES['ufile']['name'];                     //getting the specific file to read extension   .....
                    $ext=pathinfo($files,PATHINFO_EXTENSION);           //reading the extension  .....
                    
                   
                    if( ($_FILES['ufile']['size'])> 4194304 || !in_array($ext,$atext) )     //checking size of file && also checking format matching through array  .....
                    {
                        echo "The file is too big or the format is not correct...";

                    }
                    else
                    {
                        echo"Accepted ! ! !";
                    }

                }
                
?>