
 </head>

  
  




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
					<h4 class="box-title">Add Campaigns</h4>
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

            move_uploaded_file($_FILES["image"]["tmp_name"],"../media/campaigns/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
			$name = $_POST['name'];
   			$description = $_POST['description'];
   			$detail = $_POST['detail'];
			$facebookphoto = $_POST['facebookphoto'];
		   	$title = $_POST['title'];
		   	$video = $_POST['video'];
   			$datee = $_POST['datee'];
   			$impact = $_POST['impact'];
   			$targetfund = $_POST['targetfund'];
   			$fundraised = $_POST['fundraised'];
   			
   			$sequence = $_POST['sequence'];

            $save=mysqli_query($con,"INSERT INTO campaigns (img,name,description,title,video,datee,impact,targetfund,fundraised,detail,facebookphoto,sequence) VALUES 
            	('$img','$name','$description','$title','$video','$datee','$impact','$targetfund','$fundraised', 
            	'$detail','$facebookphoto','$sequence')");
          


           ?>
                <script>
                alert('Successfully Inserted ...');
               window.location.href='campaignsview.php';
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
								<label for="inp-type-1" class="col-sm-3 control-label">Name of Campaigns</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Name" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Date</label>
								<div class="col-sm-6">
									<input type="date" name="datee" class="form-control" id="" placeholder="Enter Date" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Title of Campaigns</label>
								<div class="col-sm-6">
									<input type="text" name="title" class="form-control" id="" placeholder="Enter Title" required="">
								</div>
							</div>

						<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Detail</label>
								<div class="col-sm-6"> 
									
							   <textarea name="detail" id="details" class="form-control ckeditor"></textarea>
							   
							<script>
							 CKEDITOR.replace( 'details', {
							  height: 300,
							  filebrowserUploadUrl: "upload.php"
							 });
							</script>



							<!--		<textarea class="form-control" name="detail" id="textdetail" placeholder="Write your Product Detail"></textarea>  

							    <script>
							        CKEDITOR.replace('textdetail');
							    </script> -->

								</div>
							</div>
 
						<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Requirement</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Requirement"></textarea>  

										<script>
										 CKEDITOR.replace( 'text', {
										  height: 300,
										  filebrowserUploadUrl: "upload.php"
										 });
										</script>

									  

								</div>
							</div>
 
							<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Impact</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="impact" id="text1" placeholder="Write your Product Impact"></textarea>  
									<script>
									 CKEDITOR.replace( 'text1', {
									  height: 300,
									  filebrowserUploadUrl: "upload.php"
									 });
									</script>

								

								</div>
							</div>
					
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Facebook Photo</label>
								<div class="col-sm-6">
									<textarea type="text" name="facebookphoto" class="form-control" id="" placeholder="Enter Facebook Photo" ></textarea>
								</div>
							</div>
								

								<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Video URL</label>
								<div class="col-sm-6">
									<textarea  type="text" name="video" class="form-control" id="" placeholder="Enter Video URL" required=""></textarea>
								</div>
							</div>
								
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Target Fund</label>
								<div class="col-sm-6">
									<input type="text" name="targetfund" class="form-control" id="" placeholder="Enter Target Fund" required="">
								</div>
							</div> 

								<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Fund Raised</label>
								<div class="col-sm-6">
									<input type="text" name="fundraised" class="form-control" id="" placeholder="Enter Fund Raised" required="">
								</div>
							</div>

							 

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Sequence</label>
								<div class="col-sm-6">
									<input type="number" name="sequence" class="form-control" id="" placeholder="Enter Sequence" required="">
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
