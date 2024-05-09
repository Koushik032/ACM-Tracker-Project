<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type ="text/css" href="css/Participate.css">
</head>
<body>
    <div>
    <?php
        if( isset($_POST['create'])){

            $TFC_name = $_POST['firstname'];
            $Pass = $_POST['lastname'];
            $Nam = $_POST['name'];
            $vjudge = $_POST['site'];
            $codeforces = $_POST['codeforces-handle'];
            $codechef = $_POST['codechef-handle'];
            //echo $TFC_name . " " . $Pass . " " .$Nam . " " . $vjudge . " " . $codeforces . " " . $codechef;

            $sql = "INSERT INTO users (TfcName, PassWo, UserName, VjudgeHandle, CodeforcesHandle, CodechefHandle ) VALUES(?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$TFC_name, $Pass, $Nam, $vjudge, $codeforces, $codechef]);

            if( $result ){
                echo "Saved";
            }else{
                echo "Wrong";
            }
       }
	?>	
    </div>

<div style="">
	<form action="registation.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>

					<hr class="mb-3">
					<label for="firstname"><b>TFC name:</b></label>
					<input class="form-control" id="TFC_name" type="text" name="firstname" required>
                    <br>

					<label for="lastname"><b>Password:</b></label>
					<input class="form-control" id="Password"  type="password" name="lastname" required>
                    <br>

					<label for="name"><b>Name:</b></label>
					<input class="form-control" id="name"  type="text" name="name" required>
                    <br>

					<label for="site"><b>Vjudge Username:</b></label>
					<input class="form-control" id="vjudge"  type="text" name="site" required>
                    <br>

					<label for="codeforces-handle"><b>Codeforces Handle:</b></label>
					<input class="form-control" id="codeforces-handle"  type="text" name="codeforces-handle" required>
                    <br>

                    <label for="codechef-handle"><b>Codechef Handle:</b></label>
					<input class="form-control" id="codechef-handle"  type="text" name="codechef-handle" required>
                    <br>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    <br>
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>
