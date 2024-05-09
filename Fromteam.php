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
    <link rel="stylesheet" type ="text/css" href="css/Fromteam.css">
</head>
<body>
    <div>
    <?php
        if( isset($_POST['create'])){

            $TFC_name = $_POST['firstname'];
            $Pass = $_POST['lastname'];
            $Nam = $_POST['name'];
            
            echo $TFC_name . " " . $Pass . " " .$Nam;

            $sql = "INSERT INTO teamfromlist (TFCName, Pass, MemeberNumber ) VALUES(?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$TFC_name, $Pass, $Nam]);

            if( $result ){
                echo "Saved";
            }else{
                echo "Wrong";
            }
       }
	?>
    </div>

<div>
	<form action="Fromteam.php" method="post" style="margin:auto;">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Team Froms</h1>

					<hr class="mb-3">
					<label for="firstname"><b>TFC name:</b></label>
					<input class="form-control" id="TFC_name" type="text" name="firstname" required>
                    <br>

					<label for="lastname"><b>Set Password:</b></label>
					<input class="form-control" id="Password"  type="password" name="lastname" required>
                    <br>

					<label for="name"><b>Number Of Contest:</b></label>
					<input class="form-control" id="number"  type="text" name="name" required>
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