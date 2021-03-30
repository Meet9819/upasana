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
					<h4 class="box-title">Add Events</h4>
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

            move_uploaded_file($_FILES["image"]["tmp_name"],"../media/event/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
			$campid = $_POST['campid'];
   				$title = $_POST['title']; 
   				$description = $_POST['description'];


		   
		   	$venue = $_POST['venue'];
   			$googlemap = $_POST['googlemap'];
   			$startdatee = $_POST['startdatee'];
   			$enddatee = $_POST['enddatee'];
   			$fblink = $_POST['fblink'];
   			$youtubelink = $_POST['youtubelink'];

            $save=mysqli_query($con,"INSERT INTO event (img,title,description,campid,venue,googlemap,startdatee,enddatee,fblink,youtubelink) VALUES 
            	('$img','$title','$description','$campid','$venue','$googlemap','$startdatee','$enddatee','$fblink','$youtubelink')");
          


           ?>
                <script>
                alert('Successfully Inserted ...');
               window.location.href='eventview.php';
                </script>
                <?php

                             
    }
?>
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 
 		<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6">
									<input type="file" id="" name="image" required="">
								<p class="help-block">Image should be 3527 x 2372 in pixels</p>
								</div>

								</div>


					

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Title of Campaigns</label>
								<div class="col-sm-6">
									<input type="text" name="title" class="form-control" id="" placeholder="Enter Title" required="">
								</div>
							</div>

					
							<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Description"></textarea>  

								     <script>
                             CKEDITOR.replace( 'text', {
                              height: 300,
                              filebrowserUploadUrl: "upload.php"
                             });
                            </script>

								</div>
							</div>
 





						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Campaigns ID</label>
								<div class="col-sm-6">
									<select name="campid" id="three" class="form-control">
								  <option>Select Campaigns</option>
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
								<label for="inp-type-1" class="col-sm-3 control-label">Venue</label>
								<div class="col-sm-6">
									<input type="text" name="venue" class="form-control" id="" placeholder="Enter Venue" required="">
								</div>
							</div>
									<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Google Map Address</label>
								<div class="col-sm-6">
									<input type="text" name="googlemap" class="form-control" id="" placeholder="Enter Address" required="">

								</div>
							</div>



							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Start Date</label>
								<div class="col-sm-6">
									<input type="date" name="startdatee" class="form-control" id="" placeholder="Enter Start Date" required="">
								</div>
							</div> 	<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">End Date</label>
								<div class="col-sm-6">
									<input type="date" name="enddatee" class="form-control" id="" placeholder="Enter End Date" required="">
								</div>
							</div>

 

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">FB Link</label>
								<div class="col-sm-6">
									  <textarea  type="text" name="fblink" class="form-control" id="" placeholder="Enter FB Link" required=""></textarea>
								</div>
							</div> 	<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Youtube Link</label>
								<div class="col-sm-6">
									  <textarea  type="text" name="youtubelink" class="form-control" id="" placeholder="Enter Youtube Link" required=""> </textarea>
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
