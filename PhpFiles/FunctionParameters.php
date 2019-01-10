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
                    class FunctionParameters
                    {
                        public $people;
                        public $name;
                        public $address;
                        public $phone;

                        public function parameters($people = [])
                        {
                        }

                        public function dataMeasure($name, $address, $phone = [])
                        {
                            $this->name = $name;
                            $this->address = $address;
                            $this->phone = $phone;
                            echo $this->name.'<br>'.$this->address.'<br>';
                        }
                    }

                    $object = new FunctionParameters();

                    $object->parameters($people = [' a book ', ' a ball ', ' a cat ', 'an elephant', 'a tiger']);
                    foreach ($people as $value) {
                        echo $value.BR;
                    }

                    echo $object->dataMeasure('Pew', 'Jessore', $phone = ['01712809279', '01712809278', '01712809275', '01712809277']);
                    if (is_array($phone)) {
                        $i = 1;
                        foreach ($phone as $value) {
                            echo $i++.' ) '.'Phone no is : '.$value.BR;
                        }
                    } else {
                        echo 'Not of array tupe';
                    }
                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php'; ?>
        </div>
    </body>
</html>
