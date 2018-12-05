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
        <link rel="stylesheet" href="css/teams-page.css">
        <link rel="icon" href="img/deitylogo1.png">
        <script src="js/custom.js"></script>
        
        
        
    </head>

    <body>
       <?php include 'header-template.html'?>


        <!-- M A I N   C O N T E N T -->
        <?php
                $number_of_posts = 5;
                $args = array( 'numberposts' => $number_of_posts );
                $posts = wp_get_recent_posts( $args );
                
                ?>
        
        <h1 class='display-2' id="teams-heading">Explore the Teams</h1>
           <!-- T E A M S  G R I D  -->
        <div class="container teams-container">
            <div class="row teams-row">
                <div class="col-sm-6 teams-col">
                    <a class="teams-link" href="/Deity-Clan-Website/fortnite.php">Fortnite</a>
                </div>
                <div class="col-sm-6 teams-col">
                    <a class="teams-link" href="#">Call of Duty</a>
                </div>
                <div class="col-sm-4 teams-col">
                    <a class="teams-link" href="#">NBA2K</a>
                </div>
                <div class="col-sm-4 teams-col">
                    <a class="teams-link" href="#">Super Smash Bros</a>
                </div>
                <div class="col-sm-4 teams-col">
                    <a class="teams-link" href="#">Overwatch</a>
                </div>
            </div>
        </div>


        <!-- F O O T E R -->
        
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 footer-col-1">
                        <h6 class="footer-h">Recent News</h6>
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
                    
                <div class="col-sm-4 footer-col-3">
                    <h6 class="footer-h">Useful Links</h6>
                    <ul class="footer-ul">
                        <li class="footer-li-item">
                            <a class="footer-link" href="#">Back to Top</a>
                        </li>
                        <li class="footer-li-item">
                            <a class="footer-link" href="/Deity-Clan-Website/blog">News</a>
                        </li>
                        <li class="footer-li-item">
                            <a class="footer-link" href="/Deity-Clan-Website/teams-page.php">Teams</a>
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
                <div class="col-sm-4 footer-col-4">
                    <h6 class="footer-h">Contact</h6>
                    <form action="#" id="contact-form">
                        
                        <input type="text" class="contact-form-text" id="fname" name="firstname" placeholder="First Name">

                       
                        <input type="text" class="contact-form-text" id="lname" name="lastname" placeholder="Last Name">

                        
                        <input type="text" class="contact-form-text" id="email" name="email" placeholder="Email">

                        
                        <textarea id="subject" name="subject" placeholder="Tell us what you need!" class="contact-form-textarea"></textarea>

                        <input class="contact-form-submit" type="submit" value="Submit">
                    </form>
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
