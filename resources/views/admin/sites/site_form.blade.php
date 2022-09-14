<form class="form" method="POST" action="{{ route ( isset($site->id) ? 'admin.sites.update' : 'admin.sites.store')}}" enctype="multipart/form-data">
    @if (isset($site->id))
        @method('PUT')
    @else
        @method('POST')
    @endif
    @csrf
    <div class="form-body">
        @if (isset($site->id))
            <input hidden name="id" value="{{$site->id}}" />
        @endif
        
        <div class="row">
            <div class="col-md-6">
                {{-- Pictures --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select File</label>
                            <label  class="file center-block">
                                <input name="img_1" type="file" id="img_1">
                                <span class="file-custom"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Select File</label>
                            <label class="file center-block">
                                <input name="img_2" type="file" id="img_2">
                                <span class="file-custom"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Select File</label>
                            <label  class="file center-block">
                                <input name="img_3" type="file" id="img_3">
                                <span class="file-custom"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="projectinput5">Product Image(s)</label>
                        </div>
                        <figure class="col-md-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href={{isset($site) ? asset($site->img_1) : asset('uploads/images/sites/default.png')}} itemprop="contentUrl" data-size="480x360">
                                <img id="img_1_preview" class="img-thumbnail img-fluid" src={{isset($site) ? asset($site->img_1) : asset('uploads/images/sites/default.png')}} itemprop="thumbnail" alt="Image description" />
                            </a>
                        </figure>
                        <figure class="col-md-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href={{isset($site) ? asset($site->img_2) : asset('uploads/images/sites/default.png')}} itemprop="contentUrl" data-size="480x360">
                                <img id="img_2_preview" class="img-thumbnail img-fluid" src={{isset($site) ? asset($site->img_2) : asset('uploads/images/sites/default.png')}} itemprop="thumbnail" alt="Image description" />
                            </a>
                        </figure>
                        <figure class="col-md-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href={{isset($site) ? asset($site->img_3) : asset('uploads/images/sites/default.png')}} itemprop="contentUrl" data-size="480x360">
                                <img id="img_3_preview" class="img-thumbnail img-fluid" src={{isset($site) ? asset($site->img_3) : asset('uploads/images/sites/default.png')}} itemprop="thumbnail" alt="Image description" />
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="video_url">Video URL</label>
                            <input
                             class="form-control" 
                             type="text" 
                             name="video_url" 
                             placeholder="Video URL" 
                             id="video_url"
                             value = "{{ isset($site->video_url) ? $site->video_url : '' }}"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        {{-- Site name --}}
                        <div class="form-group">
                            <label for="name">Site Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{isset($site->name) ? $site->name : ''}}" />
                        </div>

                        {{-- Site name Amharic --}}
                        <div class="form-group">
                            <label for="name_amh">Site Name (በአማርኛ)</label>
                            <input id="name_amh" class="form-control" type="text" name="name_amh" value="{{isset($site->name_amh) ? $site->name_amh : ''}}" />
                        </div>

                        {{-- provider --}}
                        <div class="form-group">
                            <label for="provider">Provider</label>
                            <select id="provider" name="provider_id" class="form-control">
                                @if (!empty($providers))
                                    <option value="none" selected="" disabled="">Provider</option>
                                    @foreach ($providers as $provider)
                                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                                    @endforeach
                                @else
                                    <option value="none" selected="" disabled="">No Provider(s) yet</option>                                            
                                @endif
                            </select>
                        </div>

                        {{-- product type --}}
                        <div class="form-group">
                            <label for="product_type">Product Type</label>
                            <select id="product_type" name="product_type" class="form-control">
                                <option value="none" selected="" disabled="">Product Type</option>                                          
                                <option value="አፓርትመንት ቤቶች">አፓርትመንት ቤቶች</option>                                          
                                <option value="ዱፕሌክስ አፓርታማዎች">ዱፕሌክስ አፓርታማዎች</option>                                          
                                <option value="ቪላ">ቪላ</option>                                          
                                <option value="መሬት">መሬት</option>                                          
                            </select>
                        </div>

                        {{-- floors --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="floors">Floors</label>
                                    <input
                                     class="form-control" 
                                     type="number" 
                                     name="floors" 
                                     placeholder="Floors" 
                                     id="floors"
                                     value = "{{ isset($site->floors) ? $site->floors : '' }}"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="delivery">Delivery Time (in Months)</label>
                                    <input
                                     class="form-control" 
                                     type="number" 
                                     name="delivery" 
                                     placeholder="Deliver Time" 
                                     id="delivery"
                                     value = "{{ isset($site->delivery) ? $site->delivery : '' }}"
                                    />
                                </div>
                            </div>
                        </div>

                        {{-- featured bedrooms and size --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="featured_bedrooms">Featured Bedrooms</label>
                                    <input
                                     class="form-control" 
                                     type="number" 
                                     name="featured_bedrooms" 
                                     placeholder="Featured Bedrooms" 
                                     id="featured_bedrooms"
                                     value = "{{ isset($site->featured_bedrooms) ? $site->featured_bedrooms : '' }}"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="featured_size">Featured Size</label>
                                    <input
                                     class="form-control" 
                                     type="number" 
                                     name="featured_size" 
                                     placeholder="Featured Size" 
                                     id="featured_size"
                                     value = "{{ isset($site->featured_size) ? $site->featured_size : '' }}"
                                    />
                                </div>
                            </div>
                        </div>

                        {{-- house per floor and house price --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="houses_per_floor">Houses Per Floor</label>
                                    <input
                                     class="form-control" 
                                     type="number" 
                                     name="houses_per_floor" 
                                     placeholder="Featured Bedrooms" 
                                     id="houses_per_floor"
                                     value = "{{ isset($site->houses_per_floor) ? $site->houses_per_floor : '' }}"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">House Price Per Square Meter</label>
                                    <input
                                     class="form-control" 
                                     type="number" 
                                     name="price" 
                                     placeholder="Featured Size" 
                                     id="price"
                                     value = "{{ isset($site->price) ? $site->price : '' }}"
                                    />
                                </div>
                            </div>
                        </div>

                        {{-- shop price --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shop_price">Shop Price Per Square Meter</label>
                                    <input
                                     class="form-control" 
                                     type="number" 
                                     name="shop_price" 
                                     placeholder="Featured Size" 
                                     id="shop_price"
                                     value = "{{ isset($site->shop_price) ? $site->shop_price : '' }}"
                                    />
                                </div>
                            </div>
                        </div>

                        {{-- features --}}
                        <div class="row">
                            {{-- <div class="row"> --}}
                                <div class="col-md-12">
                                    <label for="remember-me">Features</label>
                                </div>
                            {{-- </div> --}}
                            <div class="col-xs-*">
                                
                                
                                <div class="form-group">
                                    @foreach($features as $feature)
                                        <input type="checkbox" name="features[]" id="remember-me" checked class="chk-remember ml-2" value="{{$feature->name}}">
                                        <label for="remember-me">{{$feature->name}}</label>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <div class="form-actions">
        <a href="/admin/sites" type="button" class="btn btn-warning mr-1">
            <i class="icon-cross2"></i> Cancel
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="icon-check2"></i> Save
        </button>
    </div>
</form>

@section('script')
<script type="text/javascript">
$(document).ready(function (e) {
 
   
    $('#img_1').change(function(){
             
     let reader = new FileReader();
  
     reader.onload = (e) => { 
  
       $('#img_1_preview').attr('src', e.target.result); 
     }
  
     reader.readAsDataURL(this.files[0]); 
    
    });

    $('#img_2').change(function(){
             
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#img_2_preview').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });

    $('#img_3').change(function(){
        
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#img_3_preview').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });
    
 });
</script>
@endsection