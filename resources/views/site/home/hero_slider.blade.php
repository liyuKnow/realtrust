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
              <span class="aa-top-slider-catg">{{$site->product_type}}</span>
              <h2 class="aa-top-slider-title">{{$site->name}} Site</h2>
              <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>{{$site->featured_size}} Square Meter</p>
              <span class="aa-top-slider-off">30% OFF</span>
              <p class="aa-top-slider-price">{{$site->house_price_per_carre * 54}}</p>
              <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
            </div>
            <!-- / Top slider content -->
          </div>
          <!-- / Top slider single slide -->
        @endforeach
      </div>
    </div>
  </section>