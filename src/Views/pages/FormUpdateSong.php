<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<base href="http://localhost:8080/Spotify/SongAdmin/">
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
			<a href="index" class="btn btn-success" style = "margin-bottom:20px;" >Quay về</a>
			<?php 
				while($song = mysqli_fetch_array($data["edit"])){ ?>
						<form action="update/<?php echo $song["SongID"];?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="SongName">Song Name</label> 
										<input type="text" name="SongName" class="form-control" value="<?php echo $song["SongName"]?>">
									</div>
									<div class="form-group">
										<label for="AlbumID">AlbumID</label>
										<input type="text" name="AlbumID" class="form-control"value="<?php echo $song["AlbumID"]?>" >
									</div>
									<div class="form-group">
										<label for="SongDate">Song Date</label>
										<input type="Date" name="SongDate" class="form-control"value="<?php echo $song["SongDate"]?>" >
									</div>
									<div class="form-group">
										<label for="SongLength">Song Length</label>
										<input type="text" name="SongLength" class="form-control"value="<?php echo $song["SongLength"]?>" >
									</div>
                                    <div class="form-group">
										<label for="SongLyric">Song Lyric</label>
										<input type="text" name="SongLyric" class="form-control"value="<?php echo $song["SongLyric"]?>" >
									</div>
									<div class="form-group">
										<label for="SongImage">Song Image</label>
										<input type="file" name="SongImage" class="form-control-file" ><img src="data:image/jpeg;base64,<?php echo base64_encode($song['SongImage']); ?>" alt="song Image" width="120px">

									</div>
                                    <div class="form-group">
										<label for="SongAudio">Song Audio</label>
										<input type="text" name="SongAudio" class="form-control"value="<?php echo $song["SongAudio"]?>" >
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