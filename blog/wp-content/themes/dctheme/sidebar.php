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
            <h6 class="blog-sidebar-header">Elsewhere</h6>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->