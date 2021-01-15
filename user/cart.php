
	<!---header--->
		<?php include "header.php"; ?>
    <!---header--->
	<div class="container" style="margin-bottom:80px;">
	<table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Category Parent Name</th>
                        <th>Category Name</th>
                        <th>category Availability</th>
                        <th>Category Launch Date</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>

					<tr>
					<td>Category Parent Name</td>
                        <td>Category Name</td>
                        <td>category Availability</td>
                        <td>Category Launch Date</td>
                        <td>Delete</td>
                        <td>Update</td>
					</tr>
					<tr>
					<td>Category Parent Name</td>
                        <td>Category Name</td>
                        <td>category Availability</td>
                        <td>Category Launch Date</td>
                        <td>Delete</td>
                        <td>Update</td>
					</tr>
                   

                </tbody>
              </table>
	</div>


    			<!---footer--->
				<?php include "footer.php";?>
			<!---footer--->

			<script>

$(document).ready( function () {

$('#showProduct').DataTable();
} );

</script>
			
			
</body>
</html>