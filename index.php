<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SVG Boiler</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h1>SVG Boiler</h1>

        <p>This is a quick and dirty demo fo SVG's in practice, hover for CSS animation, <br>if this is required for IE8 etc then click the icon for <a href="http://julian.com/research/velocity/" target="_blank">velocity.js</a> behaviours.</p>

       <p>Ensure PHP short tags are turned off, for the include/inline, see the .htaccess file.</p>
       <p>For accessibility mod the svg to include a title, a role and aria described-by/labelled-by:</p>
       <p><pre>&lt;svg aria-labelledby=&quot;title&quot; role=&quot;img&quot;&gt;&lt;title id=&quot;title&quot;&gt;Three people icon&lt;/title&gt;&lt;/svg&gt;</pre></p>

        <p>
            <div id="peeps"><?php include('img/peeps.svg'); ?></div>
            <div class="fallback"></div>
        </p>


        <h2>References / further reading:</h2>

        <p><a href="http://css-tricks.com/using-svg/" target="_blank">http://css-tricks.com/using-svg/</a><br>
        <a href="http://davidwalsh.name/svg-animation" target="_blank">http://davidwalsh.name/svg-animation</a><br>
        <a href="http://julian.com/research/velocity/" target="_blank">http://julian.com/research/velocity/</a><br>
        <a href="http://www.sitepoint.com/tips-accessible-svg/" target="_blank">http://www.sitepoint.com/tips-accessible-svg/</a></p>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
         <script src="//cdn.jsdelivr.net/velocity/1.1.0/velocity.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
