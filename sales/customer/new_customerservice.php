<!DOCTYPE html>
<html>
<head>
	<title>Add New Service</title>
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

  <!--main div-->
<div class="newvehical">
    <div class="hedder">
        <h3>ADD NEW SERVICE</h3>
    </div>
<form action="new_customerserviceadddata.php" method="post">

<!-- customerdetails-->
<div class="mainone">
    <div class="left">
<div class="inputa">
    
  <label for="customerid"></label>
  <input type="customerid" id="customerid" name="customerid" placeholder="CustomerID">
</div>
<div class="inputa">
  <label for="cusname"></label>
  <input type="text" id="cusname" name="cusname" placeholder="Customername" required="">
</div>

<div class="inputa">
  <label for="cuscontact"></label>
  <input type="text" id="cuscontact" name="cuscontact" placeholder="customercontact">
</div>
<div class="inputa">
  <label for="year"></label>
  <input type="text" id="year" name="year" placeholder="production year">
 </div>
</div>
<div class="right">
 <div class="inputa">
  <label for="vehiclenumber"></label>
  <input type="text" id="vehiclenumber" name="vehiclenumber" placeholder="vehiclenumber">
</div>
<div class="inputa">
  <label for="vehicletype"></label>
  <input type="text" id="vehicletype" name="vehicletype" placeholder="vehicletype">
</div>
<div class="inputa">
    <label for="milage"></label>
    <!--servicedetails-->
    <input type="text" id="milage" name="milage" placeholder="milage">
  </div>
  <div class="inputa">
    <label for="service_type"></label>
    <input type="text" id="servicetype" name="service_type" placeholder="servicetype">
  </div>
</div>
</div>
<div class="maintwo">
    <div class="b_left">
    <div class="inputb">
        <label for="brand">Brand</label><br>
        <select class="select" name="brand" id="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
        </select>
      </div>
<div class="inputb">
  <label for="model">Model</label>
  <select class="select" name="model" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
  </select>
</div>
</div>

<div class="b_right">
<div class="inputb">

  <label for="bodytype">Bodytype</label>

  <select class="select" name="bodytype" id="bodytype">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
  

</div>


<!--employerdetails-->
<div class="inputb">
  <label for="sectionalhead">Sectionalhead</label>
  <select class="select" name="sectionalhead" id="sectionalhead">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</div>
</div>

<div class="bb_right">
<!--employerdetails-->
  <div class="inputb">
  <label for="employer">Employer</label><br>
  <select class="select" style="width: 60%;" name="employer" id="employer">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select> </style>
</div>


 <div class="submit">
  <input type="submit" value="Submit" name="submit"  >
</div>
</div>
</div>
</form>
</div>
</body>
</html>