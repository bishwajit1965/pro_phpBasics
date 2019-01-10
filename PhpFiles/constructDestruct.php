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
                        <h4>Constructor Destructor class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php

                        define("BR", "<br>");
                         
                    class User
                    {
                            
                        public $user ;
                        public $userId ;
                            
                        public function __construct($userName, $userId)
                        {
                            $this->user = $userName;
                            $this->userId = $userId;
                            echo 'User name is : '. $this->user. BR .
                            ' User id : '. $this->userId;
                        }

                        public function __destruct()
                        {
                            unset($this->user);
                            unset($this->userId);
                            // This will print at last outside the body
                            echo 'User name and user id all have been unset';
                        }
                    }

                        $user = 'Bishwajit Paul';
                        $userId = 'A-101';
                        $class_object = new User($user, $userId);

                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>   
    </body>
</html>
