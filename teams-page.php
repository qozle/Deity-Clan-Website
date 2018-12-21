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
        <?php include 'secondary-header-template.html'?>


        <!-- M A I N   C O N T E N T -->
        <h1 class='display-2' id="teams-heading">Deity Clan's Teams</h1>
        <!-- T E A M S  G R I D  -->
        <div class="container teams-container">
            <div class="row teams-row">
                
                <div class="col-sm-6 teams-col">
                    <a class="teams-link" href="/Deity-Clan-Website/cod.php">Call of Duty</a>
                </div>
                <div class='col-sm-6 team-info-col'>
                    <ul class='team-members-list'>The Team:
                        <li class='team-members-list-item'><a href='player-profiles/Ghost-profile.php' class='team-member-link'>Ghost *CAPTAIN*</a></li>
                        <li class='team-members-list-item'><a href='player-profiles/KillSwitch-profile.php' class='team-member-link'>KillSwitch</a></li>
                        <li class='team-members-list-item'><a href='player-profiles/Nukem-profile.php' class='team-member-link'>Nukem</a></li>
                        <li class='team-members-list-item'><a href='player-profiles/Warrior-profile.pp' class='team-member-link'>Warrior</a></li>
                    </ul>
                </div>
                
                <div class="col-sm-6 teams-col">
                    <a class="teams-link" href="/Deity-Clan-Website/fortnite.php">Fortnite</a>
                </div>
                <div class='col-sm-6 team-info-col'>
                    <ul class='team-members-list'>The Team:
                        <li class='team-members-list-item'><a href='player-profiles/Liro-profile.php' class='team-member-link'>Liro *CAPTAIN*</a></li>
                        <li class='team-members-list-item'><a href='player-profiles/WolfEye-profile.php' class='team-member-link'>WolfEye</a></li>
                        <li class='team-members-list-item'><a href='player-profiles/XCite-profile.php' class='team-member-link'>XCite</a></li>
                    </ul>
                </div>
                
                
                <div class="col-sm-6 teams-col">
                    <a class="teams-link" href="/Deity-Clan-Website/nba2k.php">NBA2K</a>
                </div>
                <div class='col-sm-6 team-info-col'>
                    <ul class='team-members-list'>The Team:
                        <li class='team-members-list-item'><a href='player-profiles/Restart-profile.php' class='team-member-link'>Restart</a></li>
                        <li class='team-members-list-item'><a href='player-profiles/CStack-profile.php' class='team-member-link'>CStack</a></li>
                    </ul>
                </div>
                
                <div class="col-sm-6 teams-col">
                    <a class="teams-link" href="/Deity-Clan-Website/ssb.php">Super Smash Bros</a>
                </div>
                <div class='col-sm-6 team-info-col'>
                    <ul class='team-members-list'>The Team:
                        <li class='team-members-list-item'><a href='player-profiles/Ace-profile.php' class='team-member-link'>Ace</a></li>
                    </ul>
                </div>
                
                <div class="col-sm-6 teams-col">
                    <a class="teams-link" href="/Deity-Clan-Website/overwatch.php">Overwatch</a>
                </div>
                <div class='col-sm-6 team-info-col'>
                    <ul class='team-members-list'>The Team:
                        <li class='team-members-list-item'><a href='player-profiles/Hanzo-profile.php' class='team-member-link'>Hanzo</a></li>
                        <li class='team-members-list-item'><a href='player-profiles/Re-Call-profile.php' class='team-member-link'>Re-Call</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php
            $number_of_posts = 5;
            $args = array( 'numberposts' => $number_of_posts );
            $posts = wp_get_recent_posts( $args );
        ?>
        <!-- F O O T E R -->
        
        <?php include 'footer-template.html'?>
    </body>
</html>    
