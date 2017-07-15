@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12 grey-text text-darken-2">
      <h3>Data Comparison</h3>
      <div id="progress" class="progress">
        <div id="comparison_progress" class="indeterminate"></div>
      </div>
    </div>
    <form action="/compare/process" method="POST">
      {{ csrf_field() }}
      <!-- Data One in Left -->
      <div class="col s6">
        <h5 class="grey-text text-darken-2">Data One</h5>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input name="member_address_one" id="member_address_one" type="text" class="validate">
            <label for="member_address_one">Member Address</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input name="shipping_address_one" id="shipping_address_one" type="text" class="validate">
            <label for="shipping_address_one">Shipping Address</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">payment</i>
            <input name="payment_one" id="payment_one" type="text" class="validate">
            <label for="payment_one">Payment ID</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">phone</i>
            <input name="mobile_one" id="mobile_one" type="tel" class="validate">
            <label for="mobile_one">Mobile Phone</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input name="member_email_one" id="member_email_one" type="tel" class="validate">
            <label for="member_email_one">Member E-mail</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input name="order_email_one" id="order_email_one" type="tel" class="validate">
            <label for="order_email_one">Order E-mail</label>
          </div>
        </div>
      </div>
      <!-- Data Two in Right -->
      <div class="col s6">
        <h5 class="grey-text text-darken-2">Data Two</h5>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input name="member_address_two" id="member_address_two" type="text" class="validate">
            <label for="member_address_two">Member Address</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input name="shipping_address_two" id="shipping_address_two" type="text" class="validate">
            <label for="shipping_address_two">Shipping Address</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">payment</i>
            <input name="payment_two" id="payment_two" type="text" class="validate">
            <label for="payment_two">Payment ID</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">phone</i>
            <input name="mobile_two" id="mobile_two" type="tel" class="validate">
            <label for="mobile_two">Mobile Phone</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input name="member_email_two" id="member_email_two" type="tel" class="validate">
            <label for="member_email_two">Member E-mail</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input name="order_email_two" id="order_email_two" type="tel" class="validate">
            <label for="order_email_two">Order E-mail</label>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="col s12">
        <button id="btn_dummy" class="btn teal lighten-3 waves-effect waves-light">Auto Fill With Dummy Data</button>
        <button id="btn_compare" type="submit" name="action" class="btn teal lighten-3 waves-effect waves-light right">
          Process
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
