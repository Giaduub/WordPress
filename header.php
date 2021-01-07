<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= site_url()."/wp-content/themes/".get_template()."/style.css"; ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>


</head>

<body>

  <div class="container d-flex ">
    <div class="col-2 bggrey">
      <div class='container d-flex justify-content-center '>
        <div class='row'>
          <div class="col-12 my-4 ">
            <p class="logo"></p>
            <p class="logosecond">Paper<span>*</p>
          </div>
        </div>
      </div>
      <div class="container d-flex justify-content-center  firstMenu">
        <div class="row">
          <?php
wp_nav_menu( array(
'container' =>'nav',
'theme_location' => '',
'menu_id' => '',
'echo' => true,
'before' => '',
'after' => '',
'link_before' => '',
'link_after' => '',
'depth' => 0,
'items_wrap' => '%3$s',
'walker' => '')
);
?>
        </div>
      </div>
      <div class="container d-flex justify-content-center secondMenu">
        <div class="row">
          <?php
wp_nav_menu( array(
'container' =>'nav',
'theme_location' => '',
'menu_id' => 'Paper2',
'echo' => true,
'before' => '',
'after' => '',
'link_before' => '',
'link_after' => '',
'depth' => 0,
'items_wrap' => '%3$s',
'walker' => '')
);
?>
        </div>
      </div>
    </div>
    <div class="col-1">
</div>