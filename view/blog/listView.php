
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">


<?php foreach($posts as $key => $post); {?>
  $byLine = $post['author'] . ' - ' . $post['posted'];

            <div class="post">
              <div class="postTitle"><h3><?php print $post['title']; ?><h3></div>
              <div class="postContent"><?php print $content; ?></div>
              <div class="postByLine">
                <em><php print $byLine; ?></em>
              </div>
            </div>

<?php }  ?>

          </div>
        </div>
        <!-- end page content -->
