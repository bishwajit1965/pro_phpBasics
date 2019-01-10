<!doctype html>
<html class="no-js" lang="">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Object oriented php</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 header-title">
                    <h1><img src="images/oophp.jpg" alt="Php" id="oophpImage">   Object oriented php practice!</h1>
                </div>
            </div>
        	<div class="row">

                    <div class="col-sm-3 sidebar-area">
                        <div class="links-heading">
                           <h4>Class file links </h4>
                        </div>

                        <?php
                        $data = glob('PhpFiles/*.php', GLOB_BRACE);
                        foreach ($data as $file) {
                            echo "<a href='$file'>$file</a>";
                        }
                        ?>
                    </div>
                    <div class="col-sm-9">
                        <div class="row links-heading">
                        <h4>Class instantiated data.</h4>
                        </div>
                        <!-- Code below -->



                        <!-- Code above -->
                    </div>
                </div>
            <?php include_once 'partials/_footer.php'; ?>
        </div>
    </body>
</html>
