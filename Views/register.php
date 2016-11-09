
<?php
/**
 * This  is a Register page allows  user to  enter details.
 */
echo "please Fill  the details";
?>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
h3 {
	text-align: center;
}
</style>
<body>

<h3> Insert User Values</h3>

<div>
  <form id=  "registerationform"  name="registrationform"  action="/showdetails"  method='post'
accept-charset='UTF-8'>
  <input type="submit" value="show">

</form>

  <form id=  "registerationform"  name="registrationform"  action="/insertvalues"  method='post'
accept-charset='UTF-8'>
    <label for="first_name">First Name</label>
    <input type="text" id="fisrt_name" name="first_name">

    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" name="last_name">

    <label for="Email">Email</label>
	<input type="text" id="Email" name="Email">

	<label for="password"> Password </label>
	<input type="password" id="password" name="password">

   <input type="submit" value="Submit">
  </form>

 </form>
</div>


</body>
</html>
