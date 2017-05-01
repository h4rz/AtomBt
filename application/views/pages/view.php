<!--<title>View Issue</title>
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>#<?=$issue_item['id']?>: <?=$issue_item['title']?></h1>
        </div>
        <div class="panel-body">
        <h4>Description</h4>    <p><?=$issue_item['text']?></p>
        <h4>Milestone</h4><?=$issue_item['milestone']?>
        <h4>Project</h4><?=$issue_item['project']?>
        <h4>Category</h4><p>Todo</p>
        <h4>Status</h4><p>Todo</p>
        <h4>Assign to..</h4><p>Todo</p>
        <h4>Label</h4><p>Todo</p>
        </div>
        <div class="panel-footer">
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-alert">Delete</a>
            <a href="#" class="btn btn-success">Mark as...</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Issue #<?=$issue_item['id']?></h1>
            <h3><?=$issue_item['title']?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="well">
                <h6>Milestone</h6>
                <p><?=$issue_item['milestone']?></p>
                <h6>Projects</h6>
                <h6>Issue type</h6><?=$issue_item['type']?>
            </div>
        </div>
        <div class="col-md-9">
        
        </div>
    </div>
</div>
-->


<!-- Coode By H4rz -->
<title>View Issue</title>
<div class="row">
    <div class="col-sm-3 col-md-6 col-lg-8">
        <div class="card m-3 w-100">
          <h3 class="card-header bg-primary text-white">#<?=$issue_item['id']?>: <?=$issue_item['title']?></h3>
          <div class="card-block bg-faded">
            <form>
                <div class="form-group">
                    <label for="issueBody"><h5>Description</h5></label>
                    <textarea class="form-control" id="summernote" disabled><?=$issue_item['text']?></textarea>
                </div>
                <div class="form-group row">
                    <label for="milestoneSelect1" class="col-sm-2 col-form-label mr-2"><h5>Milestone</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="milestoneSelect1" disabled>
                          <option><?=$issue_item['milestone']?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="projectSelect1" class="col-sm-2 col-form-label mr-2"><h5>Project</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="projectSelect1" disabled>
                          <option><?=$issue_item['project']?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="categorySelect1" class="col-sm-2 col-form-label mr-2"><h5>Category</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="categorySelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="statusSelect1" class="col-sm-2 col-form-label mr-2"><h5>Status</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="statusSelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="assignToSelect1" class="col-sm-2 col-form-label mr-2"><h5>Assign To</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="assignToSelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="labelSelect1" class="col-sm-2 col-form-label mr-2"><h5>Label</h5></label>
                    <div class="col-sm-9">
                        <select multiple class="form-control" id="labelSelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>  
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="submit" class="btn btn-primary">Delete</button>
                <button type="submit" class="btn btn-primary">Mark As</button>
            </form>
          </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-6 col-lg-4">
        <div class="card m-3 w-80">
            <h5 class="card-header bg-info text-white">Issue #<?=$issue_item['id']?></h5>
            <div class="card-block">
                <h5><?=$issue_item['title']?></h5> 
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Milestone :</b>&nbsp;<?=$issue_item['milestone']?></li>
                <li class="list-group-item"><b>Project :</b>&nbsp;<?=$issue_item['project']?></li>
                <li class="list-group-item"><b>Issue Type :</b>&nbsp;<?=$issue_item['type']?></li>
                <li class="list-group-item"><b>Description Of Issue :</b>&nbsp;<?=$issue_item['text']?></li>
                <li class="list-group-item"><b>Assigned To :</b>&nbsp;<?=$issue_item['milestone']?></li>
            </ul>
        </div>
    </div>
</div>