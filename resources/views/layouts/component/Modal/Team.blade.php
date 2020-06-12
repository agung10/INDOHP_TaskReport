<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div id="custom-modal" class="modal-demo" aria-labelledby="mySmallModalLabel">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mySmallModalLabel">Name</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">

                        <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn btn-sm btn-primary btn-rounded width-md waves-effect waves-light">Remove from card</button>
                    </div>
                </div>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog --
</div>