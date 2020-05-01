<!DOCTYPE html>
<html lang="en">
<head>
<title>Lorain County Community College</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="lab_8.css">
</head>
<body>
<div class="topnav">
  <a href="index.html">Home</a>
  <a class="active" href="#tuitionchart">Tuition Chart</a>
  <a href="tuitioncalc.php">Tuition Calculator</a>
</div> <!-- end of navbar div -->

<img id="headerimage" src="Pictures/lorainloft.jpg" alt="Image of student studying in Lorain County Community College's loft">

<div id="chartdiv">

<h1 style="text-align: center; color: #002c5f;">Tuition Chart</h1>
<table class="tuitionchart">
  <tr>
    <th>Credit Hours</th>
    <th>Lorain County Resident</th>
    <th>Out-Of-County Resident</th>
    <th>Out-Of-State Resident</th>
  </tr>
    <?php 
        $lor = 144.04;
        $ooc = 169.22;
        $oos = 320.79;
        $lors = 1872.52;
        $oocs = 2199.86;
        $ooss = 4170.27;
        for ($credits = 1; $credits <= 22; $credits++){
            if ($credits >= 13 && $credits <= 18){
                // use LORS, OOCS, OOSS variables
    ?>
                <tr>
                    <td data-th="credits"><?php echo number_format($credits); ?></td>
                    <td data-th="lorain">$<?php echo number_format($lors,2,".", ",") ; ?></td>
                    <td data-th="outofcounty">$<?php echo number_format($oocs,2,".",","); ?></td>
                    <td data-th="outofstate">$<?php echo number_format($ooss,2,".",","); ?></td>
                </tr>
    <?php
            } else {
                // use LOR, OOC, OOS variables
    ?>
                <tr>
                    <td data-th="credits"><?php echo number_format($credits); ?></td>
                    <td data-th="lorain">$<?php echo number_format($credits * $lor,2,".",","); ?></td>
                    <td data-th="outofcounty">$<?php echo number_format($credits * $ooc,2,".",","); ?></td>
                    <td data-th="outofstate">$<?php echo number_format($credits * $oos,2,".",","); ?></td>
                </tr>
    <?php
            }
        }
    ?>
</table>
    
</div>
    
    
<footer>
    
    <p>Copyright 2020 - Lorain County Community College</p>
    
</footer>
</body>
</html>
