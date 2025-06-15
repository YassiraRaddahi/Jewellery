@extends('layout.master_layout')

@section('title', $title)

@section('content')
<div class="update-personal-data-header">
    <div class="go-back-link-container">
        <a href="{{route('users.personaldata')}}" class="go-back-link"><i class="fa-solid fa-left-long"></i>Go Back</a>
    </div>
    <h1 class="title">Update</h1>
</div>
<p>{{$sortDataToUpdate}}</p>

<div class="update-user-data-container">
    @include($updateUserDataForm)
</div>

@endsection