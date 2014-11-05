<!DOCTYPE html>
<html lang="en">
  <?php require('./includes/head.html');?>
  <body>
    <?php require('./includes/nav.html'); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="ui page grid">
      <div class="column"
        <div class="ui segment">
          <h1 class="ui header">Hello, world!</h1>
          <p>Here you could put some CS/DAL related news!</p>
          <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
    </div>

    <!-- content-->
    <div class="ui segment">
      <!-- Example row of columns -->
      <div class="ui grid">
        <div class="ui eight wide column">
          <h2>Geekbeer</h2>
          <p>We do have them (sometimes)! You could put a blurb about the events or some other stuff here. users can click learn more to do the self explanatory task...</p>
          <p><a class="ui button" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="ui eight wide column">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="ui button" href="#" role="button">View details &raquo;</a></p>
        </div>
      <?php require('./includes/footer.html'); ?>
    </div> <!-- /container -->
    <?php require('./includes/js.html'); // this should be last ?>
  </body>
</html>
