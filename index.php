<html>
    <head>
        <title>Deity Clan | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/deitylogo1.png">
        <script src="js/custom.js"></script>
        
        
    </head>

    <body>
        <div class="preloader">
            <div class="lds-css ng-scope">
                <div style="margin:auto;margin-top: 200px;" class="lds-double-ring">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <h1 class="preloader-text">L O A D I N G . . .</h1>
        </div>
        <div class="the-entire-page">
        
        <?php 
            define('WP_USE_THEMES', false);
            require('blog/wp-blog-header.php');
        ?>
    	


        <!-- N A V B A R -->
        <nav class="navbar navbar-expand-sm sticky-top pl-0">
            <a class="navbar-brand m-0">
                <img src="img/deitylogo1.png" width=75px>
                <span class="navbar-text">
                    <span class="deity-font-1">DEITY</span>
                    <span class="clan-font-1">CLAN</span>
                </span>
            </a>
                
            
    		<ul class="navbar-nav ml-auto">
    			<li class="nav-item">
    				<a class="nav-link" href="#">HOME</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="#">TEAM</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="#">CONTACT</a>
    			</li>
    		</ul>
    	</nav>



        <!--  H E A D E R -->

        <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;">
            <div class="container" style="text-align: center;">
                <h1 class="deity-font-2 d-inline display-1">DEITY</h1>
                <h1 class="clan-font-2 d-inline display-1">CLAN</h1>
            </div>
        </div>



        <!-- M A I N   C O N T E N T -->
        
        
        <!-- B L O G  P O S T S -->
        
         
        <div class="container" style="margin-top: 60px;border: 2px solid rgba(142,142,142,.25);border-radius:5px;background-color: #0e0b0b;">
            <div class="row">
                <div class="col-sm-12" style="padding-left:0;padding-right:0;">
                    <h4 class="text-center" style="color:white;padding-bottom:15px;padding-top:4px;margin-bottom:0;background-color: rgba(209,209,209,.08);">Latest News</h4>
                </div>
            </div>
                
            <div class="row" style="color:silver;padding-bottom:0;">
            
                <?php
                $number_of_posts = 5;
                $args = array( 'numberposts' => $number_of_posts );
                $posts = wp_get_recent_posts( $args );
                
                ?>
                
                <!-- B L O G  I T E M  1 -->    
                <?php echo "<a href='blog/index.php/".$posts[0]['post_name']."' class='col-sm-6 blog-item-1'>";?>
                    <h2 class="blog-title"><?php echo $posts[0]['post_title']?></h2>
                    <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[0]['ID']);?></p>
                    <?php foreach(get_the_category($posts[0]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                    <div class='overlay'></div>
                <?php echo "</a>";?>
                
                <!-- B L O G  I T E M  2 -->
                <?php echo "<a href='blog/index.php/".$posts[1]['post_name']."' class='col-sm-6 blog-item-2'>";?>
                    <h2 class="blog-title"><?php echo $posts[1]['post_title']?></h2>
                    <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[1]['ID']);?></p>
                    <?php foreach(get_the_category($posts[1]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                    <div class='overlay'></div>
                <?php echo "</a>";?>
                
                <!-- B L O G  I T E M  3 -->
                <?php echo "<a href='blog/index.php/".$posts[2]['post_name']."' class='col-sm-4 blog-item-3'>";?>
                    <h3 class="blog-title"><?php echo $posts[2]['post_title']?></h3>
                    <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[2]['ID']);?></p>
                    <?php foreach(get_the_category($posts[2]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                    <div class='overlay'></div>
                <?php echo "</a>";?>
                
                <!-- B L O G  I T E M  4 -->
                <?php echo "<a href='blog/index.php/".$posts[3]['post_name']."' class='col-sm-4 blog-item-4'>";?>
                <h3 class="blog-title"><?php echo $posts[3]['post_title']?></h3>
                <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[3]['ID']);?></p>
                <?php foreach(get_the_category($posts[3]['ID']) as $category) {
                    echo "<p class='blog-category'>".$category->name."</p>";};?>    
                <div class='overlay'></div>
                <?php echo "</a>";?>
                
                <!-- B L O G  I T E M  5 -->
                <?php echo "<a href='blog/index.php/".$posts[4]['post_name']."' class='col-sm-4 blog-item-5'>";?>
                    <h3 class="blog-title"><?php echo $posts[4]['post_title']?></h3>
                <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[4]['ID']);?></p>
                    <?php foreach(get_the_category($posts[4]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                    <div class='overlay'></div>
                <?php echo "</a>";?> 
                </div>
            </div>
                
            
        

        
        
        
        
        
        <!-- M A I N   V I D E O -->
<!--
        <div id="test" class="text-center" style="color: silver;">
            I think I can just put one test message here: {{ message}}, and another right here: {{ message2 }}, and everything should work just fine.
        
        </div>
-->

    	<div class="container" style="margin-top: 60px;margin-bottom:60px;border: 2px solid rgba(142,142,142,.25);border-radius:5px;background-color: rgba(209,209,209,.08);">
            <h4 class="text-center" style="color:white;padding-bottom:20px;padding-top:4px;">Featured</h4>
            <div class="row">
                <div class="col" style="background-color: #0e0b0b;">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qL_Qaqlq_DY" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

       <!-- <div class="container" style="margin-top: 60px;margin-bottom:60px;border: 2px solid rgba(142,142,142,.25);border-radius:5px;background-color: rgba(209,209,209,.08);">

            <div class="row">
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180305223616.mp4">
                    </video>

                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180321084450.mp4">
                    </video>                    
                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180321183457.mp4">
                    </video>
                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180328232258.mp4">
                    </video>
                </div>
            </div>

            <div class="row">
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180328234556.mp4">
                    </video>

                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180405014356.mp4">
                    </video>                    
                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180622002515.mp4">
                    </video>
                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180623033213.mp4">
                    </video>
                </div>
            </div>

            <div class="row">
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180624190340.mp4">
                    </video>

                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180817052126.mp4">
                    </video>                    
                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180321084450.mp4">
                    </video>
                </div>
                <div class="col-3" style="background-color: #0e0b0b; color: #d1d1d1">
                    <video type="video/mp4" width="100%" controls="controls">
                        <source src="vids/Fortnite_20180321183457.mp4">
                    </video>
                </div>
            </div>
        </div> -->

        <!-- F O O T E R -->
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 footer-item">
                    <h6>Latest Posts</h6>
                        <p>Lorem ipsum dolor sit amet, illud noster sed ad, mel mucius noster epicurei at. Ad est dolorum referrentur, falli accommodare sed te. Mea ut elitr numquam antiopam. Admodum vulputate cu nam, mei in tota apeirian, mei simul oblique albucius ad. Usu velit labores mediocritatem in. Eam omnesque sensibus maiestatis an, nec ullum omnes tibique ei.</p>
                    </div>
                    <div class="col-sm-6 footer-item">
                        <h6>Our Departments</h6>
                        <p>Lorem ipsum dolor sit amet, illud noster sed ad, mel mucius noster epicurei at. Ad est dolorum referrentur, falli accommodare sed te. Mea ut elitr numquam antiopam. Admodum vulputate cu nam, mei in tota apeirian, mei simul oblique albucius ad. Usu velit labores mediocritatem in. Eam omnesque sensibus maiestatis an, nec ullum omnes tibique ei.</p>
                    </div>
                <div class="col-sm6 footer-item">
                    <h6>Useful Links</h6>
                    <ul>
                        <li>
                            News
                        </li>
                            About us
                        <li>
                            Team
                        </li>
                            Media
                        <li>
                            Contact
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 footer-item">
                    <h6>About Us</h6>
                    <p>Lorem ipsum dolor sit amet, illud noster sed ad, mel mucius noster epicurei at. Ad est dolorum referrentur, falli accommodare sed te. Mea ut elitr numquam antiopam. Admodum vulputate cu nam, mei in tota apeirian, mei simul oblique albucius ad. Usu velit labores mediocritatem in. Eam omnesque sensibus maiestatis an, nec ullum omnes tibique ei.</p>
                </div>
                </div>
            </div>
            
                
                
                
                <ul class="footer-social-list">
                    <li class="footer-list-item">
                        <a href="#facebook" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <p class="fa fa-facebook"></p>
                        </a>
                    </li>
                    <li class="footer-list-item"><a href="#twitter" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <p class="fa fa-twitter"></p>
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#instagram" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <p class="fa fa-instagram"></p>
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#youtube" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <p class="fa fa-youtube"></p>
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#twitch" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <p class="fa fa-twitch"></p>
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#steam" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <p class="fa fa-steam"></p>
                        </a>
                    </li>
                </ul>
                <p id="copyright">Copyright 01014 Web Solutions 2018</p>
            
        </footer>
        
        
        
       
        
        </div> 
    </body>
</html>