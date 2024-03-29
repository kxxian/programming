	<!-- jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
	<!-- SweetAlert 2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- DataTable JS -->
	<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script>
		let table = new DataTable('#myTable');
	</script>
	<!-- Confirm Delete Button -->
	<script>
		$(document).ready(function() {
			$('#employee_tbody').on('click', '.confirm-delete', function(e) {
				e.preventDefault();

				confirmDialog = confirm('Are you sure ? you want to delete this data?');
				if (confirmDialog) {
					var id = $(this).val();
					$.ajax({
						type: 'delete',
						url: '/employee/confirmdelete/' + id,
						success: function(response) {
							alert('Data deleted Successfully');
							window.location.reload();
						}
					});
				}
			});

			$('#product_tbody').on('click', '.prod_delete', function(e) {
				e.preventDefault();

				confirmDialog = confirm('Are you sure ? you want to delete this data?');
				if (confirmDialog) {
					var id = $(this).val();
					$.ajax({
						type: 'get',
						url: '/products/delete/' + id,
						success: function(response) {
							alert('Data deleted Successfully!')
							window.location.reload();
						}
					});
				}
			});
		});
	</script>
	</body>

	</html>
