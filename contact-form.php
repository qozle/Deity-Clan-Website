<!DOCTYPE html>
<html>
    <head>
        <title>Deity Clan | Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- J Q U E R Y  C D N -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <!-- B O O T S T R A P 4  J S -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
        <!-- B O O T S T R A P 4  C S S -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- F O N T  A W E S O M E -->
        <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

        <!-- O U R  C S S -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contact-form.css">
        <script src="js/custom.js"></script>
        
        
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="/img/favicons/site.webmanifest">
        <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        
        
        
    </head>

    <body>
        <?php include 'header-template.html'?>
        <?php include 'secondary-header-template.html'?>
        
        <!-- s e c o n d a r y  h e a d e r 
        <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;">
            <div class="container" style="text-align: center;">
                <h1 class="deity-font-2 d-inline display-1">DEITY</h1>
                <h1 class="clan-font-2 d-inline display-1">CLAN</h1>
            </div>
        </div> -->


      <?php 
                    // define some variables
                    $firstNameErr = $lastNameErr = $emailErr = "";
                    $firstname = $lastname = $email = $subject = "";
                    $firstname_ok = $lastname_ok = $email_ok = $subject_ok = false;
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["firstname"])) {
                        $firstNameErr = "First name is required";
                      } else {
                        $name = test_input($_POST["firstname"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                          $nameErr = "Only letters and white space allowed"; 
                        } else {
                            $firstname_ok = true;
                        }
                      }
                        
                     
                      if (empty($_POST["lastname"])) {
                          $lastNameErr = "Last name is required";
                      } else {
                          $name = test_input($_POST["lastname"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
                          $nameErr = "Only letters and white space allowed"; 
                        } else {
                            $lastname_ok = true;
                        }
                      }

                      if (empty($_POST["email"])) {
                          $emailErr = "Email is required";
                      } else {
                          $email = test_input($_POST["email"]);
                        // check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                          $emailErr = "Invalid email format"; 
                        } else {
                            $email_ok = true;
                        }
                      }

                      if (empty($_POST["subject"])) {
                        $comment = "";
                      } else {
                        $subject = test_input($_POST["subject"]);
                          $subject_ok = true;
                      }
                    }
                    
                    function test_input($data) {
                      $data = trim($data);
                      $data = stripslashes($data);
                      $data = htmlspecialchars($data);
                      return $data;
                    }
                    ?>

                    

        
        
        
<style>
/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
    width: 90%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical; /* Allow the user to vertically resize the textarea (not horizontally) */
    
    
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #003391;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 11px;
    margin-right: auto;
    display: block;
    width: 90%;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #001946;
    
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 16px;
}

    #fname, #lname, #subject {
        outline: none ;
    }
    
    #subject {
        margin-left: 11px;
    }
</style>



    

        
        
        <div class="container">        
            <h1 class="display-3" style="text-align: center;color:#d1d1d1;font-family: 'Abolition Regular';width: 90%;">Let Us Know</h1>
             <p class='err-msg'>
                '*' marks required fields.
            </p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="display:block; margin-left: auto; margin-right: auto;" method='post'>

                <span class="err-msg">* <?php echo $firstNameErr;?></span>
                    <input type="text" id='fname' name="firstname" placeholder="First Name" value="<?php echo $firstname;?>">
                <br>
                <span class="err-msg">* <?php echo $lastNameErr;?></span>
                    <input type="text" id='lname' name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>">
                <br>
                <span class="err-msg">* <?php echo $emailErr;?></span>
                    <input type="text" id=email name="email" placeholder="Email" value="<?php echo $email;?>">
                <br>

               

                <textarea id="subject" name="subject" placeholder="Write something here..." value="<?php echo $subject;?>"></textarea>

            <input type="submit" id='submit' value="Submit">
            </form>
             <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST" && $firstname_ok == true && $lastname_ok == true && $email_ok == true && $subject_ok == true) {
                include 'php-contact-form-ex.php';
            }?>
        </div>
        
        
        
        
        
        
        
        

    
   <?php include 'footer-contact.html'?>
    </body>
</html>  