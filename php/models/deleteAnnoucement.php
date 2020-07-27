<?php include "../connect_database.php"; ?>
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Announcement</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="../announcements/delete_announcement.php" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="delete_id" id="delete_id">

					<h4> Do you want to delete this Announcement ?</h4>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
						<button type="submit" name="deletedata" class="btn btn-primary">Yes!</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
