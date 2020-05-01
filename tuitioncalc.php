<!DOCTYPE html>
<html lang="en">
<head>
<title>Lorain County Community College</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="lab_8.css">
</head>
    
<script>
function calculate(){
    
    var output = document.getElementById("output");
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.open("POST", "calculator.php");
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send();
    
    xmlhttp.onreadystatechange = function() {
        if (this.onreadystatechange === 4 && this.status === 200){
            display.innerHTML = this.responseText;
        }
        
        else {
            display.innerHTML = "Loading...";
        }
    }
    
    
}   
    
    
</script>    

<body>
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="tuitionchart.php">Tuition Chart</a>
  <a class="active" href="#tuitioncalc">Tuition Calculator</a>
</div> <!-- end of navbar div -->

<img id="headerimage" src="Pictures/lorainloft.jpg" alt="Image of student studying in Lorain County Community College's loft">

<div id="calcdiv">

               <h1>Tuition Calculator</h1>
    
              <p>Lorain County Community College works to provide an affordable education for Lorain County residents as well as outside residents so that everyone can get the education that they want.  The tuition is of the lowest in Northeast Ohio and does not sacrifice the quality of education for the affordability.</p>

              <p>Check out the tuition calculator below to determine what your predicted cost of college would be.</p>

              <form>
                  <label>Select Your Residency</label>
                  <select id="residency" name="residency">
                      <option value="1">Lorain County Resident</option>
                      <option value="2">Out-Of-County Resident</option>
                      <option value="3">Out-Of-State Resident</option>
                  </select>

                  <br><br>

                  <label>Enter the amount of credit hours taking:</label>
                  <input type="number" id="credithours" name="credithours" min="1" max="19">
                  <!-- Register for 13-18 Credits and only pay for 13 -->

                  <br><br>

                  <input type="submit" onclick=calculate()>
              </form>
    
              <div id="output"><p></p></div>
</div>
    
    
<footer>
    
    <p>Copyright 2020 - Lorain County Community College</p>
    
</footer>
</body>
</html>
