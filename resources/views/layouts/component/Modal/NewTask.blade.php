<!-- Modal -->
<div id="new_task" class="modal-demo col-md-4">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add New Card</h4>
    <div class="custom-modal-text">
        <form action="#">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="card_id">Card ID</label>
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
            <div class="form-group">
                <label class="col-form-label" for="example-textarea">Description</label>
                <textarea class="form-control" rows="5" id="example-textarea"></textarea>
            </div>
            <div class="form-group">
                <label for="priority">Priority</label>
                <input type="text" class="form-control" placeholder="Enter priority">
            </div>
            
            <div class="form-group">
                <label class="control-label">Started At</label>
                <div class="row col-sm-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                        </div>
                    </div><!-- input-group -->
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Ended At</label>
                <div class="row col-sm-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                        </div>
                    </div><!-- input-group -->
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
</div>

