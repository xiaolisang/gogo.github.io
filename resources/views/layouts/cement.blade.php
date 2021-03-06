@extends('layouts.slide')

    @section('cement')
<!-- gray bg -->  
  <section class="container tm-home-section-1" id="more">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <!-- Nav tabs -->
        <div class="tm-home-box-1">
          <ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
              <li role="presentation" class="active">
                <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Hotel</a>
              </li>
              <li role="presentation">
                <a href="#car" aria-controls="car" role="tab" data-toggle="tab">Car Rental</a>
              </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                <div class="tm-search-box effect2">
                <form action="#" method="post" class="hotel-search-form">
                  <div class="tm-form-inner">
                    <div class="form-group">
                             <select class="form-control">
                              <option value="">-- Select Hotel -- </option>
                              <option value="shangrila">Shangri-La</option>
                        <option value="chatrium">Chatrium</option>
                        <option value="fourseasons">Four Seasons</option>
                        <option value="hilton">Hilton</option>
                      </select> 
                          </div>
                          <div class="form-group">
                              <div class='input-group date' id='datetimepicker1'>
                                  <input type='text' class="form-control" placeholder="Check-in Date" />
                                  <span class="input-group-addon">
                                      <span class="fa fa-calendar"></span>
                                  </span>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class='input-group date' id='datetimepicker2'>
                                  <input type='text' class="form-control" placeholder="Check-out Date" />
                                  <span class="input-group-addon">
                                      <span class="fa fa-calendar"></span>
                                  </span>
                              </div>
                          </div>
                          <div class="form-group margin-bottom-0">
                              <select class="form-control">
                              <option value="">-- Guests -- </option>
                              <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5p">5+</option>
                      </select> 
                          </div>
                  </div>              
                        <div class="form-group tm-yellow-gradient-bg text-center">
                          <button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
                        </div>  
                </form>
              </div>
              </div>
              <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
              <div class="tm-search-box effect2">
                <form action="#" method="post" class="hotel-search-form">
                  <div class="tm-form-inner">
                    <div class="form-group">
                             <select class="form-control">
                              <option value="">-- Select Model -- </option>
                              <option value="shangrila">BMW</option>
                        <option value="chatrium">Mercedes-Benz</option>
                        <option value="fourseasons">Toyota</option>
                        <option value="hilton">Honda</option>
                      </select> 
                          </div>
                          <div class="form-group">
                              <div class='input-group date-time' id='datetimepicker3'>
                                  <input type='text' class="form-control" placeholder="Pickup Date" />
                                  <span class="input-group-addon">
                                      <span class="fa fa-calendar"></span>
                                  </span>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class='input-group date-time' id='datetimepicker4'>
                                  <input type='text' class="form-control" placeholder="Return Date" />
                                  <span class="input-group-addon">
                                      <span class="fa fa-calendar"></span>
                                  </span>
                              </div>
                          </div>  
                          <div class="form-group">
                             <select class="form-control">
                              <option value="">-- Options -- </option>
                              <option value="">Child Seat</option>
                        <option value="">GPS Navigator</option>
                        <option value="">Insurance</option>
                      </select> 
                          </div>                       
                  </div>              
                        <div class="form-group tm-yellow-gradient-bg text-center">
                          <button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
                        </div>  
                </form>
              </div>
              </div>            
          </div>
        </div>                
      </div>

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
          <img src="{{asset('img/index-01.jpg')}}" alt="image" class="img-responsive">
          <a href="#">
            <div class="tm-green-gradient-bg tm-city-price-container">
              <span>New York</span>
              <span>$6,600</span>
            </div>  
          </a>      
        </div>        
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
          <img src="{{asset('img/index-02.jpg')}}" alt="image" class="img-responsive">
          <a href="#">
            <div class="tm-red-gradient-bg tm-city-price-container">
              <span>Paris</span>
              <span>$4,200</span>
            </div>  
          </a>          
        </div>        
      </div>
    </div>
@endsection
