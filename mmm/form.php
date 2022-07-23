<html>
<head>
<title>
Sun health care-Covid-19 Test report Generator
</title>
<style>
table
{
color:white;
border-radius:50px;

}
#button
{
background-color:green;
color:white;
height:50px;
width:100px;
border-radius:25px;	
}
body
{
background:white;	
}
h1{
	text-align:center;
}
</style>
</head>
<body>
<h1>Covid-19 Test report Generator</h1>
<br><br><br>
<form action="pdf.php" method="POST">
<table border="0" bgcolor="black" align="center" cellspacing="25">

<tr>
<td>Order No.</td>
<td><input type="text" placeholder="Order No." name="rollno"></td>
</tr>

<tr>
<td>Patient Name</td>
<td><input type="text" placeholder="Name" name="fistname"></td>
</tr>

<tr>
<td>Date of Birth</td>
<td><input type="text" placeholder="Date of birth" name="lastname"></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="text" placeholder="Gender" name="email"></td>
</tr>
<tr>

<td>Mobile No.</td>
<td><input type="text" placeholder="Mobile No." name="test"></td>
</tr>

<td>Govt Issued id</td>
<td><input type="text" placeholder="Govt Issued id" name="govtid"></td>
</tr>

<td>Govt Issued id no</td>
<td><input type="text" placeholder="Govt Issued id" name="govtids"></td>

</tr>

<td>Test type</td>
<td><input type="text" placeholder="Test type" name="type"></td>
</tr>
<td>Result Date</td>
<td><input type="text" placeholder="Result Date" name="date"></td>
</tr>
<td>Test result</td>
<td><input type="text" placeholder="Test result" name="result"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit"></td>
</tr>
</form>
</table>
</body>
</html>


