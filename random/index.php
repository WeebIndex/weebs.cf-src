<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="A home for weeb based projects" name="description">
  <meta content="weeb, weebs, weebs.cf, oblivionsan, oblivion" name="keywords">
  <meta content="#C0B5D7" name="theme-color">
  <meta content="https://weebs.cf/assets/img/girl.jpg" property="og:image">
  <meta content="website" property="og:type">
  <meta content="https://weebs.cf/random/" property="og:url">
  <meta content="Weebs.CF" property="og:site_name">
  <meta content="Random | Weebs.CF" property="og:title">
  <meta content="A home for weeb based projects" property="og:description">
  <link href="../assets/img/girl.jpg" rel="icon" type="image/x-icon">
  <link href="../assets/img/girl.jpg" rel="shortcut icon" type="image/x-icon">
  <title>Random | Weeb</title>
  <!-- CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
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
          <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Weebs.CF</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li>
              <a href="../"><i aria-hidden="true" class="fa fa-home"></i> Home</a>
            </li>
            <li class="active">
              <a href="#"><i aria-hidden="true" class="fa fa-code"></i> Random</a>
            </li>
            <li>
              <a href="../image"><i class="fa fa-code"></i> Image</a>
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
    <h2 style="padding-top: 50px">Random - <small>A home for <b>weeb</b> based projects</small></h2><br>
    <div class="container back">
      <h3>How to use <a href="../">Weebs.CF</a> - Random Image Feature</h3>
      <hr>
      <p>These examples will give you an idea on how to use <a href="../">Weebs.CF</a>'s <b>Random Image</b> feature.<br>
      These examples will be using the <a href="../random/hug">Hug</a> directory.<br>
      If you have any other usage examples for <a href="../">Weebs.CF</a>'s <b>Random Image</b> feature then feel free to let me know via my <a href="https://discord.oblivionsan.tk">Discord</a>.<br>
      <br>
      <b>THESE EXAMPLES ARE USING THE RAW OUTPUT.</b></p>
      <hr>
      <button class="accordion"><i aria-hidden="true" class="fas fa-chevron-right"></i> View Random Image List</button>
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
            <td>
              <a href="random/hug">Click Here</a>
            </td>
          </tr>
          <tr>
            <td>Punches</td>
            <td>
              <a href="random/punch">Click Here</a>
            </td>
          </tr>
          <tr>
            <td>Poke</td>
            <td>
              <a href="random/poke">Click Here</a>
            </td>
          </tr>
          <tr>
            <td>Pat</td>
            <td>
              <a href="random/pat">Click Here</a>
            </td>
          </tr>
          <tr>
            <td>Kiss</td>
            <td>
              <a href="random/kiss">Click Here</a>
            </td>
          </tr>
          <tr>
            <td>Slap</td>
            <td>
              <a href="random/slap">Click Here</a>
            </td>
          </tr>
          <tr>
            <td>Laugh</td>
            <td>
              <a href="random/laugh">Click Here</a>
            </td>
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
            <td>
              <a href="random/coin">Click Here</a>
            </td>
          </tr>
        </table>
      </div>
      <hr>
      <h3>Outputs</h3>
      <div class="input-group">
        <div class="input-group-addon" style="padding-right: 20px">
          RAW
        </div>
        <pre class="form-control">https://weebs.cf/random/{dir_name}</pre>
      </div><br>
      <div class="input-group">
        <div class="input-group-addon" style="padding-right: 16px">
          JSON
        </div>
        <pre class="form-control">https://weebs.cf/random/{dir_name}?json</pre>
      </div>
      <hr>
      <h3>JavaScript</h3>
      <hr>
      <pre><code class="javascript">//Known issues with snekfetch@4.0.0 ~ install snekfetch@3.6.1
const request = require("snekfetch");
request.get("https://weebs.cf/random/hug").then(body =&gt; {
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
</code></pre>
    </div><!-- /container -->
    <script src="../assets/js/main.js"></script> 
    <script src="../assets/js/jquery.min.js"></script> 
    <script src="../assets/js/bootstrap.min.js"></script> 
    <div class="container text-center" style="padding-bottom:50px;">
      <hr>
      <small class="text-muted">Your IP: <?php echo Detect::ip();?></small><br>
      <small class="text-muted">Website developed by <a href="https://oblivionsan.tk/" target="_blank"><b>Oblivion さん</b></a></small><br>
    </div>
  </div>
</body>
</html>