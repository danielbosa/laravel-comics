<header class="">
    <div>
        <div class="db-container db-d-flex">
            <div class="db-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
            </div>
            <ul>
                @foreach ( $headerOptions as $option)
                    <li>
                        <a href="{{$option['link']}}">{{$option['name']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
