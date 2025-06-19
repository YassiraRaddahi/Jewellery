<form class="update-user-data-form" action="{{route('users.updateAddressDetails')}}" method="POST">
    @csrf
    @method('Patch')
    <div class="update-user-data-label-input-container">
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{old('address', $user->address)}}">
        </div>
        @if($errors->has('address'))
            <p class="error-message"> 
                {{$errors->first('address')}}
            </p>
        @endif
        <div>
            <label for="zipcode">ZIP code</label>
            <input type="text" id="zipcode" name="zipcode" value="{{old('zipcode', $user->zipcode)}}">
        </div>
        @if($errors->has('zipcode'))
            <p class="error-message"> 
                {{$errors->first('zipcode')}}
            </p>
        @endif
        <div>
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="{{old('city', $user->city)}}">
        </div>
        @if($errors->has('city'))
            <p class="error-message"> 
                {{$errors->first('city')}}
            </p>
        @endif
        <div>
            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="{{old('country', $user->country)}}">
        </div>
        @if($errors->has('country'))
            <p class="error-message"> 
                {{$errors->first('country')}}
            </p>
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