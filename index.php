<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator</title>

    <style type="text/css">
        div {margin-bottom:5px;}
        div span {display: inline-block; width:90px; float; }
    </style>
    
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $num1 = (int) $_POST['num1'];
            $num2 = (int) $_POST['num2'];

            if(isset($_POST['add_btn']))
            {
                $ans = $num1 + $num2;
                echo '<p> The sum is: '.$ans.'</p>';
            }
            elseif (isset($_POST['subtract_btn']))
            {
                $ans = $num1 - $num2;
                echo '<p> The difference is: '.$ans.'</p>';
            }
        }
    ?>
    
    <form action="" method="post">
        <div><span>Number 1:</span> <input type="text" name="num1"> </div>
        <div><span>Number 2:</span> <input type="text" name="num2"> </div>

        <div class="buttons">
            <input type="submit" name="add_btn" value="Add">
            <input type="submit" name="subtract_btn" value="Subtract">
        </div>
    </form>


</body>
</html>