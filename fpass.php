<?php
session_start();
require_once 'class.user.php';
$user = new USER();

if($user->is_logged_in()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-submit']))
{
	$email = $_POST['txtemail'];
	
	$stmt = $user->runQuery("SELECT userID FROM tbl_users WHERE userEmail=:email LIMIT 1");
	$stmt->execute(array(":email"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);	
	if($stmt->rowCount() == 1)
	{
		$id = base64_encode($row['userID']);
		$code = md5(uniqid(rand()));
		
		$stmt = $user->runQuery("UPDATE tbl_users SET tokenCode=:token WHERE userEmail=:email");
		$stmt->execute(array(":token"=>$code,"email"=>$email));
		
		$message= "<center><img style='width:300px' src='http://amarprerana.org/ngo/images/logo.png'/>		<p style='font-size:20px;color:black;text-decoration:none;'><br>
				   Hello , $email
				   <br /><br />
				   We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore                   this email,
				   <br /><br />
				   Click Following Link To Reset Your Password 
				   <br /><br />




				   <a style='padding:10px;color:white;background-color:#1fae04;text-decoration:none' href='http://amarprerana.org/ngo/resetpass.php?id=$id&code=$code'>click here to reset your password</a>
				   <br /><br />
				   Thank You </p></center>
				   ";
		$subject = "Password Reset";
		
		$user->send_mail($email,$message,$subject);
		
		$msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					We've sent an email to $email.
                    Please click on the password reset link in the email to generate new password. 
			  	</div>";
	}
	else
	{
		$msg = "<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong>  this email not found. 
			    </div>";
	}
}
?>

    <?php include "allcss.php"; ?>

<body>
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">

	<?php include "header.php"; ?>


	
		<div class="container">
			<div class="row">
				<div class="col-xs-12  col-sm-12  col-md-12">
				


						<div style="width: 370px;margin: 40px auto;">
							<div class="modal-content">
								<div class="modal-body">
									
								 <h3 class="contact_page_title">Forget Password</h3> 
									 
									<div class="sign-form">


									<form class="mb-0" action="" method="post" name="registration" id="form_forgotpassword">

<?php
			if(isset($msg))
			{
				echo $msg;
			}
			else
			{
				?>
              	<div class='alert alert-danger'>
				Please enter your email address. You will receive a link to create a new password via email.!
				</div>  
                <?php
			}
			?>          
	
											<div class="form-group">
										


												 <input class="form-control" placeholder="Enter your username"  id="email" name="txtemail" required="" type="email">

											</div>
										 

										


											 <button type="submit" name="btn-submit" class="btn btn-primary btn-block">Generate New Password</button>


										</form>


										<div class="pull-center lost-pass" style="text-align: center;"> <br>
											<a href="login.php"><b>Login to your Account</b></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>



					</div>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	
	<!-- #signIn end -->
	
<?php include "footer.php"; ?>


</div>
<!-- #wrapper end -->




<?php include "allscript.php"; ?>