@if(session('result'))
  <div id="comparison_modal" class="modal">
    <div class="modal-content">
      <h4>Calculation Success</h4>
      <p>Member Address : {{ session('result')->member_address_one }}</p>
      <p>Score: {{ session('result')->member_address_value }}</p>
      <p>Total Points : {{ session('result')->total_points }}</p>
      <p>Status : {{ session('result')->hasil }}</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

  <!-- Auto Fire Modal on Load -->
  <script>
      $(window).on('load',function(){
          $('#comparison_modal').modal('open');
      });
  </script>
@endif

@if(session('update_success'))
<script>
  $(document).ready(function(){
    swal("Success", "Your configuration has been saved!", "success");    
  })
</script>
@endif
