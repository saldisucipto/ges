<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="span8">
        <div class="navbar navbar-static-top">
            <div class="navigation">
                <nav>
                    <ul class="nav topnav">
                        @php
                        $url = url()->current();
                        $base = config('app.url');
                        @endphp
                        @foreach ($nav as $item)
                        <li
                            class="{@if($url===$base.'/'.$item->slugs || $base.$item->slugs === $url.'/') active @else '' @endif}">
                            <a href=" {{$item->slugs}}"><i class="@if($item->title == 'Home') icon-home @endif"></i>
                                {{$item->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
