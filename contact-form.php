<!DOCTYPE html>
<html>
    <head>
        <title>Deity Clan | Home</title>
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
        <link rel="icon" href="img/deitylogo1.png">
        <script src="js/custom.js"></script>
        
        
    </head>

    <body>
        <?php include 'header-template.html'?>
        
        <!-- s e c o n d a r y  h e a d e r 
        <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;">
            <div class="container" style="text-align: center;">
                <h1 class="deity-font-2 d-inline display-1">DEITY</h1>
                <h1 class="clan-font-2 d-inline display-1">CLAN</h1>
            </div>
        </div> -->

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
</style>


<div class="container">        
    <h1 class="display-3" style="text-align: center;color:#d1d1d1;font-family: 'Abolition Regular';width: 90%;">Let Us Know</h1>
<form action="#">
    
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
</form>
        </div>
    
    
   <?php include 'footer-template.html'?>
    </body>
</html>  