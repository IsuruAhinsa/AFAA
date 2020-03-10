<div class="row">

    <div class="col-md-12">

        <label for="category"><b>Select Category</b></label>
        <select class="input" id="category" name="category" style="@error('category') border: 2px solid red @enderror">
            <option selected disabled>----Select Category----</option>
            @foreach($categories as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
        <div style="color: red">{{ $message }}</div>
        @enderror

    </div>

</div>
