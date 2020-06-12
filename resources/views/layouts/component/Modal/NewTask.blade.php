
  <!-- Modal -->
  <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h5 class="modal-title text-white" id="addTaskModalLabel">Add New Task</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input id="ICardId" type="hidden" name="card_id">
        <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="card_id">Card Name</label>
                        <input id="ICardName" type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="priority">Priority</label>
                        <input type="text" name="priority" class="form-control" placeholder="Enter priority">
                    </div>
                </div>
            </div>
            <div class="form-group">  
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="example-textarea">Description</label>
                <textarea class="form-control" name="description" rows="5" id="example-textarea"></textarea>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label">Started At</label>
                        
                        <div class="input-group">
                            <input type="text" name="started_at" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-startedat">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="ti-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="endedat">Ended At</label>
                        <div class="input-group">
                            <input type="text" name="ended_at" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-endedat">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="ti-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>