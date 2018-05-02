<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

  case 'create':
      include( APP_VIEW .'/blog/listSubNav.php' );
      include( APP_VIEW .'/blog/createView.php' );
      break;

  case 'list':
      $posts = listPosts();
      include( APP_VIEW .'/blog/listSubNav.php' );
      include( APP_VIEW .'/blog/listView.php' );
      break;

    default:
        $posts = listPosts();
        include( APP_VIEW .'/blog/listSubNav.php' );
        include( APP_VIEW .'/blog/listView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );

// Local function

function listPosts() {
  $sql = "SELECT
  *
  FROM
  post
  ORDER BY
  posted";


$dbObj = new db();
$dbObj ->dbPrepare($sql);
$dbObj->dbExecute();
$posts = $dbObj->dbFetch("all");

return $posts;
}
