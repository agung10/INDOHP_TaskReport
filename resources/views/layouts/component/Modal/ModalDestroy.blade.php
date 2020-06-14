<div class="modal fade" id="modalDestroy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to remove?
                <br><br>
                <div class="row">
                    <div class="col-12 text-right">
                        <form id="deleteConf" method="POST" action="">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Yes, delete it</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>