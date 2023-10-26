<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    // <!-- Perulangan -->
    // echo "Ini For <br>";
    // for( $i = 1; $i <= 5; $i++ ){
    //     echo " $i. Helo World! <br> ";
    // }

    // $a = 0;
    // echo "Ini While <br>";
    // while($a < 5) {
    //     echo "$a Helo World! <br>";
    //     $a++;
    // }
    
    // $c = 0;
    // echo "Ini Do-While <br>";
    // do{
    //     echo "$c Helo World! <br>";
    // $c++;
    // } while($c < 5);

    // <!-- Pengkondisian -->

     ?>

    <table border="1" cellpadding="10" cellspacing="0" >
        <!-- 1 -->
        <?php for($i = 1; $i <= 5; $i++) :?>      
            <tr>
                <?php for($j = 1; $j <= 5; $j++) :?>
                    <td> <?= "$i , $j";  ?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor ;?> 
         <!-- 2 -->
        <!-- // for($i = 1; $i <= 5; $i++){
        //     echo "<tr>";
        //     for ($j = 1; $j <= 10; $j++){

        //         echo "<td> $i,$j </td>";
        //     }

        //     echo "</tr>";
        // } -->
    
    </table>
    
</body>
</html>