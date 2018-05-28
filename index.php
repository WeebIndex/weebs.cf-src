<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A home for weeb based projects">
    <meta name="keywords" content="weeb, weebs, weebs.cf, oblivionsan, oblivion">
    <meta name="theme-color" content="EDABD1">
    <meta property="og:image" content="https://weebs.cf/assets/img/girl.jpg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://weebs.cf/"/>
    <meta property="og:site_name" content="Weebs.CF"/>
    <meta property="og:title" content="Home | Weebs.CF"/>
    <meta property="og:description" content="A home for weeb based projects"/>
    <link rel="icon" href="assets/img/girl.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/img/girl.jpg"type="image/x-icon"/>
    <title>Home | Weeb</title>
    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <?php require_once 'assets/api/Mobile_Detect.php'; ?>
    <?php require_once 'assets/api/detect.php'; ?>
  </head>
  <body class="bg-light">
    <div class="container">
 <!-- Fixed navbar -->
 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Weebs.CF</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="random/"><i class="fa fa-code" aria-hidden="true"></i> Examples</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-share-square" aria-hidden="true"></i> Socials <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a target="_blank" href="https://discord.oblivionsan.tk"><i class="fab fa-discord" aria-hidden="true"></i> Discord</a></li>
                  <li><a target="_blank" href="https://twitter.com/OblivionSan"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                  <li><a target="_blank" href="https://github.com/OblivionSan"><i class="fab fa-github" aria-hidden="true"></i> GitHub</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      <h2 style="padding-top: 50px">Home - <small>A home for <b>weeb</b> based projects</small></h2>
      <br>
      <button class="accordion"><i class="fas fa-chevron-right" aria-hidden="true"></i> 🖼️ Random Image List</button>
      <div class="panel">
        <br>
        <h3>Anime</h3>
        <table>
          <tr>
            <th>Directory Names</th>
            <th>Directory Links</th>
          </tr>
          <tr>
            <td>Hugs</td>
            <td><a href="random/hug">Click Here</a></td>
          </tr>
          <tr>
            <td>Punches</td>
            <td><a href="random/punch">Click Here</a></td>
          </tr>
          <tr>
            <td>Poke</td>
            <td><a href="random/poke">Click Here</a></td>
          </tr>
          <tr>
            <td>Pat</td>
            <td><a href="random/pat">Click Here</a></td>
          </tr>
          <tr>
            <td>Kiss</td>
            <td><a href="random/kiss">Click Here</a></td>
          </tr>
          <tr>
            <td>Slap</td>
            <td><a href="random/slap">Click Here</a></td>
          </tr>
          <tr>
            <td>Laugh</td>
            <td><a href="random/laugh">Click Here</a></td>
          </tr>
        </table>
        <h3>Other</h3>
        <table>
          <tr>
            <th>Directory Names</th>
            <th>Directory Links</th>
          </tr>
          <tr>
            <td>Coin Flip</td>
            <td><a href="random/coin">Click Here</a></td>
          </tr>
        </table>
        <br>
      </div>
      <button class="accordion"><i class="fas fa-chevron-right" aria-hidden="true"></i> 🦊 Kitsu-Widget <a target="_blank" href="kitsu/">[LINK]</a></button>
      <div class="panel">
        <iframe src="kitsu" frameborder="0" height="500px" width="100%"></iframe>
        <br>
      </div>
      <button class="accordion"><i class="fas fa-chevron-right" aria-hidden="true"></i> 💻 GitHub List</button>
      <div class="panel">
        <br>
        <div style="padding-bottom: 10px" class="col-sm-4">
          <div class="github-widget" data-username="WeebIndex"></div>
        </div>
        <div style="padding-bottom: 10px" class="col-sm-4">
          <div class="github-widget" data-username="OblivionSan"></div>
        </div>
        <div style="padding-bottom: 10px" class="col-sm-4">
            <div class="github-widget" data-username="MizoreChan"></div>
          </div>
        <br>
      </div>
    <!-- /container -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ghWidget.js"></script>
    <div class="container text-center" style="padding-bottom:50px;">
      <hr>
      <small class="text-muted">Your IP: <?php echo Detect::ip();?></small>
      <br>
      <small class="text-muted">Website developed by <a href="https://oblivionsan.tk/" target="_blank"><b>Oblivion さん</b></a></small>
      <br>
    </div>
  </body>
</html>