<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <br/>

        <?php
            $arr = array();

            $arr = array('test1','test2','test3','test4');

            echo $arr[2];
            echo "<br>";

            for($i=0; $i<=3; $i++ ){
                echo $arr[$i];
                if($i<=2){
                    echo " - ";
                }
            }
            foreach($arr as $value){
                // echo $value.' - ';
            }
            echo "<br>";

            $a[0] = 1;
            $a[1] = 3;
            $a[2] = 5;
            $b = array();
            echo $result = count($b);

        echo "<br>";
        for ($i=0; $i<=10;$i++);
        {echo $i;}

        echo "<br>";
        $a = ''; if ( $a ){ echo 'a'; } else { echo 'b'; }

        echo "<br>";

        $test2 = 'abc';
        if($test2 !== ''){
            echo 'ok';
        } else { echo  'not ok';}

        echo "<br>";

        echo $_SERVER["REMOTE_ADDR"];

        echo "<br>";

        function mySum($num1, $num2 = 0){
            return $sum = $num1+$num2;
        }

        echo mySum(30);

        ?>


        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
