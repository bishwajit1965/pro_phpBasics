<!doctype html>
<html class="no-js" lang="">
    <?php include_once('../partials/_head.php'); ?>
    <body>
        <div class="container">
        <?php include_once('../partials/_header.php'); ?>
            <div class="row">
             <?php include_once('../partials/_sidebar.php'); ?>
                <div class="col-sm-9">
                    <div class="">
                        <div class="row links-heading">
                            <h4>Typehinting : <small><?php echo __FILE__; ?> </small></h4>
                        </div>
                    </div>

                    <div class="code-result">
                    <!-- Code below -->

                    <?php
                    define("BR", "<br>");

                    class Typehint
                    {

                        public $price;
                        public $writers;
                        /**
                         * [price description]
                         * @param  int $price [Typehinted as integer]
                         * @return [type] [Value other than integer will display eror]
                         */
                        public function price(int $price)
                        {
                            $this->price = $price;
                            return 'The price of the book is: '. $this->price. '.00 Tk'.BR;
                        }
                        /**
                         * [persons description]
                         * @param  array  $names [Typehinted as array]
                         * @return [type] [Value other than array will display eror]
                         */
                        public function persons(array $names)
                        {
                            $this->writers = $names;
                            return $this->writers;
                        }
                    }

                    $typehint = new Typehint;
                    echo $typehint->price(50);

                    $data = $typehint->persons(["Bishwajit Paul ", " Pew Paul", " Arpita Paul"]);
                    foreach ($data as $value) {
                        echo $value;
                    }

                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>
    </body>
</html>
