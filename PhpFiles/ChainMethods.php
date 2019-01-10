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
                        <h4>Master class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php

                    define('BR', '<br>');

                    class ChainMethods
                    {
                        private $cow;
                        private $dog;
                        private $cat;
                        private $total;

                        public function cow($pet_cow)
                        {
                            $this->cow = $pet_cow;

                            return $this;
                        }

                        public function dog($pet_dog)
                        {
                            $this->dog = $pet_dog;

                            return $this;
                        }

                        public function cat($pet_cat)
                        {
                            $this->cat = $pet_cat;

                            return $this;
                        }

                        public function getAll()
                        {
                            $this->total = $this->cow + $this->dog + $this->cat;

                            return $this->total;
                        }
                    }

                    $object = new ChainMethods();

                    // Method chaining
                    echo 'The total number of pets is : '.$object->cow(10)->dog(10)->cat(10)->getAll();

                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php'; ?>
        </div>
    </body>
</html>
