<?php 

include("connection.php");


$output = "";

$output .= "
  <button class='btn btn-warning my-1 text-white' id='pop-up'><i class='fa fa-user-plus'></i></button>
";

$output .= "
  <table class='table table-bordered table-striped'>
    <tr>
       <th>#</th>
       <th>First Name</th>
       <th>Surname</th>
       <th>Username</th>
       <th>Email</th>
       <th>Gender</th>
       <th>Action</th>

     </tr>
";

$query = "SELECT * FROM tab";
$res = mysqli_query($connect,$query);

if (mysqli_num_rows($res) == 0) {
	$output .= "
        <tr>
          <td colspan='7' class='text-center'>NO DATA FOUND</td>
        </tr>
        </table>
	";
}else{

	while ($row = mysqli_fetch_array($res)) {
		$output .= "
           <tr>
          <td class='text-center'>".$row['id']."</td>
          <td class='text-center'>".$row['firstname']."</td>
          <td class='text-center'>".$row['surname']."</td>
          <td class='text-center'>".$row['username']."</td>
          <td class='text-center'>".$row['email']."</td>
          <td class='text-center'>".$row['gender']."</td>
          <td>
              <button class='btn btn-info edit text-white' id='".$row['id']."'><i class='fa fa-user-edit'></i></button>
              <button class='btn btn-danger delete text-white' id='".$row['id']."'><i class='fa fa-trash-alt'></i></button>
          </td>
        </tr>
	";
	}
	
}






$output .= " 
   </tr>
  </table>
";

echo $output;


 ?>