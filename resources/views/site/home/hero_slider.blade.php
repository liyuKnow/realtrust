<section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        @foreach ($sites as $site)
          <!-- Top slider single slide -->
          <div class="aa-top-slider-single">
            <img src="{{asset($site->img_1)}}" alt="img">
            <!-- Top slider content -->
            <div class="aa-top-slider-content">
              <div class="aa-tag for-sale">
                {{$site->product_type}}
              </div>
              {{-- <span class="aa-top-slider-catg"></span> --}}
              <h2 class="aa-top-slider-title">{{$site->name_amh}} ሳይት</h2>
              <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>እስከ {{$site->featured_size}} ካሬ ሜትር ድረስ</p>
              <span class="aa-top-slider-off">5% ቅናሽ</span>
              <span class="aa-top-slider-off">ክ ባለ {{$site->featured_bedrooms}} መኝታ ጀምሮ</span>
              <span class="aa-top-slider-off">እስከ {{$site->featured_size}} ካሬ ሜትር ድረስ</span>
              <p class="aa-top-slider-price">{{$site->price * 52}}</p>
              <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
            </div>
            <!-- / Top slider content -->
          </div>
          <!-- / Top slider single slide -->
        @endforeach
      </div>
    </div>
  </section>