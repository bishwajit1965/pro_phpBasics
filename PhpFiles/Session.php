<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="">
    <?php include_once('../partials/_head.php'); ?>
    <body>
        <div class="container">
        <?php include_once('../partials/_header.php'); ?>
            <div class="row">
                <?php include_once('../partials/_sidebar.php'); ?>
                <div class="col-sm-9">
                    <div class="row links-heading">
                        <h4>MySession class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->
                        <?php

                        define("BR", "<br>");
                        $_SESSION['user_id'] = 22;
                            
                        ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>
    </body>
</html>
