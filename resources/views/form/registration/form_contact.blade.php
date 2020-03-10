<div class="section-title">
    <h2 class="title" style="color: #ae7d25">Contact Information</h2>
</div>

<div class="row">

    <div class="col-md-6">

        <label for="country"><b>Country</b></label>
        <select class="input" id="country" name="country" style="@error('country') border: 2px solid red @enderror">
            <option selected disabled>----Select Country----</option>
            @foreach(\Illuminate\Support\Facades\DB::table('countries')->get() as $country)
                <option value="{{ $country->nicename }}">{{ $country->name . " (" . $country->iso . ")" }}</option>
            @endforeach
        </select>
        @error('country')
        <div style="color: red">{{ $message }}</div>
        @enderror
        <small style="color: darkgray">This is for postal purposes only.</small>
    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="telephone_1"><b>Contact Number 1</b></label>
            <input
                type="tel"
                placeholder="Enter Contact Number"
                name="telephone_1"
                id="telephone_1"
                class="input"
                style="@error('telephone_1') border: 2px solid red @enderror"
                value="{{ old('telephone_1') }}"
            >
            @error('telephone_1')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Should include area and country code.</small>
        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label for="state"><b>State</b></label>
            <input
                type="text"
                placeholder="Enter State"
                name="state"
                id="state"
                class="input"
                style="@error('state') border: 2px solid red @enderror"
                value="{{ old('state') }}"
            >
            @error('state')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">State or region.</small>
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="telephone_2"><b>Contact Number 2</b></label>
            <input
                type="tel"
                placeholder="Enter Contact Number"
                name="telephone_2"
                id="telephone_2"
                class="input"
                style="@error('telephone_2') border: 2px solid red @enderror"
                value="{{ old('telephone_2') }}"
            >
            @error('telephone_2')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Should include area and country code.</small>
        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label for="city"><b>City</b></label>
            <input
                type="text"
                placeholder="Enter City"
                name="city"
                id="city"
                class="input"
                style="@error('city') border: 2px solid red @enderror"
                value="{{ old('city') }}"
            >
            @error('city')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">City for your address.</small>
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="email"><b>Email Address</b></label>
            <input
                type="email"
                placeholder="Enter Email Address"
                name="email"
                id="email"
                class="input"
                style="@error('email') border: 2px solid red @enderror"
                value="{{ old('email') }}"
            >
            @error('email')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label for="street"><b>Street</b></label>
            <input
                type="text"
                placeholder="Enter Street"
                name="street"
                id="street"
                class="input"
                style="@error('street') border: 2px solid red @enderror"
                value="{{ old('street') }}"
            >
            @error('street')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Street address, Including apartment/site no and floor etc.</small>
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="nationality"><b>Nationality</b></label>
            <input
                type="text"
                placeholder="Enter Your Nationality"
                name="nationality"
                id="nationality"
                class="input"
                style="@error('nationality') border: 2px solid red @enderror"
                value="{{ old('nationality') }}"
            >
            @error('nationality')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Is where you are originally from.</small>
        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label for="zip"><b>Zip Code</b></label>
            <input
                type="text"
                placeholder="Enter Zip Code"
                name="zip"
                id="zip"
                class="input"
                style="@error('zip') border: 2px solid red @enderror"
                value="{{ old('zip') }}"
            >
            @error('zip')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Postal Code.</small>
        </div>

    </div>

    <div class="col-md-6">

        <label for="language_skill"><b>Language Skills</b></label>
        <textarea
            name="language_skill"
            id="language_skill"
            cols="30"
            rows="10"
            class="input"
            placeholder="Enter Language Skills"
            style="@error('language_skill') border: 2px solid red @enderror"
        >{{ old('language_skill') }}</textarea>
        @error('language_skill')
        <div style="color: red">{{ $message }}</div>
        @enderror
        <small style="color: darkgray">Which language do you speak? How well do you communicate with these languages?</small>
        <br>
        <kbd>Format: Language Name, Language Proficiency (Native|Near Native|Advanced|Intermediate|Pre-Intermediate|Beginner).</kbd> <br>
        <span style="color: grey">
                    Example: English (Near Native). <br>
                    *One entry of each line.
                </span>
    </div>

</div>
