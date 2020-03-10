<footer id="footer">

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <div class="footer-widget">

                    <div class="footer-logo">
                        <a href="#" class="logo">
                            <img src="{{ asset('img/logo.png') }}" class="img-responsive" alt="" width="75%">
                        </a>
                    </div>

                    <p style="color:#fff;">The main idea of this mega event is to motivate and Inspire who are involved as designers, models, and fashion photographers and Apparel Industry development in Sri Lankan Asia we can’t see an awarding ceremony like this and after this awarding ceremony, we think it will be a great place to give their hard work to be awarded.</p>
                    {{ menu('social', 'partials.menu.contact-social') }}

                </div>

            </div>

            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-title" style="color: lightgray">Countries</h3>
                    @include('partials.countries')
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-title" style="color: lightgray">Contact</h3>
                    <p style="margin-bottom: 0; color:white"><i class="fa fa-envelope"></i> {{setting('site.email1') }}</p>
                    <p style="color:#fff;">&nbsp;&nbsp;&nbsp;&nbsp; {{setting('site.email2') }}</p>
                    <p style="margin-bottom: 0; color:white"><i class="fa fa-phone"></i> {{setting('site.telephone1')}} </p>
                    <p style="color:#fff;">&nbsp;&nbsp;&nbsp;&nbsp;{{setting('site.telephone2')}} </p>
                </div>
            </div>

        </div>


        <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
                <ul class="footer-nav">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contacts</a></li>
                    <li><a href="{{ route('videos') }}">Videos</a></li>
                    <li><a href="{{ route('albums') }}">Images</a></li>
                </ul>
            </div>

            <div class="col-md-6 col-md-pull-6">

                <div class="footer-copyright">

                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <a href="http://codealent.com" target="_blank">Codealent</a>

                </div>

            </div>
        </div>

    </div>

</footer>
