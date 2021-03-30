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
					<h4 class="box-title">Edit Skills</h4>
					<!-- /.box-title -->
					<div class="card-content">
						




<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT img,name,catid,detail,requirement,camp,duration,timee,period FROM requirement WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: requirementview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
            $name = $_POST['name'];
            $catid = $_POST['catid'];


            $detail = $_POST['detail'];
            $requirement = $_POST['requirement'];
            $camp = $_POST['camp'];

            $duration = $_POST['duration'];
            $timee = $_POST['timee'];
            $period = $_POST['period'];




        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = '../media/requirement/'; // upload directory 
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

    

$stmt = $DB_con->prepare('UPDATE requirement SET name=:name,img=:img,catid=:catid,detail=:detail,requirement=:requirement,camp=:camp,duration=:duration,timee=:timee,period=:period
    WHERE id=:id');
            $stmt->bindParam(':name',$name);    
            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':catid',$catid);
                $stmt->bindParam(':detail',$detail);
                   $stmt->bindParam(':requirement',$requirement);
                      $stmt->bindParam(':camp',$camp);
                         $stmt->bindParam(':duration',$duration);
                            $stmt->bindParam(':timee',$timee);
                               $stmt->bindParam(':period',$period);

            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='requirementview.php';
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
                                <label for="inp-type-1" class="col-sm-3 control-label">Category ID</label>
                                <div class="col-sm-6">
                                    <select name="catid" id="three" class="form-control">
                                        <option><?php echo $catid; ?>
                                            
                                        </option>
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

									  <img src="../media/requirement/<?php echo $img; ?>" height="70" width="150" />

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
                                <label for="text" class="col-sm-3 control-label">Detail</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="detail" id="text" placeholder="Write your Details"> <?php echo $detail; ?></textarea>  

    <script>
        CKEDITOR.replace('text');
    </script>

                                </div>
                            </div>
 

<div class="form-group">
                                <label for="text" class="col-sm-3 control-label">Requirement</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="requirement" id="text1" placeholder="Write your Requirement"> <?php echo $requirement; ?></textarea>  

    <script>
        CKEDITOR.replace('text1');
    </script>

                                </div>
                            </div>






                        <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Campaign ID</label>
                                <div class="col-sm-6">
                                    <select name="camp" id="three" class="form-control">
                                        <option><?php echo $camp; ?></option>
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
                                    <input type="text" name="duration" class="form-control" id="" placeholder="Enter Duration" required="" value="<?php echo $duration; ?>">
                                </div>
                            </div>
                                <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Time</label>
                                <div class="col-sm-6">
                                    <input type="text" name="timee" class="form-control" id="" placeholder="Enter Time" required="" value="<?php echo $timee; ?>">
                                </div>
                            </div>
                                    


    <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Period</label>
                                <div class="col-sm-6">
                                    <input type="text" name="period" class="form-control" id="" placeholder="Enter Period" required="" value="<?php echo $period; ?>">
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
