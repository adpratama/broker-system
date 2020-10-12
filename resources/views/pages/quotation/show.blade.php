<form action="{{ route('quotation.update', $item->id) }}" method="POST">
   @csrf
   @method('PATCH')
   {{-- <p>This login form is taken from elements with <code>#modal-login-part</code> id.</p> --}}
   <input type="text" class="form-control" name="status" value="UNAPPROVED"  hidden readonly>
   <div class="form-group">
      <input type="date" 
         class="form-control "
         name="date" 
         value="{{ date('Y-m-d') }}" 
         readonly
         hidden>
   </div>
   <div class="buttons text-right">

   <button type="submit" class="btn btn-primary ">Publish</button>
   <button type="button" class="btn btn-danger " data-dismiss="modal" aria-label="Close">
      Cancel
    </button>
   </div>
</form>
