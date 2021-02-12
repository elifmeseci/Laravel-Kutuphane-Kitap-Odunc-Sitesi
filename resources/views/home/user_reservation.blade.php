@extends('layouts.home')

@section('title', ' Make Reservation')

@section('content')
    <section class="main-container col2-right-layout">
        <div class="main container"><br><br>
            <div class="row">
            @include('home.usermenu')
            <!-- Main -->
            <div class="col-main col-sm-9">
                <div id="checkout-step-billing" class="step a-item">
                     <form id="co-billing-form" action="{{route('user_reservation_store')}}" method="post">
                        @csrf
                              <input type="hidden" id="billing:address_id">
                              <div class="customer-name">
                                  <div class="form-group">
                                      <label for="billing:firstname"> First Name<span class="required"></span></label>
                                      <br>
                                      <input type="text" id="billing:firstname" name="name"  value="{{ Auth::user()->name }}" title="First Name" class="input">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="billing:email">Email Address <span class="required"></span></label>
                                  <br>
                                  <input type="text" name="email" id="billing:email" value="{{ Auth::user()->email}}" title="Email Address" class="input">
                              </div>
                              <div class="form-group">
                                  <label for="billing:telephone">Telephone <span class="required"></span></label>
                                  <br>
                                  <input type="text" name="phone" title="Telephone" class="input-text" value="{{Auth::user()->phone}}" id="billing:telephone">
                              </div>
                             <div class="form-group">
                                 <label for="billing:bookdate">Book Date <span class="required"></span></label>
                                 <br>
                                 <input type="text" name="bookdate" title="Telephone" class="input-text" id="billing:telephone">
                             </div>
                             <div class="form-group">
                                 <label for="billing:returndate">Return Date <span class="required"></span></label>
                                 <br>
                                 <input type="text" name="returndate" title="Telephone" class="input-text" id="billing:telephone">
                             </div>
                             <div class="form-group">
                                 <label for="billing:day">Day <span class="required"></span></label>
                                 <br>
                                 <input type="text" name="days" title="Telephone" class="input-text" id="billing:telephone">
                             </div>
                              <div>
                                  <br>
                                  <button type="submit" class="button continue" ><span>Continue</span></button>
                              </div>
                     </form>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

