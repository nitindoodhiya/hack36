<?php include('ser.php');?>
<!DOCTYPE html>
<html>
<head>
       <title>SELL krdo</title>
       <link rel ="stylesheet" type ="text/css" href="style.css">
<body>
	<div class="header">
		<h2> SELL </h2>
	</div>
	<form  method="post" action="sale.php">
		<?php include('errors.php');?>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email;?>">
		</div>
		<div class="input-group">
			<label>contactno</label>
				<input type="text" name="contact" value="<?php echo $contact;?>">
		</div>
		<div class="input-group">
			<label>hostel</label>
				<input type="text" name="hostel" value="<?php echo $hostel;?>">
		</div>
		
		
<div class="input-group">
			<label>description</label>
				<input type="text" name="description" value="<?php echo $ds;?>">
		</div>

    <div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
	</form>
</body>
	</head>
</html>