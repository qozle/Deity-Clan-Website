<div class="col-sm-2 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h6 class="blog-sidebar-header">About</h6>
            <p><?php the_author_meta( 'description' ); ?></p>
          </div>
          <div class="sidebar-module">
            <h6 class="blog-sidebar-header">Archives</h6>
            <ol class="list-unstyled">
              <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h6 class="blog-sidebar-header">Social Media</h6>
            <ol class="list-unstyled">
                <li><a href="https://www.instagram.com/DeityGClan/">Instagram</a></li>
                <li><a href="https://twitter.com/DeityGClan">Twitter</a></li>
                <li><a href="https://www.twitch.tv/DeityClan">Twitch</a></li>
                <li><a href="https://www.facebook.com/DeityGClan/">Facebook</a></li>
                <li><a href="https://www.youtube.com/channel/UCChSRNxkgCfhS_YG4j-5wqw">Youtube</a></li>
                
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->