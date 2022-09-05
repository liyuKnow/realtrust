<form class="form" method="POST" action="{{ route ( isset($site->id) ? 'admin.sites.update' : 'admin.sites.store')}}">
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
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="projectinput5">Provider</label>
                            <select id="projectinput5" name="provider" class="form-control">
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

                        <div class="form-group">
                            <label for="projectinput5">Product Type</label>
                            <select id="projectinput5" name="product_type" class="form-control">
                                <option value="none" selected="" disabled="">Product Type</option>                                          
                                <option value="apartment">Apartment</option>                                          
                                <option value="duplex">Duplex</option>                                          
                                <option value="villa">Villa</option>                                          
                                <option value="land">Land</option>                                          
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="projectinput5">Video URL</label>
                            <input
                             class="form-control border-primary" 
                             type="name" 
                             name="name" 
                             placeholder="site Name" 
                             id="userinput5"
                             value = "{{ isset($site->name) ? $site->name : '' }}"
                             >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    @if (isset($site->id))
                    <input hidden name="id" value="{{$site->id}}" />
                    @endif
                    <label for="projectinput5">Real Estate Provider Name</label>
                    <input
                     class="form-control border-primary" 
                     type="name" 
                     name="name" 
                     placeholder="site Name" 
                     id="userinput5"
                     value = "{{ isset($site->name) ? $site->name : '' }}"
                     >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    @if (isset($site->id))
                    <input hidden name="id" value="{{$site->id}}" />
                    @endif
                    <label for="projectinput5">Real Estate Provider Name</label>
                    <input
                     class="form-control border-primary" 
                     type="name" 
                     name="name" 
                     placeholder="site Name" 
                     id="userinput5"
                     value = "{{ isset($site->name) ? $site->name : '' }}"
                     >
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