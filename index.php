<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Turks and Caicos - Williams Family 2016">
    <meta name="author" content="Davis">
    <title>Turks and Caicos - Williams Family 2016</title>

    <meta property="og:title" content="Turks and Caicos 2016">
    <meta property="og:image" content="http://daviseford.com/turks_2016/img/day1/thumb/image001.jpg"/>
    <meta property="og:site_name" content="daviseford.com">
    <meta property="og:url" content="http://daviseford.com/turks_2016/index.php">
    <meta property="og:description"
          content="Pictures from Turks and Caicos Family vacation, January 2016. These pictures are downloadable.">
    <meta property="og:type" content="website">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <!-- Images Loaded and Masonry -->
    <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.0/imagesloaded.pkgd.min.js"></script>

    <style>
        .item {
            width: 200px;
            float: left;
            margin-bottom: 6px;
        }

        .item img {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Day 1
                <small>Click for full sized images (warning: large)</small>
            </h1>
        </div>

        <div class="col-md-12">


            <div class="grid">
                <?php
                $photoCount = 60;
                for ($i = 1; $i < $photoCount; $i++) {
                    echo '<div class="item"> <a href="img/day1/Photo-' . $i . '.jpg" target="_blank"> <img src="img/day1/thumb/Photo-' . $i . '.jpg"/> </a> </div> ';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="row clearfix"></div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
            <a href="http://daviseford.com/turks_2016/img/day1/day1.zip" class="btn btn-lg btn-primary"
               onClick="ga('send', 'event', { eventCategory: 'download_button', eventAction: 'day1_download', eventLabel: 'clicked'});"><span
                    class="glyphicon glyphicon-cloud-download"></span> Download Day1 (577mb)</a>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<script>
    $(document).ready(function () {

        var $grid = $('.grid').imagesLoaded(function () {
            // init Masonry after all images have loaded
            $grid.masonry({
                itemSelector: '.item',
                columnWidth: 200,
                gutter: 6
            });
        });

    });
</script>

<!-- Google Analytics -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-55820654-2', 'auto');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');
</script>


</body>
</html>