<!-- Modal -->
<div id="new_card" class="modal-demo col-md-4">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add New Card</h4>
    <div class="custom-modal-text">
        <form action="#">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="activity_id">Activity ID</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
</div>