
@extends('layouts.basic')
@section('title', 'Account - Nour Sabil')
@section('css')
<link rel="stylesheet" href="css/account.css">
@endsection



@section('content')
    <h1 id="accountname">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h1>
    <img id="accountusername" 
     src="{{ Auth::user()->profile_picture ? asset('storage/profile_pictures/' . Auth::user()->profile_picture) : asset('images/default-profile.jpg') }}" 
     alt="Profile Picture">

<div id="accbutt">
    <a href="/profile"><button class="accountbutton">Sign in & Security</button></a>
    <a href="/profile"> <button class="accountbutton">New Post</button></a>
    <a href="/profile"> <button class="accountbutton">Change profilepicture</button></a>
    <a href="/profile"><button class="accountbutton">Reset Password</button></a>
    <a href="/profile"> <button class="accountbutton" >Reset Password</button></a>
</div>
@endsection

