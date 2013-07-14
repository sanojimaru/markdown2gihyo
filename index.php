
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
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
                <textarea id="markdown-text"  class="span6" style="height: 36em;" placeholder="input markdown"></textarea>
            </div>
            <div class="span6">
                <h3>gihyo</h3>
                <textarea id="gihyo-text" class="span6" style="height: 36em;" placeholder="input gihyo"></textarea>
            </div>
        </div>

    </div> <!-- /container -->
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>
