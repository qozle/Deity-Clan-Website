<!DOCTYPE html>
<html>
    <head>
        <title>Deity Clan | Liro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- J Q U E R Y  C D N -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <!-- B O O T S T R A P 4  J S -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
        <!-- B O O T S T R A P 4  C S S -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/profile-template.css">
        <link rel="icon" href="../img/deitylogo1.png">
        <script src="../js/custom.js"></script>
        
        
    </head>

    <body>
        <?php 
            define('WP_USE_THEMES', false);
            require('../blog/wp-blog-header.php');
        ?>
        
        <?php include '../header-template.html'?>
        <?php include '../secondary-header-template.html'?>



        <!-- M A I N   C O N T E N T -->

        <div class="container-fluid" style="margin-top: 20px; text-align: center;">
            <div class="row">
                <div class="col">
                    <img class="calling-card" src="../img/team-members/Member_Calling_Card_Liro3.png" alt="Liro">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h3 class="info">LIRO</h3>
                    <p class="heading">GAMER HANDLE</p>
                </div>
            </div>
            <hr>
             <div class="row">
                <div class="col">
                    <h3 class="info">ELVIS HERNANDEZ</h3>
                    <p class="heading">PLAYER NAME</p>
                </div>
            </div>
            <hr>
             <div class="row">
                <div class="col">
                    <h3 class="info">FORTNITE</h3>
                    <p class="heading">GAME</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h3 class="info">USA</h3>
                    <p class="heading">COUNTRY</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <ul>
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
                            <a class="social-list-link" href="#twitch" target="_blank" style="padding-right: 10px; font-size: 100%;">
                                <p class="fab fa-twitch"></p>
                            </a>
                        </li>
                    </ul>
                    <p class="heading">CONNECT WITH GHOST</p>
                </div>
            </div>

        </div>

       <!--  <?php
                 $number_of_posts = 5;
                 $args = array( 'numberposts' => $number_of_posts );
                 $posts = wp_get_recent_posts( $args );
                
                ?> -->


        <!-- F O O T E R -->
        
        <?php include '../footer-template.html'?>
    
    </body>
</html>    



