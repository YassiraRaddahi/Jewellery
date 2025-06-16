<form class="update-user-data-form" action="" method="POST">
    @csrf
    @method('Patch')
    <div class="update-user-data-label-input-container">
        <div>
            <label for="email-update">Email Address</label>
            <input type="email" id="email-update" name="email-update" value="{{old('email-update', $user->email)}}" required>
        </div>
        <div>
            <label for="password-update">Password</label>
            <input type="password" id="password-update" name="password-update" required>
        </div>
        <div>
            <label for="confirm-password-update">Confirm Password</label>
            <input type="password" id="confirm-password-update" name="confirm-password-update" required>
        </div>
    </div>
    <div class="update-user-data-button-container">
        <button type="submit" class="update-user-data-button" >Save</button>
    </div>
</form>