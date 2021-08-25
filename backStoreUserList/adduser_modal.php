<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add User</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="addUser.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">User Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Password</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Admin</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="isAdmin">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">First Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fName">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Last Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lName">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Phone Number</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="phone_number">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email Address</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="adduser" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>
        </div>
    </div>
</div>