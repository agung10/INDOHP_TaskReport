
  <!-- Modal -->
  <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h5 class="modal-title text-white" id="addTaskModalLabel">Task Detail</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="editTaskForm" method="POST" action="">
        @csrf
        {{ method_field('PUT') }}
        <div class="modal-body">
            <div class="form-group">
                <label for="card_id">Users Tasks</label>
                <select id="IUserTasks" name="usertasks[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ..."></select>  
            </div>
            <hr>
            <div class="form-group">
                <label for="card_id">Move Task To Card</label>
                <br><button id="btnMoveTaskToCard" type="button" class="btn btn-sm btn-primary">Move</button>
                <select id="selectMoveTaskToCard" name="" class="form-control">
                    @foreach($cards as $res)
                        <option value="{{ $res->id }}">{{ $res->name }}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="card_id">Card Name</label>
                        <input id="IECardName" type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="priority">Priority</label>
                        <select name="priority" id="priority" class="form-control" required>
                            <option id="IPriority" selected></option>
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
                <input id="IName" type="text" name="name" class="form-control" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="example-textarea">Description</label>
                <textarea id="IDescription" class="form-control" name="description" rows="5" id="example-textarea"></textarea>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Started At</label>
                            <input id="IStartedAt" type="text" class="form-control" name="started_at" required>
                            <span class="font-13 text-muted">e.g "MM/DD/YYYY"</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ended At</label>
                            <input id="IEndedAt" type="text" class="form-control" name="ended_at" required>
                            <span class="font-13 text-muted">e.g "MM/DD/YYYY"</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn btn-danger" onclick="document.getElementById('IFormRemoveTask').submit()">Remove Task</a>
            <button type="submit" class="btn btn-primary rounded">Submit</button>
        </div>
        </form>

        <form id="IFormRemoveTask" method="POST" action="" style="display:none;">
            @csrf
            {{ method_field('DELETE') }}
        </form>
      </div>
    </div>
  </div>