<!-- Modal -->
<div id="new_card" class="modal-demo col-md-4">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add New Card</h4>
    <div class="custom-modal-text">
        <form method="POST" action="{{ route('cards.store') }}">
            @csrf
            <input type="hidden" name="activity_id" value="{{ $activity->id }}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
            </div>
            <button type="submit" class="btn btn-primary rounded">Submit</button>
        </form>
    </div>
</div>
</div>