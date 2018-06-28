<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A home for weeb based projects">
    <meta name="keywords" content="weeb, weebs, weebs.cf, oblivionsan, oblivion">
    <meta name="theme-color" content="#EDABD1">
    <meta property="og:image" content="https://weebs.cf/assets/img/girl.jpg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://weebs.cf/random/"/>
    <meta property="og:site_name" content="Weebs.CF"/>
    <meta property="og:title" content="Examples | Weebs.CF"/>
    <meta property="og:description" content="A home for weeb based projects"/>
    <link rel="icon" href="../assets/img/girl.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" href="../assets/img/girl.jpg"type="image/x-icon"/>
    <title>Examples | Weeb</title>
    <!-- CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- Assets for HighLight.js -->
    <link rel="stylesheet" href="../assets/css/github.css">
    <script src="../assets/js/highlight.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <!-- PHP -->
    <?php require_once '../assets/api/Mobile_Detect.php'; ?>
    <?php require_once '../assets/api/detect.php'; ?>
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
            <li><a href="../"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active"><a href="#"><i class="fa fa-code" aria-hidden="true"></i> Examples</a></li>
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
      <h2 style="padding-top: 50px">Examples - <small>A home for <b>weeb</b> based projects</small></h2>
      <br>
      <div class="container back">
      <h3>How to use <a href="../">Weebs.CF</a> - Random Image Feature</h3>
      <hr>
      <p>These examples will give you an idea on how to use <a href="../">Weebs.CF</a>'s <b>Random Image</b> feature.<br>These examples will be using the <a href="../random/hug">Hug</a> directory.<br>If you have any other usage examples for <a href="../">Weebs.CF</a>'s <b>Random Image</b> feature then feel free to let me know via my <a href="https://discord.oblivionsan.tk">Discord</a>.<br><br><b>THESE EXAMPLES ARE USING THE RAW OUTPUT.</b></p>
      <hr>
      <h3>Outputs</h3>
      <div class="input-group">
        <div style="padding-right: 20px" class="input-group-addon">RAW</div>
        <pre class="form-control">https://weebs.cf/random/{dir_name}</pre>
      </div>
      <br>
      <div class="input-group">
        <div style="padding-right: 16px" class="input-group-addon">JSON</div>
        <pre class="form-control">https://weebs.cf/random/{dir_name}?json</pre>
      </div>
      <hr>
      <h3>JavaScript</h3>
          <hr>
          <pre><code class="javascript">//Known issues with snekfetch@4.0.0 ~ install snekfetch@3.6.1
const request = require("snekfetch");
request.get("https://weebs.cf/random/hug").then(body => {
    console.log(body.text)
});
</code></pre>
          <h3>PHP</h3>
          <hr>
          <pre><code class="php">$text = file_get_contents("https://weebs.cf/random/hug");
echo $text;
</code></pre>
          <h3>Python</h3>
          <hr>
          <pre><code class="python">import requests
response = requests.get("https://weebs.cf/random/hug")
print(response.text)
</code></pre>
          <h3>Go</h3>
          <hr>
          <pre><code class="go">package main
import (
	"fmt"
	"io/ioutil"
	"net/http"
)
func main() {
	url := "https://weebs.cf/random/hug"
	resp, err := http.Get(url)
	if err != nil {
		panic(err)
	}
	defer resp.Body.Close()
	html, err := ioutil.ReadAll(resp.Body)
	if err != nil {
		panic(err)
	}
	fmt.Printf("%s\n", html)
}
</code></pre></div>
    <!-- /container -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/ghWidget.js"></script>
    <div class="container text-center" style="padding-bottom:50px;">
      <hr>
      <small class="text-muted">Your IP: <?php echo Detect::ip();?></small>
      <br>
      <small class="text-muted">Website developed by <a href="https://oblivionsan.tk/" target="_blank"><b>Oblivion さん</b></a></small>
      <br>
    </div>
  </body>
</html>