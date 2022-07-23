<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud Operation</title>
	
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="">

	<div class="pop-up-form">
		<div class="overlay" id="overlay1">
			<button class="btn text-white close" id=""><i class='fa fa-times'></i></button>
			<div class="col-md-12">
				<div class="row d-flex justify-content-center">

					<div class="add_new_user col-md-4 bg-white my-5" style="margin: 10px;border-radius: 10px;">
				<form method="post" class="form">
					<h4 class="text-center ">Add New User</h4>
					<h4 class="text-center" id="addresult"></h4>
					<label>First Name</label>
					<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Firstname" autocomplete="off">

					<label>Surname</label>
					<input type="text" name="sname" id="sname" class="form-control" placeholder="Enter Firstname" autocomplete="off">

					<label>Username</label>
					<input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Firstname" autocomplete="off">

					<label>Email</label>
					<input type="text" name="email" id="email" class="form-control" placeholder="Enter Firstname" autocomplete="off">

					<label>Gender</label>
					<select name="gender" class="form-control">
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					
             <input type="submit" name="add" class="btn btn-warning my-3 change" id="add" value="Add New User">
					
				</form>
			      </div>

				</div>
			</div>
		</div>


		<div class="overlay" id="overlay2">
			<button class="btn text-white close" id=""><i class='fa fa-times'></i></button>
			<div class="col-md-12">
				<div class="row d-flex justify-content-center">

					<div class="add_new_user col-md-4 bg-white my-5" style="margin: 10px;border-radius: 10px;">
				<form method="post" class="forms">
					<h4 class="text-center " id="t">Edit User Details</h4>
					<h4 class="text-center" id="addresult2"></h4>
					<label>First Name</label>
					<input type="text" name="fname" id="fname" class="form-control fname" placeholder="Enter Firstname" autocomplete="off">

					<label>Surname</label>
					<input type="text" name="sname" id="sname" class="form-control sname" placeholder="Enter Firstname" autocomplete="off">

					<label>Username</label>
					<input type="text" name="uname" id="uname" class="form-control uname" placeholder="Enter Firstname" autocomplete="off">

					<label>Email</label>
					<input type="text" name="email" id="email" class="form-control email" placeholder="Enter Firstname" autocomplete="off">

					<label>Gender</label>
					<select name="gender" class="form-control ">
						<option value="" class="gender">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				 <input type="hidden" name="id" class="hidden" value="">
             <input type="submit" name="add" class="btn btn-info my-3 edit_user" id="add" value="Edit User">
					
				</form>
			      </div>

				</div>
			</div>
		</div>



	</div>

	<div class="container">
		<div class="col-md-10">
			<h2 class="text-center my-2">Crud Operation</h2>
			<div class="show_crud my-5 mx-5"></div>
		</div>
	</div>











<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			var id = 0;
              show_crud();
             function show_crud(){

             	$.ajax({
                  method: "POST",
                  url:"show_crud.php",
                  success:function(data){
                  	$(".show_crud").html(data);

                  }
             	});
             }


             $(".close").click(function(){
                $(".overlay").fadeOut();
                	$(".gender").text("Selete Gender");
                  $(".gender").val("");
             });

             
             $(document).on("click","#pop-up",function(){
                $("#overlay1").fadeIn();
               

             });

             $("#add").click(function(e){
                  e.preventDefault();

                  $.ajax({
                    method:"POST",
                    url: "add_new.php",
                    data: $(".form").serialize(),
                    success:function(data){
                    	$("#addresult").html(data);
                    	show_crud();
                    }
                  });
             });


             $(document).on("click",".delete",function(){
               var id  = $(this).attr("id");
           

                if (confirm("Do you want to delete this user")) {
                	 $.ajax({
                    method:"POST",
                    url: "delete_user.php",
                    data: {id:id},
                    success:function(data){
                     alert("You have successfully Delete User With ID:"+id+"");
                    	show_crud();
                    }
                  });
                	}else{

                	}


             });



             $(document).on("click",".edit",function(){
                id = $(this).attr("id");
                $("#overlay2").fadeIn();

                  $(".hidden").val(id);
                  
                 $.ajax({
                    method:"POST",
                    url: "load_edit_user.php",
                    data: {id:id},
                   dataType:"JSON",
                    success:function(data){
                    	$(".gender").text(data.gender);
                     $(".gender").val(data.gender);
                     $(".fname").val(data.fname);
                     $(".sname").val(data.sname);
                     $(".uname").val(data.uname);
                     $(".email").val(data.email);

                    	
                    	
                    }
                  });

             });


              $(".edit_user").click(function(e){
                  e.preventDefault();
                  
                 
                 
              $.ajax({
                    method:"POST",
                    url: "edit_user.php",
                    data: $(".forms").serialize(),
                    success:function(data){
                    	show_crud();
                    	//alert("mm");
                    }
                  });

                 
             });



             
		});

   

	</script>

</body>
</html>