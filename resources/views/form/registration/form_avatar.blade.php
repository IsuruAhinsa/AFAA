@push('css')

@endpush

<div class="row" id="uploadForm" style="margin-top: 25px; margin-bottom: 25px;">

    <div class="col-md-4">

        <div class="text-center">

            <img
                src="{{ asset('uploads/avatars/default.png') }}"
                alt="user_avatar"
                id="default_avatar"
                style="
                    width: 300px;
                    height: 300px;
                    margin-right: 25px"
            >

        </div>

    </div>

    <div class="col-md-8">

        <label for="avatar">Upload Your Image</label>

        <input
            type="file"
            class="custom-file-input"
            id="avatar"
            name="avatar"
            value="{{ old('avatar') }}"
        >
        @error('avatar')
        <div style="color: red">{{ $message }}</div>
        @enderror
    </div>

</div>

@push('script')
    <script>
        function filePreview(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#default_avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#avatar").change(function () {
            filePreview(this);
        });
    </script>
@endpush
