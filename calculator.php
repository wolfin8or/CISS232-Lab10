<?php
        if (isset($_POST["credithours"]) && is_numeric($_POST["credithours"]))
        {
            $amount="";
            $per_credit=0;
            if ($_POST["residency"]=="1"){
                if (intval($_POST["credithours"])>=13 && intval($_POST["credithours"]) <= 18){
                    $amount="$1,872.52";
                } else {
                    $per_credit=144.04;
                    $amount = strval(intval($_POST["credithours"])*$per_credit);
                }
            } elseif ($_POST["residency"]=="2"){
                $residency = "Out of County";
                if (intval($_POST["credithours"])>=13 && intval($_POST["credithours"]) <= 18){
                    $amount="$2,199.86";
                } else {
                    $per_credit=169.22;
                    $amount = strval(intval($_POST["credithours"])*$per_credit);
                }
            } else {
                if (intval($_POST["credithours"])>=13 && intval($_POST["credithours"]) <= 18){
                    $amount="$4,170.27";

                } else {
                    $per_credit=320.79;
                    $amount = strval(intval($_POST["credithours"])*$per_credit);
                }
            }
            
        }

        echo "<p>Your estimated tuition amount is: " + $amount + ".</p>";
?>