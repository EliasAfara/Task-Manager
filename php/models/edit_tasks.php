<!-- Edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Announcement</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="../task/update_tasks.php" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="update_id" id="update_id">

					<div class="form-row">
						<div class="name">Title</div>
						<div class="value">
							<input id="title" class="input--style-6" type="text" name="title">
						</div>
					</div>
					<div class="form-row">
						<div class="name">Body</div>
						<div class="value">
							<div class="input-group">
								<label for="body"></label><textarea id="body" class="textarea--style-6" name="body"></textarea>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name="updatedata" class="btn btn-primary">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>