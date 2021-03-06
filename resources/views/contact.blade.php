@extends('layouts.app')

@section('content')

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="section-row">
                        <div class="section-title">
                            <h2 class="title">Contact Information</h2>
                        </div>
                        <p>Malis debet quo et, eam an lorem quaestio. Mea ex quod facer decore, eu nam mazim postea. Eu deleniti pertinacia ius. Ad elitr latine eam, ius sanctus eleifend no, cu primis graecis comprehensam eum. Ne vim prompta consectetuer, etiam signiferumque ea eum.</p>
                        <ul class="contact">
                            <li><i class="fa fa-phone"></i>{{setting('site.telephone')}}</li>
                            <li><i class="fa fa-envelope"></i> <a href="#">{{setting('site.email')}}</a></li>
                            <li><i class="fa fa-map-marker"></i> {{setting('site.address')}}</li>
                        </ul>
                    </div>

                    <div class="section-row">
                        <div class="section-title">
                            <h2 class="title">Mail us</h2>
                        </div>
                        @if(Session::has('success'))
                            @include('components.success')
                        @endif
                        @if ($errors->any())
                            @include('components.error')
                        @endif
                        @include('form.contact')
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- social widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Social Media</h2>
                        </div>
                        <div class="social-widget">
                            <ul>
                                <li>
                                    <a href="#" class="social-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <span>21.2K<br>Followers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <span>10.2K<br>Followers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                        <span>5K<br>Followers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /social widget -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection
