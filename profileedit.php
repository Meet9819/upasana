<?php
session_start();
if(!isset($_SESSION["userSession"])){
header("Location: login.php");
exit(); }
?>

    <?php
include 'logindb.php';
$query = $db->query("SELECT * FROM tbl_users WHERE userID = ".$_SESSION['userSession']);

$custRow = $query->fetch_assoc();
?>
       

       <?php include "allcss.php"; ?> 
<body>
   
 <?php include "header2.php"; ?>   
    
    <section class="row page-header">
        <div class="container">
            <h4>Edit Profile</h4>
        </div>
    </section>


    
     <section class="row contact-content page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="contact_page_title">Update your profile to find new opportunities</h3>
                    <p class="contact_page_para">Basic Profile Information</p>
                    


     <?php

    error_reporting(0);

    require_once 'admin/dbconfig.php';


    if(isset($_POST['btn_save_updates']))
    {
   $userID = $_POST['userID'];
       $userName = $_POST['userName'];
        
         $mobile = $_POST['mobile'];
          $address = $_POST['address'];
          

          $aboutme = $_POST['aboutme'];
          $lastname = $_POST['lastname'];
          $img = $_POST['img'];
          $nationality = $_POST['nationality'];
          $age = $_POST['age'];
          $gender = $_POST['gender'];
          
          $phone = $_POST['phone'];
          $causes = $_POST['causes'];
          $skills = $_POST['skills'];
          $resume = $_POST['resume'];
          
          $cempstatus = $_POST['cempstatus'];
          

        // if no error occured, continue ....
        if(!isset($errMSG))
        {
            $stmt = $DB_con->prepare('UPDATE tbl_users SET userName=:userName,mobile=:mobile,address=:address,aboutme=:aboutme,lastname=:lastname,img=:img,nationality=:nationality,age=:age,gender=:gender,phone=:phone,causes=:causes,skills=:skills,resume=:resume,cempstatus=:cempstatus WHERE userID=:userID');

            $stmt->bindParam(':userID',$userID);
    $stmt->bindParam(':mobile',$mobile);
      $stmt->bindParam(':address',$address);
  $stmt->bindParam(':userName',$userName);


  $stmt->bindParam(':aboutme',$aboutme);
  $stmt->bindParam(':lastname',$lastname);
  $stmt->bindParam(':img',$img);
  $stmt->bindParam(':nationality',$nationality);
  $stmt->bindParam(':age',$age);
  $stmt->bindParam(':gender',$gender);
  $stmt->bindParam(':phone',$phone);
  $stmt->bindParam(':causes',$causes);
  $stmt->bindParam(':skills',$skills);

  $stmt->bindParam(':resume',$resume);
  $stmt->bindParam(':cempstatus',$cempstatus);

            if($stmt->execute()){
                ?>
                            <script>
                                alert('Successfully Updated ...');
                                window.location.href = 'profile.php';
                            </script>
                            <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }        
        }                         
    }    
?>                             
                            
                            


<form action="" method="post" class="row m0 contact-form" id="contactForm">
         <input name="userID" type="hidden" value="<?php echo $custRow['userID']; ?>">    

                        <input type="text" class="form-control" id="name" name="userName" placeholder="Name" value="<?php echo $custRow['userName']; ?>">

                        <input type="email" class="form-control" id="email" name="userEmail" value="<?php echo $custRow['userEmail']; ?>" " placeholder="Email Address">
                        
                         <input class="form-control" value="<?php echo $custRow['mobile']; ?>"  name="mobile" required="" type="text">

                        <textarea class="form-control" name="address" required=""><?php echo $custRow['address']; ?></textarea>













<input class="form-control" value="<?php echo $custRow['aboutme']; ?>"  name="aboutme" required="" type="text">
<input class="form-control" value="<?php echo $custRow['lastname']; ?>"  name="lastname" required="" type="text">
<input class="form-control" value="<?php echo $custRow['img']; ?>"  name="img" required="" type="text">
<input class="form-control" value="<?php echo $custRow['nationality']; ?>"  name="nationality" required="" type="text">
<input class="form-control" value="<?php echo $custRow['age']; ?>"  name="age" required="" type="text">
<input class="form-control" value="<?php echo $custRow['gender']; ?>"  name="gender" required="" type="text">              
<input class="form-control" value="<?php echo $custRow['phone']; ?>"  name="phone" required="" type="text">
<input class="form-control" value="<?php echo $custRow['causes']; ?>"  name="causes" required="" type="text">
<input class="form-control" value="<?php echo $custRow['skills']; ?>"  name="skills" required="" type="text">
<input class="form-control" value="<?php echo $custRow['resume']; ?>"  name="resume" required="" type="text">

<input class="form-control" value="<?php echo $custRow['cempstatus']; ?>"  name="cempstatus" required="" type="text">

                        
                        <input type="submit" value="Update Profile" name="btn_save_updates" class="btn-primary">
   </form>
                  
                </div>
                
            </div>
        </div>
    </section>
    





              



<?php include "footer.php";
?>

<?php include "allscript.php";
?>
