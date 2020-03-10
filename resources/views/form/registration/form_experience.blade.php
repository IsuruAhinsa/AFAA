<div class="section-title">
    <h2 class="title" style="color: #ae7d25">Working Experience</h2>
</div>

<div class="row">

    <div class="col-md-12">

        <label for="experience">Working Experience: <span style="font-weight: normal; color: grey">When and Where did you work?</span></label>
        <textarea
            name="experience"
            id="experience"
            class="input"
            placeholder="Type Your Working Experience"
            style="@error('experience') border: 2px solid red; @enderror height: 300px"

        >{{ old('experience') }}</textarea>
        @error('experience')
        <div style="color: red">{{ $message }}</div>
        @enderror
        <kbd>Format: Years, Position, Institution, City/Country.</kbd> <br>
        <span style="color: grey">
                    Example: 1981-1987, Dean of Faculty of Design, Harvard University, BOSTON/USA. <br>
                    *One entry of each line.
        </span>
    </div>

</div>
