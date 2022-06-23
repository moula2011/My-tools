<?php $calender =json_decode(file_get_contents('calender.json'));?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="padding: 40px; margin: 40px; border:1px solid black;">
        <select name="" id="" style="padding: 14px; ">
            <?php
            echo '<option value="">select month...</option>';
            foreach($calender as $per):
                foreach($per->period as $peri):
                    $period = $peri->month;
                    echo '<option value="'.$period.'">'.$period.'</option>';
                endforeach ; 
            endforeach ; 
        ?> 
        </select>
    </div>
</body>
</html>