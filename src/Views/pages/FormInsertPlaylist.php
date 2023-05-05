<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
			<a href="index" class="btn btn-warning" style="margin-bottom:20px;">Quay về </a>

			<form action="create" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="PlaylistName">Playlist Name</label> 
						<input type="text" name="PlaylistName" class="form-control">
					</div>
					<div class="form-group">
						<label for="PlaylistDescription">Playlist Description</label>
						<input type="text" name="PlaylistDescription" class="form-control">
					</div>
					<div class="form-group">
						<label for="AmountLike">Amount Like</label>
						<input type="text" name="AmountLike" class="form-control">
					</div>
                    <div class="form-group">
						<label for="AmountSong">Amount Song</label>
						<input type="text" name="AmountSong" class="form-control">
					</div>
					<div class="form-group">
						<label for="PlaylistLength">Playlist Length</label>
						<input type="text" name="PlaylistLength" class="form-control">
					</div>
                    <div class="form-group">
						<label for="CreateDate">Create Date</label>
						<input type="Date" name="CreateDate" class="form-control-file">
					</div>
                    <div class="form-group">
						<label for="PlaylistImage">Playlist Image</label>
						<input type="file" name="PlaylistImage" class="form-control-file">
					</div>
                    
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Thêm">
					</div>
				</form>
				<?php
					if(isset($data["result"])){
						if($data["result"] == "true") { ?>
							<h3 class="alert alert-success">
								<?php echo "Thêm thành công"?>
							</h3>
						<?php
						}
						else{?>
							<h3 class="alert alert-warning">
								<?php echo "Thêm thất bại"?>
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
