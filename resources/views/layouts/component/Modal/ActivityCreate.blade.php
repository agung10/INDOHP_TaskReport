<!-- Modal -->
<div id="custom-modal" class="modal-demo col-md-4">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Create New Activity</h4>
    <div class="custom-modal-text">
        <form action="#">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter name">
                <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="example-textarea">Description</label>
                <textarea class="form-control" rows="5" id="example-textarea"></textarea>
            </div>
            <div class="form-group">
                <label>Color</label>
                <select class="form-control">
                    <option value="info">Biru</option>
                    <option value="danger">Merah</option>
                    <option value="success">Hijau</option>
                    <option value="warning">Kuning</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
</div>