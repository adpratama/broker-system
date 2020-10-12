<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{asset('assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/page/modules-ion-icons.js')}}"></script>

<!-- Data Table -->

<script src="{{asset('assets/css/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/css/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

{{-- <script src="{{asset('assets/js/page/forms-advanced-forms.js')}}"></script> --}}
<script src="{{asset('assets/css/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/css/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('assets/css/summernote/dist/summernote-bs4.js')}}"></script>

<script src="{{asset('assets/js/page/bootstrap-modal.js')}}"></script>

<script>
    jQuery(document).ready(function($) {
        $('#mymodal').on('show.bs.modal', function(e) {
            var button = $(e.relatedTarget); 
            var modal = $(this);
            modal.find('.modal-body').load(button.data("remote"));
            modal.find('.modal-title').html(button.data("title"));
        });
    });
</script>


{{-- <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
                
            </div>
        </div>
    </div>
</div> --}}


<div class="modal fade" tabindex="-1" role="dialog" id="mymodal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
        {{-- <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>
