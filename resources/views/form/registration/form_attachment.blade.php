{{--
@extends('layouts.app')

@push('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css">
@endpush

@section('content')

    <div class="container" style="margin-top: 50px">

        <div class="section-title">
            <h2 class="title" style="color: #ae7d25">Attachments</h2>
        </div>

        <form action="{{ route('attachment.upload') }}" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">

        </form>

    </div>

@endsection
--}}

<div class="row">

    <div class="col-md-12">

        <div class="section-title">
            <h2 class="title" style="color: #ae7d25">Upload Attachments</h2>
        </div>

        <input type="file" name="attachment[]" multiple>

    </div>

</div>


