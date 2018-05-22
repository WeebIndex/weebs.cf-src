<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weeb | Example</title>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/girl.jpg"type="image/x-icon" />
    <!-- Assets for HighLight.js -->
    <link rel="stylesheet" href="../assets/css/github.css">
    <script src="../assets/js/highlight.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </head>
  <body>
    <div class="container"></div>
    <div class="container" style="padding-top:25px;">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="../"><b>Weebs.CF</b></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="https://github.com/OblivionSan" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a></li>
              <li><a href="https://twitter.com/OblivionSan" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
              <li><a href="https://discord.oblivionsan.tk/" target="_blank"><i class="fa fa-comments" aria-hidden="true"></i> Discord</a></li>
              <li><a href="./"><i class="fa fa-code" aria-hidden="true"></i> Example</a></li>
              <li><a target="_blank" href="../kitsu/"><i class="fa fa-code" aria-hidden="true"></i> Kitsu-Widget</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <h2><a href="../">Home</a> / Example - <small>A home for <b>weeb</b> based projects</small></h2>
      <hr>
      <div class="panel panel-default">
        <div class="panel-body">
          <h2>
          How to use <a href="../">Weebs.CF</a> - Random Image Feature</h4>
          <P>These examples will give you an idea on how to use Weebs.CF's <b>Random Image</b> feature.<br>These examples will be using the <a href="https://weebs.cf/random/hug" target="_blank">Hug</a> directory.<br>If you have any other usage examples for <a href="../">Weebs.CF</a>'s <b>Random Image</b> feature then feel free to let me know via my <a href="https://discord.oblivionsan.tk">Discord</a>.</P>
          <h3>JavaScript</h3>
          <br>
          <pre><code class="javascript">const request = require("snekfetch");
request.get("https://weebs.cf/random/hug").then(body => {
    console.log(body.text)
});
</code></pre>
          <h3>PHP</h3>
          <br>
          <pre><code class="php">$text = file_get_contents("https://weebs.cf/random/hug");
echo $text;
</code></pre>
          <h3>Python</h3>
          <br>
          <pre><code class="python">import requests
response = requests.get("https://weebs.cf/random/hug")
print(response.text)
</code></pre>
          <h3>Go</h3>
          <br>
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
        </div>
      </div>
    </div>
    <div class="container text-center" style="padding-bottom:50px;">
      <hr>
      <small class="text-muted">Website developed by <a href="https://oblivionsan.tk/" target="_blank"><b>Oblivion さん</b></a></small>
      <br>
    </div>
  </body>
</html>