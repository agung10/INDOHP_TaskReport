  <div class="modal fade" id="customerCreateModal" tabindex="-1" role="dialog" aria-labelledby="customerCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h5 class="modal-title text-white" id="customerCreateLabel">Create New Customer</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="customerCreateForm" method="POST" action="{{ route('customers.store') }}">
        @csrf
        <div class="modal-body">
            <div class="form-group">  
                <label for="task">Task</label>
                <input type="text" name="task" class="form-control" placeholder="Enter Task" required>
            </div>
            <div class="form-group">
                <label for="card_id">Assignee</label>
                <select name="user_id[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">
                    @foreach($users as $res)
                    <option value="{{ $res->id }}">{{ $res->name }}</option>
                    @endforeach
                </select>  
            </div>
            <div class="form-group">  
                <div class="row">
                    <div class="col-6">
                        <label for="mitra">Paket Mitra</label>
                        <select name="package" id="mitra" class="form-control" required>
                            <option value="" selected>&mdash;</option>
                            @php
                                $mitras = ["Universal", "Branding", "Professional"]
                            @endphp
                            @foreach($mitras as $res)
                            <option value="{{ $res }}">{{ $res }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="harga">Harga</label>
                        <input type="number" name="price" class="form-control" placeholder="Harga" required>
                    </div>
                </div>
            </div>
            <div class="form-group">  
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Close</label>
                            <input id="date-close" name="date_close" type="text" class="form-control" name="date_close" required>
                            <span class="font-13 text-muted">e.g "MM/DD/YYYY"</span>
                        </div>
                    </div>
                    <div class="col-6">
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
                <div class="form-group">
                    <label for="payment">Payment</label>
                    <input type="text" name="payment" class="form-control" placeholder="Payment" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary rounded">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>