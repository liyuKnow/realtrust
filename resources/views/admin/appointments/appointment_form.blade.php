<form class="form" action="{{ route ('admin.appointemnt.store')}}" method="POST">
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput5">Sales</label>
                    <select id="projectinput5" name="sales" class="form-control">
                        @if (!empty($users))
                            <option value="none" selected="" disabled="">Sales</option>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->first_name}}{{$user->last_name}}</option>
                            @endforeach
                        @else
                            <option value="none" selected="" disabled="">No Sales yet</option>                                            
                        @endif
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput5">Client</label>
                    <select id="projectinput5" name="client" class="form-control">
                        @if (!empty($clients))
                            <option value="none" selected="" disabled="">Client</option>
                            @foreach ($clients as $client)
                            <option value="{{$client->id}}">{{$client->first_name}}{{$client->last_name}}</option>
                            @endforeach
                        @else
                            <option value="none" selected="" disabled="">No Client yet</option>                                            
                        @endif
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput5">Part of the Day</label>
                    <select id="projectinput5" name="part_of_day" class="form-control">
                            <option value="morning">Morning</option>                                 
                            <option value="Afternoon">afternoon</option>                                 
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="timesheetinput3">Date</label>
                    <div class="position-relative has-icon-left">
                        <input type="date" id="timesheetinput3" class="form-control" name="date">
                        <div class="form-control-position">
                            <i class="icon-calendar5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="form-actions">
        <a href="/admin/appointments" type="button" class="btn btn-warning mr-1">
            <i class="icon-cross2"></i> Cancel
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="icon-check2"></i> Save
        </button>
    </div>
</form>