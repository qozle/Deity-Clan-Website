<!DOCTYPE html>
<html>
    
    <head>
        <title>Deity Clan | Team</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- J Q U E R Y  C D N -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <!-- B O O T S T R A P 4  J S -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
        <!-- B O O T S T R A P 4  C S S -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contact-form.css">
        <link rel="icon" href="img/deitylogo1.png">
        
    </head>
    
    
    
    
    <body>
    <?php 
            define('WP_USE_THEMES', false);
            require('blog/wp-blog-header.php');
        ?>
        
        
        <!--  H E A D E R -->
    
            <!-- N A V B A R -->
            <nav class="navbar navbar-expand-lg sticky-top pl-0">
                <a class="navbar-brand m-0" href="/Deity-Clan-Website/">
                    <img src="img/deitylogo1.png" width=75px>
                    <span class="navbar-text">
                        <p class="deity-font-1 align-text-middle">DEITY</p>
                        <p class="clan-font-1 align-text-middle">CLAN</p>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="modal" data-target=".menu-modal" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-caret-square-down my-nav-icon"></i> MENU
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto align-text-middle pb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/Deity-Clan-Website/">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Deity-Clan-Website/blog/">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team.html">TEAM INFO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MATCHES AND STATS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MEDIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Deity-Clan-Website/contact-form.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
           

        <!-- Modal -->
            <div class="modal fade menu-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin-top: 200px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #003391;">
                                <span class="fa fa-window-close" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <ul class="modal-list">
                                <li class="modal-list-item">
                                    <a class="modal-list-link" href="/Deity-Clan-Website/">HOME
                                    </a>
                                </li>
                                <li class="modal-list-item">
                                    <a class="modal-list-link" href="/Deity-Clan-Website/blog/" data-dismiss="modal">NEWS
                                    </a>
                                        
                                </li>
                                <li class="modal-list-item">
                                    <a class="modal-list-link" href="/Deity-Clan-Website/team.html" data-dismiss="modal">TEAM INFO
                                    </a>
                                        
                                </li>
                                <li class="modal-list-item">
                                    <a class="modal-list-link" href="#" data-dismiss="modal">MATCHES AND STATS</a>
                                        
                                </li>
                                <li class="modal-list-item">
                                    <a class="modal-list-link" href="#" data-dismiss="modal">MEDIA
                                    </a>
                                        
                                </li>
                                <li class="modal-list-item">
                                    <a class="modal-list-link" href="/Deity-Clan-Website/contact-form.php" data-dismiss="modal">CONTACT
                                    </a>
                                        
                                </li>
                      
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

           
        
            <!-- J U M B O T R O N  -->
                    <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;">
                <div class="container" style="text-align: center;">
                    <h1 class="deity-font-2 d-inline display-1">DEITY</h1>
                    <h1 class="clan-font-2 d-inline display-1">CLAN</h1>
                </div>
            </div>

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
    
    
    <!-- F O O T E R -->
        
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 footer-col-1">
                        <h6 class="footer-h">Recent News</h6>
                        <?php
                $number_of_posts = 5;
                $args = array( 'numberposts' => $number_of_posts );
                $posts = wp_get_recent_posts( $args );
                
                ?>
                        <div class="footer-blog-div">
                            <?php echo "<a href='blog/index.php/".$posts[0]['post_name']."' class='footer-blog-link'>";?>
                            <p class="footer-blog-title"><?php echo $posts[0]['post_title']?></p>
                            <?php echo "</a>";?>
                            <?php foreach(get_the_category($posts[0]['ID']) as $category) {
                                echo "<p class='footer-blog-category'>".$category->name."</p>";};?>
                            <p class='footer-blog-date'><?php echo get_the_time('F j, Y', $posts[0]['ID']);?></p>
                        </div>
                        <div class="footer-blog-div">
                            <?php echo "<a href='blog/index.php/".$posts[1]['post_name']."' class='footer-blog-link'>";?>
                            <p class="footer-blog-title"><?php echo $posts[1]['post_title']?></p>
                            <?php echo "</a>";?>
                            <?php foreach(get_the_category($posts[1]['ID']) as $category) {
                                echo "<p class='footer-blog-category'>".$category->name."</p>";};?>
                            <p class='footer-blog-date'><?php echo get_the_time('F j, Y', $posts[1]['ID']);?></p>
                        </div>
                        <div class="footer-blog-div">
                            <?php echo "<a href='blog/index.php/".$posts[2]['post_name']."' class='footer-blog-link'>";?>
                            <p class="footer-blog-title"><?php echo $posts[2]['post_title']?></p>
                            <?php echo "</a>";?>
                            <?php foreach(get_the_category($posts[2]['ID']) as $category) {
                                echo "<p class='footer-blog-category'>".$category->name."</p>";};?>
                            <p class='footer-blog-date'><?php echo get_the_time('F j, Y', $posts[0]['ID']);?></p>
                        </div>
                    </div>
                    
                <div class="col-sm-6 footer-col-3">
                    <h6 class="footer-h">Useful Links</h6>
                    <ul class="footer-ul">
                        <li class="footer-li-item">
                            <a class="footer-link" href="#">Back to Top</a>
                        </li>
                        <li class="footer-li-item">
                            <a class="footer-link" href="/Deity-Clan-Website/blog">News</a>
                        </li>
                        <li class="footer-li-item">
                            <a class="footer-link" href="/Deity-Clan-Website/team.html">Team Info</a>
                        </li>
                        <li class="footer-li-item">
                            <a class="footer-link" href="#">Matches/Stats</a>
                        </li>
                        <li class="footer-li-item">
                            <a class="footer-link" href="#">Media</a>
                        </li>
                        <li class="footer-li-item">
                            <a class="footer-link" href="/Deity-Clan-Website/contact-form.php">Contact</a>
                        </li>
                    </ul>
                </div>
                
                </div>
            </div>
            
                
                
            <!-- F O O T E R  S O C I A L  M E D I A -->
       
            <ul class="footer-social-list">
                <li class="social-list-item">
                    <a class="social-list-link" href="#facebook" target="_blank" style="padding-right: 10px; font-size: 100%;">
                        <p class="fab fa-facebook"></p>
                    </a>
                </li>
                <li class="social-list-item">
                    <a class="social-list-link" href="#twitter" target="_blank" style="padding-right: 10px; font-size: 100%;">
                        <p class="fab fa-twitter"></p>
                    </a>
                </li>
                <li class="social-list-item">
                    <a class="social-list-link" href="#instagram" target="_blank" style="padding-right: 10px; font-size: 100%;">
                        <p class="fab fa-instagram"></p>
                    </a>
                </li>
                <li class="social-list-item">
                    <a class="social-list-link" href="#youtube" target="_blank" style="padding-right: 10px; font-size: 100%;">
                        <p class="fab fa-youtube"></p>
                    </a>
                </li>
                <li class="social-list-item">
                    <a class="social-list-link" href="#twitch" target="_blank" style="padding-right: 10px; font-size: 100%;">
                        <p class="fab fa-twitch"></p>
                    </a>
                </li>
                <li class="social-list-item">
                    <a class="social-list-link" href="#steam" target="_blank" style="padding-right: 10px; font-size: 100%;">
                        <p class="fab fa-steam"></p>
                    </a>
                </li>
                
            </ul>
            <p id="copyright"><i class="fa fa-copyright" aria-hidden="true"></i>   2018  01014 Web Solutions</p>
            
                
            
        </footer>
        </body>

</html>