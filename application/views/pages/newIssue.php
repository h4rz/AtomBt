<div class="card m-3 w-100">
  <h3 class="card-header bg-primary text-white">New Issue</h3>
  <div class="card-block bg-faded">
    <form>
    	<div class="form-group">
    		<label for="subject">Subject</label>
    		<input type="text" class="form-control" id="inputSubject" aria-describedby="subjectHelp" placeholder="Quick summary of the issue">
    	</div>
    	<div class="form-group">
    		<label for="issueBody">Description</label>
    		<textarea class="form-control" id="summernote"></textarea>
    		<!-- Script for running summernote -->
    		<script>
    			$(document).ready(function() {
        			$('#summernote').summernote();
    			});
  			</script>
    	</div>
    	<button type="submit" class="btn btn-primary">Save Issue</button>
    	<button type="submit" class="btn btn-primary">Save & Add Another</button>
    	<a href="#">cancel and go back</a>
    </form>
  </div>
</div>
</div>
<div class="col-sm-3 col-md-6 col-lg-4">
	<div class="card m-3 w-80">
		<h6 class="card-header bg-info text-white">Issue Details</h6>
		<div class="card-block">
		    <form>
		    	<div class="form-group row">
				    <label for="projectSelect1" class="col-sm-2 col-form-label mr-2">Project</label>
				    <div class="col-sm-9">
					    <select class="form-control" id="projectSelect1">
					      <option>None</option>
					    </select>
					</div>
				</div>
				<div class="form-group row">
				    <label for="prioritySelect1" class="col-sm-2 col-form-label mr-2">Priority</label>
				    <div class="col-sm-9">
					    <select class="form-control" id="prioritySelect1">
					      <option>Low</option>
					      <option>Normal</option>
					      <option>High</option>
					    </select>
					</div>
				</div>
				<div class="form-group row">
				    <label for="assignSelect1" class="col-sm-2 col-form-label mr-2">Assign to</label>
				    <div class="col-sm-9">
					    <select class="form-control" id="assignSelect1">
					      <option>Nobody</option>
					    </select>
					</div>
				</div>
				<div class="form-group row">
				    <label for="milestoneSelect1" class="col-sm-2 col-form-label mr-2">Milestone</label>
				    <div class="col-sm-9">
					    <select class="form-control" id="milestoneSelect1">
					      <option>None</option>
					    </select>
					</div>
				</div>
		    </form>	
	  	</div>
	</div>
	<div class="card m-3 w-80">
		<h6 class="card-header bg-info text-white">Labels</h6>
		<div class="card-block">
		    <form>
		    	<div class="form-group">
    				<input type="text" class="form-control" id="inputLabel1" aria-describedby="labelHelp" placeholder="Filter Labels">
    			</div>	
    			<div class="form-group">
				    <select multiple class="form-control" id="labelSelect1">
				      <option>1</option>
				      <option>2</option>
				    </select>
				</div>
				<div class="form-group">
					<form>
						<div class="form-group">
    						<label for="label">New Label</label>
    						<input type="text" class="form-control" id="inputLabel2" aria-describedby="newLabelHelp" placeholder="Label Name">
    					</div>
    					<button type="submit" class="btn btn-primary w-100">Save Label</button>
    				</form>
    			</div>
		    </form>	
	  	</div>
	</div>
	<div class="card m-3 w-80">
		<h6 class="card-header bg-info text-white">Attachments</h6>	
		<div class="form-group">
    		<input type="file" class="form-control-file m-2" id="exampleInputFile" aria-describedby="fileHelp">
  		</div>
	</div>
</div>