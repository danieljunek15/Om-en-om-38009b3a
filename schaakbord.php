<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title> Bit Acedamy </title>
</head>

<body>

<h1 id="kleur">Schaakboard</h1>

<table width="160" cellspacing="0" cellpadding="0" border="1">

    <?php
    for($i=1; $i <=8; $i++){
        echo "<tr>";
        for($I=1; $I <=8; $I++){
        $board = $i + $I;
        //%2 == 0 betekend even als je inplaats van 0 1 gebruikt dan is het oneven.
        if($board %2 == 0){
        echo "<td width=20px height=20px bgcolor=#ffffff></td>";
        }else{
        echo "<td width=20px height=20px bgcolor=#00000></td>";
        }
        }
        echo "</tr>";
    }
        ?>

</tabel>
</body>
</html>