@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px">

        <form action="{{ route('register.store') }}" enctype="multipart/form-data" method="POST">

            @csrf

            @include('form.registration.form_category')
            <br><br>
            @include('form.registration.form_avatar')
            <br><br>
            @include('form.registration.form_basic')
            <br><br>
            @include('form.registration.form_contact')
            <br><br>
            @include('form.registration.form_academic')
            <br><br>
            @include('form.registration.form_experience')
            <br><br>
            @include('form.registration.form_attachment')
            <br><br>
            <input type="submit" class="primary-button btn btn-block" value="Register">

        </form>

    </div>

@endsection
