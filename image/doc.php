<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="A home for weeb based projects" name="description">
  <meta content="weeb, weebs, weebs.cf, oblivionsan, oblivion" name="keywords">
  <meta content="#EDABD1" name="theme-color">
  <meta content="https://weebs.cf/assets/img/girl.jpg" property="og:image">
  <meta content="website" property="og:type">
  <meta content="https://weebs.cf/random/" property="og:url">
  <meta content="Weebs.CF" property="og:site_name">
  <meta content="Examples | Weebs.CF" property="og:title">
  <meta content="A home for weeb based projects" property="og:description">
  <link href="../assets/img/girl.jpg" rel="icon" type="image/x-icon">
  <link href="../assets/img/girl.jpg" rel="shortcut icon" type="image/x-icon">
  <title>Image | Weeb</title><!-- CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet"><!-- Assets for HighLight.js -->
  <link href="../assets/css/github.css" rel="stylesheet">
  <script src="../assets/js/highlight.js">
  </script>
  <script>
    hljs.initHighlightingOnLoad();
  </script><!-- PHP -->
  <?php require_once '../assets/api/Mobile_Detect.php'; ?><?php require_once '../assets/api/detect.php'; ?>
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
            <li>
              <a href="../"><i class="fa fa-home"></i> Home</a>
            </li>
            <li>
              <a href="../random"><i class="fa fa-code"></i> Examples</a>
            </li>
            <li class="active">
              <a href="#"><i class="fa fa-code"></i>Image</a>
            </li>
            <li>
              <a href="../kitsu" target="_blank"><i class="fas fa-external-link-alt"></i> Kitsu</a>
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
    <h2 style="padding-top: 50px">Image - <small>A home for <b>weeb</b> based projects</small></h2><br>
    <div class="container back">
      <h3>How to use <a href="../">Weebs.CF</a> - Image Generator</h3>
      <hr>
      <p>This page will show you how to access and use the <b>Image Generators</b>.<br>
      More <b>Examples</b> will be available soon.</p>
      <p>I will add some more <b>Image Generators</b> as I continue to develop this site.</p>
      <hr>
      <h3>Hex Image Generator</h3>
      <p>This generator will output a <code>500x500</code> image of whatever <b>hex</b> formated color you give it in via the hex parameter.<br>
      You <b>must</b> supply your hex code like <code>ffffff</code> and not <code>#ffffff</code> or else the color will not display.</p>
      <div class="input-group">
        <div class="input-group-addon" style="padding-right: 42px">
          LINK
        </div>
        <pre class="form-control">https://weebs.cf/image/?hex={hex_code}</pre>
      </div><br>
      <div class="input-group">
        <div class="input-group-addon" style="padding-right: 10px">
          EXAMPLE
        </div>
        <pre class="form-control">https://weebs.cf/image/?hex=ffffff</pre>
      </div><br>
    </div><!-- /container -->
    <script src="../assets/js/main.js"></script> 
    <script src="../assets/js/jquery.min.js"></script> 
    <script src="../assets/js/bootstrap.min.js"></script> 
    <script src="../assets/js/ghWidget.js"></script>
    <div class="container text-center" style="padding-bottom:50px;">
      <hr>
      <small class="text-muted">Your IP: <?php echo Detect::ip();?></small><br>
      <small class="text-muted">Website developed by <a href="https://oblivionsan.tk/" target="_blank"><b>Oblivion さん</b></a></small><br>
    </div>
  </div>
</body>
</html>