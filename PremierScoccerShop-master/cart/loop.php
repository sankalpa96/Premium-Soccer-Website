<?php
/**
 * Created by PhpStorm.
 * User: quyentv
 * Date: 3/20/2015
 * Time: 1:56 PM
 */

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Full loop in php</h1>
    <br/>
    <h2>1. While loop in php</h2>
    <?php
        $i = 1;
        echo '<ul>';
        while ($i < 5) {
            echo '<li>'.$i.'</li>';
            $i++;
        };
        echo '</ul>';
    ?>

    <!-- or -->
    <?php $i=1;?>
    <ul>
    <?php while ($i< 5) : ?>
        <li><?php echo $i++;?></li>
    <?php endwhile;?>
    </ul>


    <h2>2. For loop in php</h2>
    <?php
        echo '<ul>';
        for ($i=1; $i<5; $i++) {
            echo '<li>'.$i.'</li>';
        }
        echo '</ul>';
    ?>
    <!-- or -->
    <?php $i = 1; ?>
    <?php echo '<ul>';?>
    <?php for ($i=1; $i<5; $i++): ?>
        <li><?php echo $i;?></li>
    <?php endfor;?>
    <?php echo '</ul>';?>

    <h2>3. Foreach loop in php</h2>
    <?php
        $products = [1,2,3,4];  // by array(1,2,3,4);
        echo '<ul>';
        foreach($products as $item){
            echo '<li>'.$item.'</li>';
        };
        echo '</ul>';
    ?>

    <!-- or -->
    <?php
        $products =  [


        ];
    ?>


</body>
</html>