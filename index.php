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
	<title>Develepoers</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-sm bg-info  my-3" href="add_devs.php">Add New Dev</a>
				<div class="card shadow-sm">
					<div class="card-header">
						<h3>All Developers List</h3>
					</div>
					<div class="card-body">
						<table class='table my-5 '>
							<tr>
								<thead>
									<td>#ID</td>
									<td>Photo</td>
									<td>Name</td>
									<td>Phone</td>
									<td>Email</td>
									<td>Skill</td>
									<td>Location</td>
									<td>Created At</td>
									<td>Actions</td>
								</thead>
							</tr>
							<tr>
								<td>1</td>
								<td><img src="https://static.vecteezy.com/system/resources/previews/038/974/578/non_2x/ai-generated-professional-portrait-of-a-competent-woman-free-photo.jpg" alt=""></td>
								<td>Marufa Khatun</td>
								<td>01780669178</td>
								<td>marufa@gmail.com</td>
								<td>PHP Developer</td>
								<td>Naraynganj</td>
								<td>01-01-24</td>
								<td>
									<a class="btn btn-sm bg-info" href="single_view.php"><i class="fa-regular fa-eye"></i></a>
									<a class="btn btn-sm bg-warning" href="edit_devs.php"><i class="fa-regular fa-pen-to-square"></i></a>
									<a onclick="confirmDelete()" class="btn btn-sm bg-danger" href="javascript:void(0);"><i class="fa-solid fa-trash-can"></i></a>

								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function confirmDelete() {


			Swal.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, delete it!"
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire({
						title: "Deleted!",
						text: "Your file has been deleted.",
						icon: "success"
					});
				}
			});
		}
	</script>
</body>

</html>