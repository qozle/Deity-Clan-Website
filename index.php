
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
        
        <link rel="icon" href="img/deitylogo1.png">
        
        
        
    </head>

    <body>
        <?php include 'header-template.html'?>
        
        <!-- S P L A S H  V I D E O  A N D  I M A G E -->
        <div id='splash-vid-cont'>
            <video src='img/assets/vid1.mp4' autoplay='true' muted='true' preload='metadata' id='splashvid'></video>
        </div>
        
        <div id='splash-img-cont'>
            <div id='header-text-div'>
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
                <?php echo "<a href='blog/index.php/".$posts[0]['post_name']."' class='col-sm-8 blog-item-1'>";?>
                    <h2 class="blog-title"><?php echo $posts[0]['post_title']?></h2>
                    <?php foreach(get_the_category($posts[0]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                    <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[0]['ID']);?></p>
                    <div class='overlay'></div>
                <?php echo "</a>";?>
                
                <!-- T W I T T E R  F E E D -->
                <div class='col-sm-4 feed-cont'>
                    <a class="twitter-timeline" data-height=300 data-dnt="true" data-theme="dark" data-cards="true" href="https://twitter.com/deitygclan?ref_src=twsrc%5Etfw">Tweets by deitygclan</a> <script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                
                <!-- B L O G  I T E M  2 -->
                <?php echo "<a href='blog/index.php/".$posts[1]['post_name']."' class='col-sm-4 blog-item-2'>";?>
                    <h2 class="blog-title"><?php echo $posts[1]['post_title']?></h2>
                    <?php foreach(get_the_category($posts[1]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                    <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[1]['ID']);?></p>
                    <div class='overlay'></div>
                <?php echo "</a>";?>
                
                
                <!-- B L O G  I T E M  3 -->
                <?php echo "<a href='blog/index.php/".$posts[2]['post_name']."' class='col-sm-8 blog-item-3'>";?>
                    <h3 class="blog-title"><?php echo $posts[2]['post_title']?></h3>
                    <?php foreach(get_the_category($posts[2]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                    <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[2]['ID']);?></p>
                    <div class='overlay'></div>
                <?php echo "</a>";?>
                
                <!-- B L O G  I T E M  4 -->
                <?php echo "<a href='blog/index.php/".$posts[3]['post_name']."' class='col-sm-6 blog-item-4'>";?>
                <h3 class="blog-title"><?php echo $posts[3]['post_title']?></h3>
                <?php foreach(get_the_category($posts[3]['ID']) as $category) {
                    echo "<p class='blog-category'>".$category->name."</p>";};?>    
                <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[3]['ID']);?></p>
                <div class='overlay'></div>
                <?php echo "</a>";?>
                
                <!-- B L O G  I T E M  5 -->
                <?php echo "<a href='blog/index.php/".$posts[4]['post_name']."' class='col-sm-6 blog-item-5'>";?>
                    <h3 class="blog-title"><?php echo $posts[4]['post_title']?></h3>
                    <?php foreach(get_the_category($posts[4]['ID']) as $category) {
                        echo "<p class='blog-category'>".$category->name."</p>";};?>
                <p class='blog-date'><?php echo get_the_time('F j, Y', $posts[4]['ID']);?></p>
                    <div class='overlay'></div>
                <?php echo "</a>";?>
                
               
                </div>
            </div>
                

        
            
        <!-- M E D I A  G R I D -->
            
            
    	<div class="container" style="margin-top: 60px;margin-bottom:60px;border: 2px solid rgba(142,142,142,.25);border-radius:5px;background-color: rgba(209,209,209,.08);">
            <h4 class="text-center" style="color:white;padding-bottom:12px;padding-top:12px;">Highlights</h4>
            <div class="row">
                <!-- Video 1 -->
                <div class="col-12 order-1 col-sm-6 yt-col">
                    <div class="embed-responsive embed-responsive-16by9">
                      <video src="img/assets/vid3.mp4" controls></video>
                    </div>
                </div>
                <!-- Image 1 -->
                <div class="col-12 order-2 col-sm-4 order-sm-4 img-1-col"></div>
                <!-- Video 2 -->
                <div class="col-12 order-3 col-sm-6 order-sm-2 yt-col">
                    <div class="embed-responsive embed-responsive-16by9">
                      <video src="img/assets/vid2.mp4" controls></video>
                    </div>
                </div>
                
                <!-- Image 2 -->
                <div class="col-12 order-4 col-sm-4 order-sm-5 img-2-col"></div>
                <!-- Video 3 -->
                <div class="col-12 order-5 col-sm-6 order-sm-6 video-col">
                    <div class="embed-responsive embed-responsive-16by9">
                      <video src="/Deity-Clan-Website/vids/2.mp4" controls></video>
                    </div>
                </div>
                <!-- Image 3 -->
                <div class="col-12 order-6 col-sm-4 order-sm-3 img-3-col"></div>
                <!-- Video 4 -->
                <div class="col-12 order-7 col-sm-6 order-sm-7 video-col">
                    <div class="embed-responsive embed-responsive-16by9">
                      <video src="/Deity-Clan-Website/vids/3.mp4" controls></video>
                    </div>
                </div>

                
            </div>
        </div>

     

       <?php include 'footer-template.html'?>
        <script src="js/custom.js"></script>
    </body>
</html>    
