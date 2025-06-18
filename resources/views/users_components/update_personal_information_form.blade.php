<form class="update-user-data-form" action="{{route('users.updateData', ['sortData' => 'personal-information'])}}" method="POST">
    @csrf
    @method('Patch')
    <div class="update-user-data-label-input-container">
        <div>
            <label for="first-name-update">First Name</label>
            <input type="text" id="first-name-update" name="first-name-update" value="{{old('first-name-update', $user->first_name)}}" required>
            @if($errors->has('first-name-update'))
                <p class="error-message">{{ $errors->first('first-name-update') }}</p>
            @endif
        </div>
        <div>
            <label for="infix-update">Infix</label>
            <input type="text" id="infix-update" name="infix-update" value="{{old('infix-update', $user->infix)}}">
            @if($errors->has('infix-update'))
                <p class="error-message">{{ $errors->first('infix-update') }}</p>
            @endif
        </div>
        <div>
            <label for="last-name-update">Last Name</label>
            <input type="text" id="last-name-update" name="last-name-update" value="{{old('last-name-update', $user->last_name)}}" required>
        </div>
            @if($errors->has('last-name-update'))
                <p class="error-message">{{ $errors->first('last-name-update') }}</p>
            @endif
        <div>
            <label for="phone-number-update">Phone Number</label>
            <input type="tel" id="phone-number-update" name="phone-number-update" placeholder="e.g. +31623456789" value="{{old('phone-number-update', $user->phone)}}">
        </div>
            @if($errors->has('phone-number-update'))
                <p class="error-message">{{ $errors->first('phone-number-update') }}</p>
            @endif

            @if($errors->has('general'))
                <p class="error-message"> 
                    {{$errors->first('general')}}
                </p>
            @endif
    </div>
    <div class="update-user-data-button-container">
        <button type="submit" class="update-user-data-button" >Save</button>
    </div>
</form>