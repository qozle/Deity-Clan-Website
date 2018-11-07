<html>
    <head>
        <title>DEITY CLAN</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/deitylogo1.png">
        
    </head>

    <body>
        <?php 
            define('WP_USE_THEMES', false);
            require('blog/wp-blog-header.php');
        ?>
    	


        <!-- N A V B A R -->
        <nav class="navbar navbar-expand-md sticky-top pl-0" style="background-color: rgb(25,25,25);">
    		
                <a class="navbar-brand m-0">
                    <img src="img/deitylogo1.png" width=75px>
                </a>
                <span class="navbar-text">
                    <span class="deity-font-1">DEITY</span>
                    <span class="clan-font-1">CLAN</span>
                </span>
            
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
            <div class="container">
                <h1 class=py-3 style="text-align: center;"><span class="deity-font-2">DEITY</span> <span class="clan-font-2">CLAN</span></h1>
            </div>
        </div>



        <!-- M A I N   C O N T E N T -->
        
        
        <!-- B L O G  P O S T S -->
        
         
        <div class="container" style="margin-top: 60px;border: 2px solid rgba(142,142,142,.25);border-radius:5px;">
            <div class="row">
                <div class="col-sm-12" style="padding-left:0;padding-right:0;">
                    <h4 class="text-center" style="color:white;padding-bottom:15px;padding-top:4px;margin-bottom:0;background-color: rgba(209,209,209,.08);">Latest News</h4>
                </div>
            </div>
                
            <div class="row" style="color:silver;padding-bottom:0;">
            
                <?php
                $number_of_posts = 5;
                $args = array( 'numberposts' => $number_of_posts );
                $recent_posts = wp_get_recent_posts( $args );
                foreach($recent_posts as $post ){
                    
                    switch (array_search($post,$recent_posts)) {
                        case 0:
                            echo "<a href='blog/".$post['post_name']."' class='col-sm-6 blog-item-1'>";
                            echo "<h4>".$post['post_title']."</h4> <br>";
                            echo "<span>".$post['post_date']."</span> <br>";
                            echo "<p>".$post['post_excerpt']."</p> <br><br>";
                            foreach(get_the_category($post['ID']) as $category) {
                            echo "<p>".$category->name."</p>";
                            };
                            echo "</a>";
                            break;
                        case 1:
                            echo "<a href='blog/".$post['post_name']."' class='col-sm-6 blog-item-2'>";
                            echo "<h4>".$post['post_title']."</h4> <br>";
                            echo "<span>".$post['post_date']."</span> <br>";
                            echo "<p>".$post['post_excerpt']."</p> <br><br>";
                            foreach(get_the_category($post['ID']) as $category) {
                            echo "<p>".$category->name."</p>";
                            };
                            echo "</a>";
                            break;
                        case 2:
                            echo "<a href='blog/".$post['post_name']."' class='col-sm-4 blog-item-3'>";
                            echo "<h4>".$post['post_title']."</h4> <br>";
                            echo "<span>".$post['post_date']."</span> <br>";
                            echo "<p>".$post['post_excerpt']."</p> <br><br>";
                            foreach(get_the_category($post['ID']) as $category) {
                            echo "<p>".$category->name."</p>";
                            };
                            echo "</a>";
                            break;
                        case 3:
                            echo "<a href='blog/".$post['post_name']."' class='col-sm-4 blog-item-4'>";
                            echo "<h4>".$post['post_title']."</h4> <br>";
                            echo "<span>".$post['post_date']."</span> <br>";
                            echo "<p>".$post['post_excerpt']."</p> <br><br>";
                            foreach(get_the_category($post['ID']) as $category) {
                            echo "<p>".$category->name."</p>";
                            };
                            echo "</a>";
                            break;
                        case 4:
                            echo "<a href='blog/".$post['post_name']."' class='col-sm-4 blog-item-5'>";
                            echo "<h4>".$post['post_title']."</h4> <br>";
                            echo "<span>".$post['post_date']."</span> <br>";
                            echo "<p>".$post['post_excerpt']."</p> <br><br>";
                            foreach(get_the_category($post['ID']) as $category) {
                            echo "<p>".$category->name."</p>";
                            };
                            echo "</a>";
                            break;
                        };
                    };
                ?>
                </div>
            </div>
                
            
        

        
        
        <!-- V I D E O S -->
        
<!--
        <div id="test" class="text-center" style="color: silver;">
            I think I can just put one test message here: {{ message}}, and another right here: {{ message2 }}, and everything should work just fine.
        
        </div>
-->

    	<div class="container" style="margin-top: 60px;margin-bottom:60px;border: 2px solid rgba(142,142,142,.25);border-radius:5px;background-color: rgba(209,209,209,.08);">
            <h4 class="text-center" style="color:white;padding-bottom:20px;padding-top:4px;">Video carousel or something?</h4>
            <div class="row">
                <div class="col" style="background-color: #0e0b0b;">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qL_Qaqlq_DY" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- F O O T E R -->
        
        <footer>
            <div class="flex-container-footer">
                <div class="flex-item-footer">
                    <h6>Latest Posts</h6>
                    <p>Lorem ipsum dolor sit amet, illud noster sed ad, mel mucius noster epicurei at. Ad est dolorum referrentur, falli accommodare sed te. Mea ut elitr numquam antiopam. Admodum vulputate cu nam, mei in tota apeirian, mei simul oblique albucius ad. Usu velit labores mediocritatem in. Eam omnesque sensibus maiestatis an, nec ullum omnes tibique ei.</p>
                </div>
                <div class="flex-item-footer">
                    <h6>Our Departments</h6>
                    <p>Lorem ipsum dolor sit amet, illud noster sed ad, mel mucius noster epicurei at. Ad est dolorum referrentur, falli accommodare sed te. Mea ut elitr numquam antiopam. Admodum vulputate cu nam, mei in tota apeirian, mei simul oblique albucius ad. Usu velit labores mediocritatem in. Eam omnesque sensibus maiestatis an, nec ullum omnes tibique ei.</p>
                </div>
                <div class="flex-item-footer">
                    <h6>Useful Links</h6>
                    <ul>
                        <li>
                            Link 1
                        </li>
                         
                        <li>
                            Link 2    
                        </li>
                        
                        <li>
                            Link 3
                        </li>
                    </ul>
                </div>
                <div class="flex-item-footer">
                    <h6>About Us</h6>
                    <p>Lorem ipsum dolor sit amet, illud noster sed ad, mel mucius noster epicurei at. Ad est dolorum referrentur, falli accommodare sed te. Mea ut elitr numquam antiopam. Admodum vulputate cu nam, mei in tota apeirian, mei simul oblique albucius ad. Usu velit labores mediocritatem in. Eam omnesque sensibus maiestatis an, nec ullum omnes tibique ei.</p>
                </div>
            </div>
            
                
                
                
                <ul style="list-style: none;margin-bottom:0;">
                    <li>
                        <a href="#facebook" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li><a href="#twitter" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#instagram" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#youtube" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#twitch" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <i class="fa fa-twitch"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#steam" target="_blank" style="padding-right: 10px; font-size: 100%;">
                            <i class="fa fa-steam"></i>
                        </a>
                    </li>
                </ul>
                <p id="copyright">Copyright 01014 Web Solutions 2018</p>
            
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="js/maxs-vue.js"></script>  
    </body>
</html>