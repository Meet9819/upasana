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
					<h4 class="box-title">Edit Campaigns</h4>
					<!-- /.box-title -->
					<div class="card-content">
						




<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT img,name,description,title,facebookphoto, video,datee,impact,targetfund,fundraised,detail,sequence FROM campaigns WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: campaignsview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $detail = $_POST['detail'];
            $title = $_POST['title'];
            $video = $_POST['video'];
            $facebookphoto = $_POST['facebookphoto'];
            $datee = $_POST['datee'];
            $impact = $_POST['impact'];
            $targetfund = $_POST['targetfund'];
            $fundraised = $_POST['fundraised']; 

            $sequence = $_POST['sequence']; 


        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = '../media/campaigns/'; // upload directory 
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
            $stmt = $DB_con->prepare('UPDATE campaigns SET name=:name,img=:img,description=:description,title=:title,video=:video,impact=:impact,targetfund=:targetfund,fundraised=:fundraised,datee=:datee,detail=:detail,sequence=:sequence WHERE id=:id');
            $stmt->bindParam(':name',$name);    
            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':description',$description);
            $stmt->bindParam(':detail',$detail);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':video',$video);
            $stmt->bindParam(':impact',$impact);
            $stmt->bindParam(':targetfund',$targetfund);
            $stmt->bindParam(':fundraised',$fundraised);
            $stmt->bindParam(':datee',$datee);
             $stmt->bindParam(':sequence',$sequence);
            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='campaignsview.php';
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
								<label for="inp-type-1" class="col-sm-3 control-label">Name of Campaigns</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Title"  value="<?php echo $name; ?>">
								</div>
							</div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Date</label>
                                <div class="col-sm-6">
                                    <input type="date" name="datee" class="form-control" id="" placeholder="Enter Date" required="" value="<?php echo $datee; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Title of Campaigns</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" id="" placeholder="Enter Title" required="" value="<?php echo $title; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text" class="col-sm-3 control-label">Detail</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="detail" id="textdetail" placeholder="Write your Product Detail"> <?php echo $detail; ?></textarea>  


                           <script>
                             CKEDITOR.replace( 'textdetail', {
                              height: 300,
                              filebrowserUploadUrl: "upload.php"
                             });
                            </script>

                                   
                                </div>
                            </div>
 
					
	                       <div class="form-group">
								<label for="text" class="col-sm-3 control-label">Requirement</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Requirement"> <?php echo $description; ?></textarea>  

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
                                    <textarea class="form-control" name="impact" id="text1" placeholder="Write your Product Impact"><?php echo $impact; ?></textarea>  
                                      <script>
                             CKEDITOR.replace( 'text1', {
                              height: 300,
                              filebrowserUploadUrl: "upload.php"
                             });
                            </script>
                            
                                 

                                </div>
                            </div> 

                              <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Facebook Photo Link</label>
                                <div class="col-sm-6">
                                    <textarea type="text" name="facebookphoto" class="form-control" id="" placeholder="Enter Video URL" required="" 
                                    ><?php echo $facebookphoto; ?></textarea>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Youtube Video URL</label>
                                <div class="col-sm-6">
                                    <textarea type="text" name="video" class="form-control" id="" placeholder="Enter Video URL" required="" > 
                                        <?php echo $video; ?> </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Target Fund</label>
                                <div class="col-sm-6">
                                    <input type="text" name="targetfund" class="form-control" id="" placeholder="Enter Target Fund" required="" value="<?php echo $targetfund; ?>">
                                </div>
                            </div>

                              <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Fund Raised</label>
                                <div class="col-sm-6">
                                    <input type="text" name="fundraised" class="form-control" id="" placeholder="Enter Fund Raised" required="" value="<?php echo $fundraised; ?>">
                                </div>
                            </div> 

                             <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Sequence</label>
                                <div class="col-sm-6">
                                    <input type="number" name="sequence" class="form-control" id="" placeholder="Enter Sequence" required="" value="<?php echo $sequence; ?>">
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
