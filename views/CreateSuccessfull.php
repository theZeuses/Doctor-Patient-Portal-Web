<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles/LoginRegister.css">
</head>
<body>
    <div class="text-center">
        <div class="login-form" style="top: 35.5px;">
            <div class="row">
                <div class="col-sm-4 col-xs-12 text-center">
                    <img src="../storage/images/logo.jpeg" height="92">
                </div>

                <div class="col-sm-8 col-xs-12">
                    <blockquote>
                        <p class="project_title"><h2>DOCTOR-PATIENT PORTAL</h2></p>
                        <small class="project_slogan">We care for you.</small>
                    </blockquote>
                </div>
            </div>
        	<br>
            <div class="login_header"><span> Important!!!!!!!.</div>
                     
			<div class="form-group">
                Take A good Note of your id and password. Remebering This id is very IMPORTANT.
            </div>
            <div class="form-group">
               <span><h3> <?php echo "ID:".$_GET["id"]; ?></h3></span>
            </div>
            <div class="form-group">
                <a href="login.php"><button class="btn btn-block btn-primary p-lg-left-right">Go To Log In </button></a>
            </div>
        </div>
    </div>
</body>
</html>