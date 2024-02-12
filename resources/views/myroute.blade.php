<?php 
if (is_numeric($myinput)==false) { 
        echo '<script>';
        echo 'window.history.back();';
        echo '</script>';
        exit();
        }?>
<html>
<head>
  <meta charset="utf-8" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dhurjati&family=Noto+Sans+Linear+A&family=Nova+Square&display=swap" rel="stylesheet">

</head>
<body >
    <?php 
    $multi_x = $myinput;
    echo "<h1>ตารางสูตรคูณแม่  $multi_x </h1>";?>
        <div>
        <?php 
    
    
    $i = 1;
   
    while ($i <= 24) {
        
      echo "$multi_x X $i =";
      echo  $i*$multi_x;
      echo "<br>";
      $i++;
    }
    
    ?>
        </div>
        <br>
        <button onclick="history.back()">Go Back</button>
     <style>
        body {
                background-color: #e9967a;
            }
            h1{
                margin-top: 0px;
                margin-bottom: 10px;
                text-align: center;
                background: linear-gradient(#7BD3EA, #A1EEBD, #F6F7C4, #F6D6D6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            
            div{
                background: linear-gradient(45deg, #756AB6, #AC87C5, #E0AED0, #FFE5E5);
                background-color: coral;
                width: 200px;
                height: 430px;
                border: 1px solid black;
                overflow-y: auto;
                text-align: center;
                margin: 0 auto;
                margin-top: 100px;
            }

            
     </style>

</body>

</html>