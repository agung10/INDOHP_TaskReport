<!-- Modal -->
<div id="custom-modal" class="modal-demo col-md-4">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Create New Activity</h4>
    <div class="custom-modal-text">
        <form method="POST" action="{{ route('activities.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                <small id="name" class="form-text text-muted">The name of the activity must be filled in for identification</small>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="example-textarea">Description</label>
                <textarea class="form-control" name="description" rows="5" id="example-textarea"></textarea>
            </div>
            <div class="form-group">
                <label>Color</label>
                <select class="form-control" name="color" required>
                    <option value="info">Blue</option>
                    <option value="primary">Light Blue</option>
                    <option value="success">Green</option>
                    <option value="warning">Yellow</option>
                    <option value="danger">Red</option>
                    <option value="purple">Purple</option>
                    <option value="pink">Pink</option>
                    <option value="dark">Dark</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
</div>