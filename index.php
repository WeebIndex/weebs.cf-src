<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="A home for weeb based projects" name="description">
  <meta content="weeb, weebs, weebs.cf, oblivionsan, oblivion" name="keywords">
  <meta content="#C0B5D7" name="theme-color">
  <meta content="https://weebs.cf/assets/img/girl.jpg" property="og:image">
  <meta content="website" property="og:type">
  <meta content="https://weebs.cf/" property="og:url">
  <meta content="Weebs.CF" property="og:site_name">
  <meta content="Home | Weebs.CF" property="og:title">
  <meta content="A home for weeb based projects" property="og:description">
  <link href="assets/img/girl.jpg" rel="icon" type="image/x-icon">
  <link href="assets/img/girl.jpg" rel="shortcut icon" type="image/x-icon">
  <title>Home | Weeb</title>
  <!-- CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/fontawesome.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- PHP -->
  <?php require_once 'assets/api/Mobile_Detect.php'; ?>
  <?php require_once 'assets/api/detect.php'; ?>
</head>
<body class="bg-light">
  <div class="container">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Weebs.CF</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="../"><i aria-hidden="true" class="fa fa-home"></i> Home</a>
            </li>
            <li>
              <a href="random/"><i aria-hidden="true" class="fa fa-code"></i> Random</a>
            </li>
            <li>
              <a href="image/"><i class="fa fa-code"></i> Image</a>
            </li>
            <li>
              <a href="kitsu/" target="_blank"><i class="fas fa-external-link-alt"></i> Kitsu</a>
            </li>
            <li class="dropdown">
              <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"><i aria-hidden="true" class="fas fa-share-square"></i> Socials <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="https://discord.oblivionsan.tk" target="_blank"><i aria-hidden="true" class="fab fa-discord"></i> Discord</a>
                </li>
                <li>
                  <a href="https://twitter.com/OblivionSan" target="_blank"><i aria-hidden="true" class="fab fa-twitter"></i> Twitter</a>
                </li>
                <li>
                  <a href="https://github.com/OblivionSan" target="_blank"><i aria-hidden="true" class="fab fa-github"></i> GitHub</a>
                </li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <h2 style="padding-top: 50px">Home - <small>A home for <b>weeb</b> based projects</small></h2>
    <br>
    <div class="container back">
      <h3>What is "<a href="https://weebs.cf">Weebs.CF</a>"?</h3>
      <p><a href="https://weebs.cf">Weebs.CF</a> is an index page for weeb based projects.<br>
      If you would like to help populate this website with more weeb based projects then feel free to contact me via <a href="https://discord.oblivionsan.tk">Discord</a>.<br>
      More weeb based projects will be posted/uploaded in the foreseeable future to <a href="https://weebs.cf">Weebs.CF</a>.</p>
      <hr>
      <h3>Current Projects</h3>
      <p><a href="https://weebs.cf">Weebs.CF</a> currently runs <b>4</b> projects.<br>
      You can also visit the <a href="https://github.com/WeebIndex">GitHub</a> page to view other projects <a href="https://weebs.cf">Weebs.CF</a> supports.
      <ul>
        <li><a href="./random">Random</a> - Random Image Generator.</li>
        <li><a href="./image">Image</a> - Build Custom Images Using Parameters.</li>
        <li><a href="https://github.com/WeebIndex/weebs.cf-wrappers" target="_blank">Wrappers</a> - Wrappers for <a href="https://weebs.cf">Weebs.CF</a>.</li>
        <li><a href="https://weebs.cf/kitsu" target="_blank">Kitsu</a> - A Kitsu.io widget that shows the given user statistics.</li>
      </ul><hr>
      </p>
      <h3>Have Any Suggestions?</h3>
      <p>Then you can contact me through <a href="https://discord.oblivionsan.tk">Discord</a> and share your ideas with me.<br>
      If you also notice any issues or bugs on this site or its functions then contact me through <a href="https://discord.oblivionsan.tk">Discord</a>.     
      </p>
    </div>
    <br>
    </div><!-- /container -->
    <script src="assets/js/jquery.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
    <div class="container text-center" style="padding-bottom:50px;">
      <hr>
      <small class="text-muted">Your IP: <?php echo Detect::ip();?></small><br>
      <small class="text-muted">Website developed by <a href="https://oblivionsan.tk/" target="_blank"><b>Oblivion さん</b></a></small><br>
    </div>
  </div>
</body>
</html>