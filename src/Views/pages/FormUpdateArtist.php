<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<base href="http://localhost:8080/Spotify/ArtistAdmin/">
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
			<a href="index" class="btn btn-success" style = "margin-bottom:20px;" >Quay về</a>
			<?php 
				while($artist = mysqli_fetch_array($data["edit"])){ ?>
						<form action="update/<?php echo $artist["ArtistID"];?>" method="post"  enctype="multipart/form-data">
									<div class="form-group">
										<label for="ArtistName">Artist Name</label> 
										<input type="text" name="ArtistName" class="form-control" value="<?php echo $artist["ArtistName"]?>">
									</div>
									<div class="form-group">
										<label for="ArtistDescription">Artist Description</label>
										<input type="date" name="ArtistDescription" class="form-control"value="<?php echo $artist["ArtistDescription"]?>" >
									</div>
									<div class="form-group">
										<label for="ArtistDob">Artist Dob</label>
										<input type="text" name="ArtistDob" class="form-control"value="<?php echo $artist["ArtistDob"]?>" >
									</div>
									<div class="form-group">
										<label for="ArtistImage">Artist Image</label>
										<input type="file" name="ArtistImage" class="form-control-file" ><img src="data:image/jpeg;base64,<?php echo base64_encode($artist['ArtistImage']); ?>" alt="Album Image" width="120px">

									</div>
									<div class="form-group">
										<input type="submit" name="submit" class="btn btn-primary" value="Sửa">
									</div>
								</form>
				<?php
				}
			
			?>
				<?php
					if(isset($data["result"])){
						if($data["result"] == "true") { ?>
							<h3 class="alert alert-success">
								<?php echo "Sửa thành công"?>
							</h3>
						<?php
						}
						else{?>
							<h3 class="alert alert-warning">
								<?php echo "Sửa thất bại"?>
							</h3>
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
