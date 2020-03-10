@php
use App\Http\Controllers\Controller;
$categories = Controller::categories()
@endphp

<div id="nav-aside">

    <ul class="nav-aside-menu">

        <li><a href="{{ URL::to('/') }}">Home</a></li>

        <li class="has-dropdown"><a>Gallery</a>
            <ul class="dropdown">
                <li><a href="{{ route('videos') }}">Video</a></li>
                <li><a href="{{ route('albums') }}">Image</a></li>
            </ul>
        </li>

        <li class="has-dropdown"><a>Categories</a>
            <ul class="dropdown">
                @foreach($categories as $category)
                    <li><a href="{{ route($category->route, [$category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </li>

        <li class="has-dropdown"><a>Resources</a>
            <ul class="dropdown">
                <li><a href="{{ route('afaa') }}">What is AFAA?</a></li>
                <li><a href="{{ route('judges') }}">Jury</a></li>
            </ul>
        </li>

        <li><a href="{{ route('news') }}">News</a></li>

        <li><a href="{{ route('contact') }}">Contact</a></li>

        <li><a href="{{ route('about') }}">About Us</a></li>

    </ul>

    <br>

    <div class="text-center">
        <a href="{{ route('register.index') }}" class="primary-button" style="border-radius: 2rem">Register Now</a>
    </div>

    <button class="nav-close nav-aside-close" style="color:#fff;"><span></span></button>

</div>
