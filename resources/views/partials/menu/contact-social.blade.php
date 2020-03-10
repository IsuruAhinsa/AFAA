<ul class="contact-social">
    @foreach($items as $menu_item)
        <li>
            <a href="{{ $menu_item->link() }}" class="social-{{ $menu_item->title }}">
                <i class="fa fa-{{ $menu_item->title }}"></i>
            </a>
        </li>
    @endforeach
</ul>
