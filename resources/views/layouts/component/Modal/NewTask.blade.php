
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
                        <select name="priority" id="priority" class="form-control" required>
                            <option value="" selected>&mdash;</option>
                            @php
                                $priorities = ["Urgent", "High", "Normal", "Low", "Additional"];
                            @endphp
                            @foreach($priorities as $res)
                            <option value="{{ $res }}">{{ $res }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">  
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="example-textarea">Description</label>
                <textarea class="form-control" name="description" rows="5" id="example-textarea"></textarea>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Started At</label>
                            <input type="text" class="form-control" id="datepicker-startedat" name="started_at" required>
                            <span class="font-13 text-muted">e.g "MM/DD/YYYY"</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ended At</label>
                            <input type="text" class="form-control" id="datepicker-endedat" name="ended_at" required>
                            <span class="font-13 text-muted">e.g "MM/DD/YYYY"</span>
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