<div class="section-title">
    <h2 class="title" style="color: #ae7d25">Basic Information</h2>
</div>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label for="first_name"><b>First Name</b></label>
            <input
                type="text"
                placeholder="Enter First Name"
                name="first_name"
                id="first_name"
                class="input"
                style="@error('first_name') border: 2px solid red @enderror"
                value="{{ old('first_name') }}"
            >
            @error('first_name')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="last_name"><b>Last Name</b></label>
            <input
                type="text"
                placeholder="Enter Last Name"
                name="last_name"
                id="last_name"
                class="input"
                style="@error('last_name') border: 2px solid red @enderror"
                value="{{ old('last_name') }}"
            >
            @error('last_name')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="nic"><b>NIC / Passport Number</b></label>
            <input
                type="text"
                placeholder="Enter NIC / Passport Number"
                name="nic"
                id="nic"
                class="input"
                style="@error('nic') border: 2px solid red @enderror"
                value="{{ old('nic') }}"
            >
            @error('nic')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">

        <label for="gender"><b>Gender</b></label>

        <ul class="list-inline">
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="gender" value="Male" checked>
                        Male
                    </label>
                </div>
            </li>
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="gender" value="Female">
                        Female
                    </label>
                </div>
            </li>
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="gender" value="Other">
                        Rather not Say
                    </label>
                </div>
            </li>
        </ul>

    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="birthday"><b>Birthday</b></label>
            <input
                class="input"
                type="date"
                id="birthday"
                name="birthday"
                placeholder="Birthday"
                style="@error('birthday') border: 2px solid red @enderror"
                value="{{ old('birthday') }}"
            >
            @error('birthday')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="body_color"><b>Body Color</b></label>
            <input
                class="input"
                type="text"
                id="body_color"
                name="body_color"
                placeholder="Enter Body Color"
                style="@error('body_color') border: 2px solid red @enderror"
                value="{{ old('body_color') }}"
            >
            @error('body_color')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Please enter your body color if you are selected fashion category.</small>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="body_weight"><b>Body Weight</b></label>
            <div class="input-group">
            <input
                class="input"
                type="text"
                id="body_weight"
                name="body_weight"
                placeholder="Enter Body Weight"
                style="@error('body_weight') border: 2px solid red; @enderror border-right:none"
                value="{{ old('body_weight') }}"
            >
            <div class="input-group-addon">Kg</div>
            </div>
            @error('body_weight')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Please enter your body weight if you are selected fashion category.</small>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="body_height"><b>Body Height</b></label>
            <input
                class="input"
                type="text"
                id="body_height"
                name="body_height"
                placeholder="Enter Body Height"
                style="@error('body_height') border: 2px solid red @enderror"
                value="{{ old('body_height') }}"
            >
            @error('body_height')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Please enter your body height if you are selected fashion category.</small>
            <br>
            <kbd>Format: Feets Inches.</kbd> <br>
            <span style="color: grey">
                    Example: 5' 10".
                </span>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="hair_color"><b>Hair Color</b></label>
            <input
                class="input"
                type="text"
                id="hair_color"
                name="hair_color"
                placeholder="Enter Hair Color"
                style="@error('hair_color') border: 2px solid red @enderror"
                value="{{ old('hair_color') }}"
            >
            @error('hair_color')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <small style="color: darkgray">Please enter your hair color if you are selected fashion category.</small>
        </div>
    </div>

</div>
