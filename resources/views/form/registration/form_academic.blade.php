<div class="section-title">
    <h2 class="title" style="color: #ae7d25">Academic Qualifications</h2>
</div>

<div class="row">

    <div class="col-md-2">

        <div class="form-group">
            <label for="year"><b>Year</b></label>
            <input
                type="text"
                placeholder="Enter Year"
                name="year"
                id="year"
                class="input"
                style="@error('year') border: 2px solid red @enderror"
                value="{{ old('year') }}"
            >
            @error('year')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-md-4">

        <div class="form-group">
            <label for="university"><b>University</b></label>
            <input
                type="text"
                placeholder="Enter University"
                name="university"
                id="university"
                class="input"
                style="@error('university') border: 2px solid red @enderror"
                value="{{ old('university') }}"
            >
            @error('university')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-md-6">

        <label for="degree"><b>Degree Programme</b></label>
        <input
            type="text"
            placeholder="Enter Degree Programme"
            name="degree"
            id="degree"
            class="input"
            style="@error('degree') border: 2px solid red @enderror"
            value="{{ old('degree') }}"
        >
        @error('degree')
        <div style="color: red">{{ $message }}</div>
        @enderror
    </div>

</div>
