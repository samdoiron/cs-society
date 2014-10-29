<!DOCTYPE html>
<html lang="en">
  <?php require('./includes/head.html');?>
  <body>
    <?php require('./includes/nav.html'); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>Here you could put some CS/DAL related news!</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <!-- content-->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <div class="col-md-4">
          <h2>Heading</h2>
          <p>Put something here. Could be a highlight or something users would want to see. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Geekbeer</h2>
          <p>We do have them (sometimes)! You could put a blurb about the events or some other stuff here. users can click learn more to do the self explanatory task...</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      <?php require($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>
    </div> <!-- /container -->
    <?php require($_SERVER['DOCUMENT_ROOT'].'/includes/js.html'); //this should be last ?>
  </body>
</html>
