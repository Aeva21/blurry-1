<?php session_start() ?>
<?php require '../backend/config.php'; ?>
<?php require '../backend/html_prepare.php'; ?>
<?php require '../backend/functions.php'; ?>

<?php echo SessionCheck()?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
  <?php print $html_head ?>
  </head>
  <body>
    <?php print $html_header ?>
    <h1>Willkommen <?php print $_SESSION['vorname'] ?></h1>
    <div id="content_user_index">
      <a href="<?php print $link_user_img_scrollsearch ?>"><button type="button" name="button" >Bilder Suchen</button></a>
      <a href="<?php print $link_image_upload_ui ?>"><button type="button" name="button">Bilder hochladen</button></a>
    </div>
    <?php print $html_footer ?>
  </body>
</html>
