@php
    use App\Http\Controllers\Controller;
    $categories =Controller::categories();
@endphp
<ul>
    @foreach($categories as $category)
        <li><a href="{{ route($category->route, [$category->id]) }}">{{ $category->name }} <span>{{ $category->id }}</span></a></li>
    @endforeach
</ul>
