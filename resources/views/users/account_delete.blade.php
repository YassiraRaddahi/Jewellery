@extends('layout.master_layout')

@section('title', 'account delete')

@section('content')
    
        <div class="deletion-title-box">Delete account</div>
        <p class="deletion-instructions">Fill in your log in information to delete your account</p>
        <div class="account-deletion-container">
        <form class="account-deletion-form">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <p class="deletion-reason-label">Reason for leaving:</p>
            <div class="reason-options-box">
                <label><input type="checkbox" name="reason" checked> I don't find it useful</label><br>
                <label><input type="checkbox" name="reason"> I have privacy concerns</label><br>
                <label><input type="checkbox" name="reason"> I have another account</label><br>
                <label><input type="checkbox" name="reason"> Other</label>
                <input type="text" class="other-reason-input" placeholder="Please specify other reason">
            </div>
            <div class="deletion-button-group">
                <button type="button" class="cancel-button">Cancel</button>
                <button type="submit" class="confirm-deletion-button">Delete</button>
            </div>
        </form>
    </div>
@endsection