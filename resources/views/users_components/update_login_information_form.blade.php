<form class="update-user-data-form" action="{{route('users.updateLoginInformation')}}" method="POST">
    @csrf
    @method('Patch')
    <div class="update-user-data-label-input-container">
        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="{{old('email', $user->email)}}" required>
        </div>
        @if($errors->has('email'))
            <p class='error-message'>{{ $errors->first('email') }}</p>
        @endif
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        @if($errors->has('password'))
            <p class='error-message'>{{ $errors->first('password') }}</p>
        @endif
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
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