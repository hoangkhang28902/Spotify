<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6" style="margin-left: 300px;">
			<a href="index" class="btn btn-warning" style="margin-bottom:20px; margin-left:200px; position:absolute; margin-top:925px; left: -4%;">Quay về </a>

			<form action="create" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Username">User name</label> 
						<input type="text" name="Username" class="form-control">
					</div>
					<div class="form-group">
						<label for="UserFname">User First Name</label>
						<input type="text" name="UserFname" class="form-control">
					</div>
					<div class="form-group">
						<label for="UserLname">User Last Name</label>
						<input type="text" name="UserLname" class="form-control">
					</div>
                    <div class="form-group">
						<label for="Password">Password</label>
						<input type="text" name="Password" class="form-control">
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
						<input type="text" name="Email" class="form-control">
					</div>
                    <div class="form-group">
						<label for="Birthday">Birthday</label>
						<input type="Date" name="Birthday" class="form-control-file">
					</div>
                    <div class="form-group">
						<label for="Address">Address</label>
						<input type="text" name="Address" class="form-control">
					</div>
                    <div class="form-group">
						<label for="City">City</label>
						<input type="text" name="City" class="form-control">
					</div>
                    <div class="form-group">
						<label for="State">State</label>
						<input type="text" name="State" class="form-control">
					</div>
                    <div class="form-group">
						<label for="ZipCode">ZipCode</label>
						<input type="text" name="ZipCode" class="form-control">
					</div>
                    <div class="form-group">
						<label for="UserImage">UserImage</label>
						<input type="file" name="UserImage" class="form-control-file">
					</div>
                    
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Thêm">
					</div>
				</form>
				<?php
				if (isset($data["result"])) {
					if ($data["result"] == "true") {
				?>
						<script>
							alert("Thêm thành công");
							window.location.replace("http://localhost:81/Spotify-main/UserAdmin");
						</script>
					<?php
					} else {
					?>
						<script>
							alert("Thêm thất bại");
							window.location.replace("http://localhost:81/Spotify-main/UserAdmin");
						</script>
				<?php
					}
				}
				?>

			</div>
		</div>
	</div>

	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
</body>

</html>
