<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="icon" href="bluee.jpg" type="image/icon type">
    <link rel="stylesheet" href="style2.css"/>
</head>

<body>

<div class="wrapper">
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>

	<section class="container">
		<header>Registration Form</header>
			<form action="process-form.php" class="form" method="post">
				<!--name-->
				<div class="column">
					<div class="input-bx">
						<label>First Name</label>
						<input type="text" name="first_name" placeholder="Enter first name" required />
					</div>

					<div class="input-bx">
						<label>Last Name</label>
						<input type="text" name="last_name" placeholder="Enter last name" required />
					</div>
				</div>
				
				<!--email-->
				<div class="input-bx">
					<label>Email</label>
					<input type="email"  name="email" placeholder="Enter email address" required/>
				</div>

				<div class="column">
					<!--phone-->
					<div class="input-bx">
						<label>Phone Number</label>
						<input type="text"  name="phone_number" placeholder="Enter phone number" required maxlength="11"/>
					</div>
					<!--birth date-->
					<div class="input-bx">
						<label>Date of Birth</label>
						<input type="date" name="birth_date" placeholder="Enter birth date" required/>
					</div>
				</div>

				<!--gender-->
				<div class="gender-bx">
					<h3>Gender</h3>
					<div class="gender-choices">
						<div class="gender">
							<input type="radio" id="check-female" name="gender" value="female"/> 
							<label for="check-female">Female</label>
						</div>
						<div class="gender">
							<input type="radio" id="check-male" name="gender" value="male"/> 
							<label for="check-male">Male</label>
						</div>
						<div class="gender">
							<input type="radio" id="check-others" name="gender" value="others"/> 
							<label for="check-others">Prefer not to Answer</label>
						</div>
					</div>
				</div>

				<!--Address-->
				<div class="address">
					<div class="set-info">
						<div class="title">
							<h3 class="title">Address</h3>
						</div>
						<div class="input-box">

							<select name="region" id="first">
								<option value="">--Region--</option>
							</select>
							<br>
							<br>
							<select name="city" id="second">
								<option value="">--City/Province--</option>
							</select>
							<br>
							<select name="barangay" id="third">
								<option value="">--Barangay/District--</option>
							</select>
							<br>
							<div class="input-box" id="third-add">
								<input class="fourth" type="text" id="address" name="additional" placeholder="House Number, Lot, Street, Building" required>
								</div>
								<span class="labels" id="third-label"></span>
						</div>
					</div>
				</div>

				<!--Checkbox-->
				<div class=check-bx>
					<h3>Where did you hear about us?</h3>
					<div class="check-choices">
					<input type="checkbox" id="friend-colleague" name="hear-about-us[]" value="friend-colleague">
						<label for="friend-colleague">A friend or colleague</label><br>

						<input type="checkbox" id="google" name="hear-about-us[]" value="google">
						<label for="google">Google</label><br>

						<input type="checkbox" id="blog-post" name="hear-about-us[]" value="blog-post">
						<label for="blog-post">Blog post</label><br>

						<input type="checkbox" id="news-article" name="hear-about-us[]" value="news-article">
						<label for="news-article">News article</label><br>

						<input type="checkbox" id="other" name="hear-about-us[]" value="other">
						<label for="other">Other</label><br>
					</div>
				</div>

				<!--membership-->
				<div class=membership>
				<h3>Membership Type</h3>

					<label for="standard">
						<input type="radio" id="standard" name="membership-type" value="standard">
						Standard
					</label>

					<label for="premium">
						<input type="radio" id="premium" name="membership-type" value="premium">
						Premium
					</label>

					<label for="ultimate">
						<input type="radio" id="ultimate" name="membership-type" value="ultimate">
						Ultimate
					</label>
				</div>
			
				<!--contact-->
				<div class=contact>
				<h3>Preferred way to contact</h3>

					<label for="phone">
						<input type="radio" id="phone" name="contact-type" value="phone">
						Phone
					</label>

					<label for="email">
						<input type="radio" id="email" name="contact-type" value="email">
						Email
					</label>

					<label for="any">
						<input type="radio" id="any" name="contact-type" value="any">
						Any
					</label>
				</div>

				<div class="frame">
					<!--membership rules-->
					<div class="rules">
						<h3>Membership Rules</h3>
						<p>1. Membership is available to anyone 18 years of age or older.</p>
						<p>2. You promise NOT to use to conduct any fraudulent or business activity or have more than one Member Account at any time.</p>

						<input type="checkbox" id="accept-membership-rule" name="accept-rule[]" value="accept-membership-rule" required>
						<label for="accept-membership-rule">I have read, understood, and accepted the rules for membership.</label><br>
					</div>

					<!--privacy policy-->
					<div class="privacy">
						<h3>Privacy Policy</h3>
						<p>Please reach out and read our Privacy Policy in order to understand how your information is used and shared, and check below if you accept the policy.</p>

						<input type="checkbox" id="accept-privacy-policy" name="accept-rule[]" value="accept-privacy-policy" required>
						<label for="accept-privacy-policy">I have read, understood, and accepted the PRIVACY POLICY for membership.</label><br>
					</div>
				</div>


				<div class="note">
					<p>Once you submit your applciation, we will contact you shortly to complete your membership application.</p>
				</div>
				
				<button>Submit</button>

			</form>
	</section>
</div>


	<script src="script.js"></script>
</body>
</html>