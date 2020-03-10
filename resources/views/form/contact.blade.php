<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <label for="email" style="display: none"></label>
                <input class="input" type="email" name="email" placeholder="Email" id="email">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="subject" style="display: none"></label>
                <input class="input" type="text" name="subject" placeholder="Subject" id="subject">
            </div>
        </div>

        <div class="col-md-12">

            <div class="form-group">
                <label for="message" style="display: none"></label>
                <textarea class="input" name="message" placeholder="Message" id="message"></textarea>
            </div>

            <button class="primary-button" type="submit">Submit</button>

        </div>

    </div>

</form>
