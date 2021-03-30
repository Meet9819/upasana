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
					<h4 class="box-title">Edit Event</h4>
					<!-- /.box-title -->
					<div class="card-content">
						




<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT img,title,description,campid,venue,googlemap,startdatee,enddatee,fblink,youtubelink FROM event WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: eventview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
       $campid = $_POST['campid'];
                $title = $_POST['title']; 
                $description = $_POST['description'];


           
            $venue = $_POST['venue'];
            $googlemap = $_POST['googlemap'];
            $startdatee = $_POST['startdatee'];
            $enddatee = $_POST['enddatee'];
            $fblink = $_POST['fblink'];
            $youtubelink = $_POST['youtubelink'];




        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = '../media/event/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            // if no image selected the old image remain as it is.
            $img = $edit_row['img']; // old image from database
        }   
                        
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        {

          


$stmt = $DB_con->prepare('UPDATE event SET img=:img,description=:description,title=:title,campid=:campid,venue=:venue,googlemap=:googlemap,startdatee=:startdatee,enddatee=:enddatee,fblink=:fblink,youtubelink=:youtubelink
    WHERE id=:id');
            $stmt->bindParam(':title',$title);    
            $stmt->bindParam(':img',$img);
             
             $stmt->bindParam(':description',$description);


                $stmt->bindParam(':campid',$campid);
                   $stmt->bindParam(':venue',$venue);
                      $stmt->bindParam(':googlemap',$googlemap);
                         $stmt->bindParam(':startdatee',$startdatee);
                            $stmt->bindParam(':enddatee',$enddatee);
                               $stmt->bindParam(':fblink',$fblink);

                                $stmt->bindParam(':youtubelink',$youtubelink);   

            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='eventview.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    
?>




  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 
 		<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6"> 

									  <img src="../media/campaigns/<?php echo $img; ?>" height="70" width="150" />

  <input type="file" name="user_image" accept="image/*" />

								<p class="help-block">Image should be 3527 x 2372 in pixels</p>
								</div>

								</div>




                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Title of Campaigns</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" id="" placeholder="Enter Title" required="" value="<?php echo $title; ?>">
                                </div>
                            </div>


					
	                       <div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Description"> <?php echo $description; ?></textarea>  

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
                                        <option><?php echo $campid; ?></option>
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
                                    <input type="text" name="venue" class="form-control" id="" placeholder="Enter Venue" required="" value="<?php echo $venue; ?>">
                                </div>
                            </div>
                                    <div class="form-group">
                                <label for="text" class="col-sm-3 control-label">Google Map Address</label>
                                <div class="col-sm-6">
                                    <input type="text" name="googlemap" class="form-control" id="" placeholder="Enter Address" required="" value='<?php echo $googlemap; ?>'>

                                </div>
                            </div>



                                <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Start Date</label>
                                <div class="col-sm-6">
                                    <input type="text" name="startdatee" class="form-control" id="" placeholder="Enter Start Date" required="" value="<?php echo $startdatee; ?>">
                                </div>
                            </div>  <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">End Date</label>
                                <div class="col-sm-6">
                                    <input type="text" name="enddatee" class="form-control" id="" placeholder="Enter End Date" required="" value="<?php echo $enddatee; ?>">
                                </div>
                            </div>

 

                             <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">FB Link</label>
                                <div class="col-sm-6">
                                    <textarea  type="text" name="fblink" class="form-control" id="" placeholder="Enter FB Link" required=""  > 
                                        <?php echo $fblink; ?> </textarea>
                                </div>
                            </div>  <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Youtube Link</label>
                                <div class="col-sm-6">
                                      <textarea  type="text" name="youtubelink" class="form-control" id="" placeholder="Enter Youtube Link" required="" > 
                                        <?php echo $youtubelink; ?> </textarea>
                                </div>
                            </div>



							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
									   <input class="btn btn-dark btn-sm waves-effect waves-light" type="submit"  name="btn_save_updates" value="Update" /> 

								
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
