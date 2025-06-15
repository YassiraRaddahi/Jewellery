<form id="update-personal-information-form" action="" method="POST">
    @csrf
    @method('Patch')
        <div>
            <label for="first-name-update">First Name</label>
            <input type="text" id="first-name-update" name="first-name-update" value="{{old('first-name-update', $user->first_name)}}" required>
        </div>
        <div>
            <label for="infix-update">Infix</label>
            <input type="text" id="infix-update" name="infix-update" value="{{old('infix-update', $user->infix)}}">
        </div>
        <div>
            <label for="last-name-update">Last Name</label>
            <input type="text" id="last-name-update" name="last-name-update" value="{{$user->last_name}}" required>
        </div>
        <div>
            <label for="phone-number-update">Phone Number</label>
            <input type="text" id="phone-number-update" name="phone-number-update" value="{{$user->phone}}">
        </div>
        <div>
            <button>Save</button>
        </div>
</form>