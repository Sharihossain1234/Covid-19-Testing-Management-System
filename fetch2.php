
<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=covidtmsdb", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM tbl_oxizen
 WHERE Name REGEXP '".$search."' 
 OR Address REGEXP '".$search."' 
 OR City REGEXP '".$search."' 
 OR PostalCode REGEXP '".$search."' 
 OR Country REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM tbl_oxizen ORDER BY id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);



?>