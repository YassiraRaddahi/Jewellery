@extends('layout.master_layout')

@section('title', 'account delete')

@section('content')
    
<div class="deletion-title-container">Delete account</div>

<p class="deletion-instructions">Fill in your login information to delete your account</p>

<div class="account-deletion-container">
    <form class="account-deletion-form" method="POST" action="#">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        {{-- <p class="deletion-reason-label">Reason for leaving:</p>
        <div class="reason-options-box">
            <label><input type="radio" name="reason" value='other_account' checked> I have another account</label><br>
            <label><input type="radio" name="reason" value='privacy_concerns'> I have privacy concerns</label><br>
            <label><input type="radio" name="reason" value='not_useful'> I don't find it useful</label><br>
            <label><input type="radio" name="reason" value='other_reason' id="other-reason-checkbox"> Other</label>
            <textarea id="other-reason-textarea" name='other_reason' placeholder="Please specify other reason"></textarea>
        </div> --}}
        <div class="deletion-button-group">
            <a href={{route('users.accountpage')}} class="cancel-button">Cancel</a>
            <button type="submit" class="confirm-deletion-button">Delete</button>
        </div>
    </form>
</div>
@endsection