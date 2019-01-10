<!doctype html>
<html class="no-js" lang="">
    <?php include_once '../partials/_head.php'; ?>
    <body>
        <div class="container">
        <?php include_once '../partials/_header.php'; ?>
            <div class="row">
            <?php include_once '../partials/_sidebar.php'; ?>
                <div class="col-sm-9">
                    <div class="row links-heading">
                        <h4>Load All Files class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php
                    define('BR', '<br>');
                    class LoadAllFiles
                    {
                        public function __construct()
                        {
                            echo 'All the files have been loaded successfully!'.BR;
                        }

                        public function fileNames()
                        {
                            $data = glob('*.php', GLOB_BRACE);
                            $serial = 1;
                            foreach ($data as $file) {
                                echo $serial++.' ) '."<a href='$file'>$file</a>".BR;
                                if ($file == 'Abstract.php') {
                                    echo $file = "<a href='$file'>Abstract class</a>".BR;
                                }
                            }
                        }
                    }

                    $class_object = new LoadAllFiles();

                    echo $class_object->fileNames();

                    ?>
                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php'; ?>
        </div>
    </body>
</html>
