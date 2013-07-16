<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>markdown2gihyo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-15697684-9', 'azurewebsites.net');
      ga('send', 'pageview');
    </script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="/">markdown2gihyo</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="span6">
                <h3>markdown</h3>
                <textarea id="markdown-text" class="span6" style="height: 36em;" placeholder="input markdown"></textarea>
                <button id="btn-preview" class="btn">Preview</button>
                <button id="btn-convert" class="btn btn-primary">Convert</button>
            </div>
            <div class="span6">
                <div id="preview">
                    <h3>preview</h3>
                    <p id="preview-text" class="well"></p>
                </div>
                <div id="gihyo-output">
                    <h3>gihyo</h3>
                    <textarea id="gihyo-text" class="span6" style="height: 36em;" placeholder="input gihyo"></textarea>
                </div>
            </div>
        </div>

    </div> <!-- /container -->
    <script src="js/jquery-2.0.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="js/convert.js"></script>
</body>
</html>
