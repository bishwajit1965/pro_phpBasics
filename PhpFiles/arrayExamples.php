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
                        <h4>Numeric array class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php

                    define('BR', '<br>');

                    class arrayExamples
                    {
                        // Numeric key array example
                        public function numericArrayExample()
                        {
                            echo '<h2>Numeric key array example:</h2>';
                            $numbers = ['1', '2', '3', '4', '5'];
                            $arrayValues = count($numbers);

                            echo '<h4>(a) The first method is:</h4>';
                            foreach ($numbers as $value) {
                                echo 'The numbers are :'.$value.'<br>';
                            }

                            echo '<h4>(b) The second method is:</h4>';
                            echo 'First number is :'.$numbers['0'].BR;
                            echo 'First second is :'.$numbers['1'].BR;
                            echo 'First third is :'.$numbers['2'].BR;
                            echo 'First fourth is :'.$numbers['3'].BR;
                            echo 'First fifth is :'.$numbers['4'].BR;
                        }

                        // Associative array example
                        public function associativeArrayExample()
                        {
                            echo '<h2>Associative array example:</h2>';
                            echo '<h4>(a) The first method is:</h4>';
                            $employees = [
                                'Mohin' => '8000',
                                'Altaf' => '10000',
                                'Robiul' => '1200',
                                'Issaque' => '1300',
                                'Jahingir' => '1400',
                            ];

                            foreach ($employees as $name => $salary) {
                                echo 'Employee name :'.$name.' and his salary is : '.$salary.' taka '.BR;
                            }

                            echo '<h4>(b) The second method is:</h4>';
                            echo 'The salary of Mahin is :'.$employees['Mohin'].' tk'.BR;
                            echo 'The salary of Altaf is :'.$employees['Altaf'].' tk'.BR;
                            echo 'The salary of Robiul is :'.$employees['Robiul'].' tk'.BR;
                            echo 'The salary of Issaque is :'.$employees['Issaque'].' tk'.BR;
                            echo 'The salary of Jahingir is :'.$employees['Jahingir'].' tk'.BR;
                        }

                        public function multiDimensionalArrayExample()
                        {
                            echo '<h2>Multidimentional array example:</h2>';
                            $marks = [
                                'Arpita' => [
                                    'Physics' => '80',
                                    'Chemistry' => '81',
                                    'Math' => '82',
                                    'Biology' => '83',
                                ],
                                'Supti' => [
                                    'Bangla' => '88',
                                    'English' => '67',
                                    'Civics' => '45',
                                    'Sociology' => '66',
                                ],
                                'Pew' => [
                                    'Bangla' => '44',
                                    'English' => '55',
                                    'Civics' => '66',
                                    'Sociology' => '77',
                                ],
                            ];

                            echo '<h4>(a) The first method is:</h4>';
                            echo $marks['Arpita']['Physics'];
                            echo $marks['Supti']['English'];
                            echo '<h4>(b) The second method is:</h4>';
                        }
                    }

                    $arrayExamples = new arrayExamples();
                    $arrayExamples->numericArrayExample();
                    $arrayExamples->associativeArrayExample();
                    $arrayExamples->multiDimensionalArrayExample();
                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php'; ?>
        </div>
    </body>
</html>
