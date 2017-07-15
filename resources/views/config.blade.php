@if(session('config'))
<script>
  $(document).ready(function(){
      $('.modal').modal('open');
  });
</script>

<div id="modal_config" class="modal" style="width:500px">
  <div class="modal-content">
    <h4>Parameters Configuration</h4>
    <div class="divider"></div>
    <form action="/config/submit" method="POST">
      {{ csrf_field() }}
      <div class="row">
        @for($i = 0; $i < count(session('config')); $i++)
        <div class="input-field col s6">
          <label class="active" for="{{session('config')[$i]->id}}">{{session('config')[$i]->name}}</label>
          <input name="{{session('config')[$i]->id}}" id="member_address_one" type="text" value="{{session('config')[$i]->value}}">
        </div>
        @endfor
      </div>
  </div>
  <div class="modal-footer">
    <button type="submit" name="action" class="btn-flat waves-effect waves-green">SUBMIT</button>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">CLOSE</a>
  </div>
  </form>
</div>
@endif
