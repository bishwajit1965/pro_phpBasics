<?php
   session_start();

if (isset($_SESSION['counter'])) {
    ++$_SESSION['counter'];
} else {
    $_SESSION['counter'] = 1;
}

   $msg = 'You have visited this page '.$_SESSION['counter'];
   $msg .= 'in this session.';
?>
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

                    class Myarrays
                    {
                        public $people;

                        public function Onearray()
                        {
                            echo ' <h4>(1) Use of in_array() function</h4>';
                            // Use of in_array() function
                            $people = ['Arpita', 'Supti', 'Pew', 'Runu'];
                            if (in_array('Arpita', $people, true)) {
                                echo 'Match found in the array!';
                            } else {
                                echo 'No match is available here in the array!';
                            }

                            echo '<h4>(2) Use of array_unique() function</h4>';
                            // Use of array_unique() function
                            $names = ['Pew', 'Arpita', 'Runu', 'Supti', 'Runu'];
                            echo '<pre>',print_r(array_unique($names)),'</pre>';

                            echo ' <h4>(3) Use of array_replace() function</h4>';
                            // Use of array_replace() function
                            $arrayOne = ['Bengali', 'English', 'Math'];
                            $arrayTwo = ['Geography', 'Chemistry', 'Physics'];
                            echo '<pre>',print_r(array_replace($arrayOne, $arrayTwo)),'</pre>';

                            echo ' <h4>(4) Use of array_reverse() function</h4>';
                            // Use of array_reverse() function
                            $people = ['Apple', 'Banana', 'Guava', 'Orange'];
                            $data = count($people);
                            foreach ($people as $value) {
                                echo $value.' , ';
                            }
                            echo '<pre>',print_r(array_reverse($people)),'</pre>';
                            // Array chunk
                            echo ' <h4>(5) Use of array_chunk() function</h4>';
                            $names = ['Bangladesh', 'India', 'Malayasia', 'Thailand', 'Singapore', 'Australia', 'Japan', 'Korea'];
                            // $names = count($names);
                            echo '<pre>', print_r(array_chunk($names, 2)), '</pre>';

                            //array_change_key_case()
                            echo ' <h4>(6) Use of array_change_key_case() function</h4>';
                            $names = ['Bangladesh' => '100', 'India' => '300', 'Malayasia' => '300', 'Thailand' => '600', 'Singapore' => '500', 'Australia' => '400', 'Japan' => '600', 'Korea' => '700'];
                            echo '<pre>', print_r(array_change_key_case($names, CASE_UPPER)), '</pre>';
                        }

                        public function arrayTwo()
                        {
                            $fruits = ['apple' => 'red', 'mango' => 'yellow'];
                            $data = array_key_exists('apple', $fruits);
                            print_r($fruits);
                        }
                    }

                    $class_object = new Myarrays();
                    $class_object->Onearray();
                    $class_object->arrayTwo();
                    ?>
                        <?php  echo  $msg; ?>
                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php'; ?>
        </div>
    </body>
</html>
