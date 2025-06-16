<form class="update-user-data-form" action="" method="POST">
    @csrf
    @method('Patch')
    <div class="update-user-data-label-input-container">
        <div>
            <label for="address-update">Address</label>
            <input type="text" id="address-update" name="address-update" value="{{old('address-update', $user->address)}}">
        </div>
        <div>
            <label for="zipcode-update">ZIP code</label>
            <input type="text" id="zipcode-update" name="zipcode-update" value="{{old('zipcode-update', $user->zipcode)}}">
        </div>
        <div>
            <label for="city-update">City</label>
            <input type="text" id="city-update" name="city-update" value="{{old('city-update', $user->city)}}">
        </div>
        <div>
            <label for="country-update">Country</label>
            <input type="text" id="country-update" name="country-update" value="{{old('country-update', $user->country)}}">
        </div>
    </div>
    <div class="update-user-data-button-container">
        <button type="submit" class="update-user-data-button" >Save</button>
    </div>
</form>