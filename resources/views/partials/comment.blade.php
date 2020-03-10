{{--<div class="section-row">
    <div class="section-title">
        <h3 class="title">3 Comments</h3>
    </div>
    <div class="post-comments">
        <!-- comment -->
        <div class="media">
            <div class="media-left">
                <img class="media-object" src="{{ asset('img/avatar-2.jpg') }}" alt="">
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <h4>John Doe</h4>
                    <span class="time">5 min ago</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#" class="reply">Reply</a>
                <!-- comment -->
                <div class="media media-author">
                    <div class="media-left">
                        <img class="media-object" src="{{ asset('img/avatar-1.jpg') }}" alt="">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h4>John Doe</h4>
                            <span class="time">5 min ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="reply">Reply</a>
                    </div>
                </div>
                <!-- /comment -->
            </div>
        </div>
        <!-- /comment -->

        <!-- comment -->
        <div class="media">
            <div class="media-left">
                <img class="media-object" src="{{ asset('img/avatar-3.jpg') }}" alt="">
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <h4>John Doe</h4>
                    <span class="time">5 min ago</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#" class="reply">Reply</a>
            </div>
        </div>
        <!-- /comment -->
    </div>
</div>--}}

{{-- Comment Section ( laravelista /
comments ) --}}

@comments(['model' => $item])
