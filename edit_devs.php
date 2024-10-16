<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/style.css">
	</link>
	<title>Document</title>
</head>

<body>

	<div class="container">
		<div class="row  justify-content-center">
			<div class="col-md-5">
				<a class="btn btn-sm bg-info my-3" href="index.php">Back</a>
				<div class="card shadow-sm">
					<div class="card-header">
						<h3>Edit Developers</h3>
					</div>
					<div class="card-body">
						<form action="" method="POST" enctype="multipart/form-data">

							<div class="my-3">
								<label for=""> Name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="my-3">
								<label for=""> Phone</label>
								<input type="text" name="phone" class="form-control">
							</div>
							<div class="my-3">
								<label for=""> Email</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="my-3">
								<label for=""> Skills</label>
								<input type="checkbox" name="skills[]" value="PHP">PHP
								<input type="checkbox" name="skills[]" value="Laravel">Laravel
								<input type="checkbox" name="skills[]" value="Js">JS
								<input type="checkbox" name="skills[]" value="React">React

							</div>
							<div class="my-3">
								<label for=""> Location</label>
								<select name="" id="" class="form-control">
									<option value="Uttara">Dhaka</option>
									<option value="Mirpur">Rajshahi</option>
									<option value="Gulshan">Chittagong</option>
									<option value="Dhanmondi">Kumilla</option>
									<option value="Dhanmondi">Jessore</option>
									<option value="Dhanmondi">Sylhet</option>
									<option value="Dhanmondi">Khulna</option>
									<option value="Dhanmondi">Mymensing</option>v
								</select>
							</div>

							<div class="my-3">
								<label class="photo">
									<label for=""> Photo</label>
									<input type="file" id="photo" name="photo" class="form-control">
									<img id="photo-icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrVLGzO55RQXipmjnUPh09YUtP-BW3ZTUeAA&s" alt="">
								</label>

								<div class="preview-image">
									<img id="photo-preview" src="">
									<button type="button" id="photo-close"><i class="fa-solid fa-square-xmark"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		photo = document.getElementById("photo");
		photo_icon = document.getElementById("photo-icon");
		photo_preview = document.getElementById("photo-preview");
		photo_close = document.getElementById("photo-close");

		photo.onchange = (event) => {
			photoURL = URL.createObjectURL(event.target.files[0]);
			photo_preview.setAttribute('src', photoURL);
			photo_icon.style.display = 'none';
			photo_close.style.display = 'block';
		}

		photo_close.onclick = () => {
			photo_preview.setAttribute('src', "");
			photo_icon.style.display = 'block';
			photo_close.style.display = 'none';
		}
	</script>
</body>

</html>