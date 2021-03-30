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
					<h4 class="box-title">Add Blogs</h4>
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

            move_uploaded_file($_FILES["image"]["tmp_name"],"../media/blog/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
			$campid = $_POST['campid'];
   				$title = $_POST['title']; 
   				$description = $_POST['description'];


		   
		   	$video = $_POST['video'];
		   
		   	$fb = $_POST['fb'];
   		

            $save=mysqli_query($con,"INSERT INTO blog (img,title,description,campid,video,fb) VALUES 
            	('$img','$title','$description','$campid','$video','$fb')");
          


           ?>
                <script>
                alert('Successfully Inserted ...');
               window.location.href='blogview.php';
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
								<label for="inp-type-1" class="col-sm-3 control-label">Title of Blogs</label>
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
									<input type="text" name="campid" class="form-control" id="" placeholder="Enter Campaigns ID" required="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Video</label>
								<div class="col-sm-6">
									  <textarea  type="text" name="video" class="form-control" id="" placeholder="Enter Video" required=""></textarea>
								</div>
							</div>	

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">FB</label>
								<div class="col-sm-6">
								  <textarea  type="text" name="fb" class="form-control" id="" placeholder="Enter FB" required=""></textarea>
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
