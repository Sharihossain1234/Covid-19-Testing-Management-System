
<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=covidtmsdb", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM nagad
 WHERE FullName REGEXP '".$search."' 
 OR FullAddress REGEXP '".$search."' 
 OR	zila  REGEXP '".$search."' 
 OR state REGEXP '".$search."' 
 OR payment REGEXP '".$search."'
 OR testtype REGEXP '".$search."'

 ";
}
else
{
 $query = "
 SELECT * FROM nagad ORDER BY id
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