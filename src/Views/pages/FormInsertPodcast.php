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
			<a href="index" class="btn btn-success" style="margin-bottom:20px">Quay về</a>
			<form action="create" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="PodcastName">Podcast Name</label> 
						<input type="text" name="PodcastName" class="form-control" enctype="multipart/form-data">
					</div>
					<div class="form-group">
						<label for="PodcastAuthor">Podcast Author</label>
						<input type="text" name="PodcastAuthor" class="form-control">
					</div>
					<div class="form-group">
						<label for="PodcastDescription">Podcast Description</label>
						<textarea name="PodcastDescription" class="form-control" ></textarea>
					</div>
					<div class="form-group">
						<label for="PodcastImage">Podcast Image</label>
						<input type="file" name="PodcastImage" class="form-control-file">
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
