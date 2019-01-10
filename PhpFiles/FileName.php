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
                        <h4>File Name class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php

                    define("BR", "<br>");
                         
                    class FileName
                    {

                        public function title()
                        {
                            $path = $_SERVER['SCRIPT_FILENAME'];
                            // If .php extension added file extension Will be hidden
                            $title = basename($path, '.php');
                            // If .php extension is notadded file extension Will be hidden
                            $title = basename($path);
                            if ($title == 'FileName') {
                                $title = 'home';
                            } elseif ($title == 'contact') {
                                $title = 'contact';
                            } elseif ($title == 'testimonials') {
                                $title = 'testimonials';
                            }
                            return $title = ucwords($title);
                        }
                    }
     
                    $class_object = new FileName();
                    
                    echo $class_object->title();
                         
                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>   
    </body>
</html>
