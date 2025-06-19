<form class="update-user-data-form" action="{{route('users.updatePersonalInformation')}}" method="POST">
    @csrf
    @method('Patch')
    <div class="update-user-data-label-input-container">
        <div>
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first-name" value="{{old('first-name', $user->first_name)}}" required>
        </div>
        @if($errors->has('first-name'))
                <p class="error-message">{{ $errors->first('first-name') }}</p>
            @endif
        <div>
            <label for="infix">Infix</label>
            <input type="text" id="infix" name="infix" value="{{old('infix', $user->infix)}}">
        </div>
        @if($errors->has('infix'))
                <p class="error-message">{{ $errors->first('infix') }}</p>
            @endif
        <div>
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last-name" value="{{old('last-name', $user->last_name)}}" required>
        </div>
            @if($errors->has('last-name'))
                <p class="error-message">{{ $errors->first('last-name') }}</p>
            @endif
        <div>
            <label for="phone-number">Phone Number</label>
            <input type="tel" id="phone-number" name="phone-number" placeholder="e.g. +31623456789" value="{{old('phone-number', $user->phone)}}">
        </div>
            @if($errors->has('phone-number'))
                <p class="error-message">{{ $errors->first('phone-number') }}</p>
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