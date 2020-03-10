<ul class="nav-social">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}" style="color: white"><i class="fa fa-{{ $menu_item->title }}"></i></a></li>
    @endforeach
</ul>
