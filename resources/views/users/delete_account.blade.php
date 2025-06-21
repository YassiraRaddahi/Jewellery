@extends('layout.master_layout')

@section('title', 'Delete Account')

@section('content')
    
<div class="deletion-title-container">Delete account</div>

<p class="deletion-instructions">Fill in your login information to delete your account</p>

<div class="account-deletion-container">
    <form id="delete-account-form" class="account-deletion-form" method="POST" action="{{route('users.deleteAccount')}}">
        @csrf
        @method('DELETE')

        <label for="email">Email:</label>
        <input onkeydown="onEnterDeleteAccountForm(event)" type="email" id="email" name="email" value="{{old('email')}}" required>
        @if($errors->has('email'))
            <p class="error-message">
                {{$errors->first('email')}}
            </p>
        @endif

        <label for="password">Password:</label>
        <input onkeydown="onEnterDeleteAccountForm(event)" type="password" id="password" name="password" required>
        @if($errors->has('password'))
            <p class="error-message">
                {{$errors->first('password')}}
            </p>
        @endif

        @if($errors->has('general'))
            <p class="error-message">
                {{$errors->first('general')}}
            </p>
        @endif

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
            <button onclick="showDeleteAccountDialogOrErrors()" type="button" class="confirm-deletion-button">Delete</button>
        </div>

        <dialog id="delete-account-dialog">
            <div class="delete-account-dialog-content">
                <div id="delete-account-dialog-message-container">
                    <p>Are you sure you want to delete your account?</p>
                </div>
                <div class="delete-account-dialog-button-group">
                    <button onclick="closeDeleteAccountDialog()" type="button" id="cancel-deletion">Cancel</button>
                    <button type="submit" id="confirm-deletion">Delete</button>
                </div>
            </div>
        </dialog>
    </form>
</div>
@endsection