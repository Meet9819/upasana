<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>

<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>


<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Skills</h4>
					<!-- /.box-title -->
					<div class="card-content">
						
<?php
include('db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    
   
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

            move_uploaded_file($_FILES["image"]["tmp_name"],"../media/requirement/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
			$name = $_POST['name'];
   			$catid = $_POST['catid'];


		   	$detail = $_POST['detail'];
		   	$requirement = $_POST['requirement'];
   			$camp = $_POST['camp'];

   			$duration = $_POST['duration'];
   			$timee = $_POST['timee'];
   			$period = $_POST['period'];

   			

            $save=mysqli_query($con,"INSERT INTO requirement 
            	(img,name,catid,detail,requirement,camp,duration,timee,period) VALUES 
            	('$img','$name','$catid','$detail','$requirement','$camp','$duration','$timee','$period')");
          


           ?>
                <script>
                alert('Successfully Inserted ...');
               window.location.href='requirementview.php';
                </script>
                <?php

                             
    }
?>
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 



						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Category ID</label>
								<div class="col-sm-6">
									<select name="catid" id="three" class="form-control">
								  <option>Select Category</option>
								   <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM category");
while($row = mysqli_fetch_array($result))
{
echo '<option value="'.$row['id'].'">' .$row['title'].'</option>';
} 
?>

							</select> 


								</div>
							</div>





 		<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6">
									<input type="file" id="" name="image" required="">
								<p class="help-block">Image should be 3527 x 2372 in pixels</p>
								</div>

								</div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Name of Requirement</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Name" required="">
								</div>
							</div>

	


					
	<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Detail</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="detail" id="text" placeholder="Write your Details"></textarea>  

    <script>
        CKEDITOR.replace('text');
    </script>

								</div>
							</div>
 

<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Requirement</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="requirement" id="text1" placeholder="Write your Requirement"></textarea>  

    <script>
        CKEDITOR.replace('text1');
    </script>

								</div>
							</div>



						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Campaign ID</label>
								<div class="col-sm-6">
									<select name="camp" id="three" class="form-control">
								  <option>Select Campaign</option>
								   <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM campaigns");
while($row = mysqli_fetch_array($result))
{
echo '<option value="'.$row['id'].'">' .$row['name'].'</option>';
} 
?>

							</select> 


								</div>
							</div>




						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Duration</label>
								<div class="col-sm-6">
									<input type="text" name="duration" class="form-control" id="" placeholder="Enter Duration" required="">
								</div>
							</div>
								<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Time</label>
								<div class="col-sm-6">
									<input type="text" name="timee" class="form-control" id="" placeholder="Enter Time" required="">
								</div>
							</div>
									


	<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Period</label>
								<div class="col-sm-6">
									<input type="text" name="period" class="form-control" id="" placeholder="Enter Period" required="">
								</div>
							</div> 	



							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
										 <input class="btn btn-dark btn-sm waves-effect waves-light" type="submit" name="Submit" value="Submit" />

								
								</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>




	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	
<?php include "allscripts.php"; ?>
