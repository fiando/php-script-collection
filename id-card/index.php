<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ID Card Generator</title>
  <link rel="stylesheet" href="assets/css/foundation.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
<div class="row">
  <div class="column medium-6 medium-centered">
    <h1 class="text-center" id="page-title">ID Card Generator</h1>

    <form action="images.php" method="post">
      <div class="row">
        <div class="small-12 columns">
          <label>Name
          <input type="text" name="name" value="" maxlength="45" placeholder="Your Name">
          </label>
        </div>

        <div class="small-12 columns">
          <label>Born
          <input type="date" name="hbd" value="" placeholder="08/09/1998">
          </label>
        </div>

        <div class="small-12 columns">
          <label>Location
          <input type="text" name="location" value="" required maxlength="20" placeholder="Yogyakarta">
          </label>
        </div>

        <div class="small-12 columns">
          <label>Email
            <input type="email" name="email" value=""required maxlength="50" placeholder="foobar@gmail.com">
          </label>
        </div>

        <div class="small-12 columns">
          <label>Phone
          <input type="text" name="phone" value="" required maxlength="15" placeholder="08123456789">
          </label>
        </div>

      <div class="row">
        <fieldset class="large-12 columns">
          <input id="generate" onmouseover="body.style='background-color:#083247;'" onmouseout= "body.style='background-color:#607D8B;'" class="button alert large-12" type="submit" name="submit" value="Generate"/ >
        </fieldset>
      </div>
    </form>
  </div>
</div>
      <script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/what-input.js"></script>
      <script src="assets/js/vendor/foundation.min.js"></script>
      <script src="assets/js/app.js"></script>
    </body>
    </html>
