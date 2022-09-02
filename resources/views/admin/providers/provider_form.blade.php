<form class="form" method="POST" action="{{ route ( isset($provider->id) ? 'admin.providers.update' : 'admin.providers.store')}}">
    @if (isset($provider->id))
        @method('PUT')
    @else
        @method('POST')
    @endif
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-md-6 offset-md-2">
                <div class="form-group">
                    <label for="projectinput5">Real Estate Provider Name</label>
                    @if (isset($provider->id))
                        <input hidden name="id" value="{{$provider->id}}" />
                    @endif
                    <input
                     class="form-control border-primary" 
                     type="name" 
                     name="name" 
                     placeholder="Provider Name" 
                     id="userinput5"
                     value = "{{ isset($provider->name) ? $provider->name : '' }}"
                     >
                </div>
            </div>
        </div>


    </div>

    <div class="form-actions">
        <a href="/admin/providers" type="button" class="btn btn-warning mr-1">
            <i class="icon-cross2"></i> Cancel
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="icon-check2"></i> Save
        </button>
    </div>
</form>