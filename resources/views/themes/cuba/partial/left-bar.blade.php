<div class="left-bar">

    <form method="Post" action="{{route('changeVersion')}}">

        @csrf
        <x-select >
            @foreach($versions as $version)
                <option
                        @if($version->id==$cur_version)
                        selected
                        @endif

                        value="{{$version->id}}">Версия {{$version->id}}</option>
            @endforeach
        </x-select>
        <input type="hidden" name="path" value="{{$page->link_path}}" />
        <button type="submit" class="button-version  theme-bg">
            Change Version
        </button>
    </form>


    <div class="left-menu">
        @foreach($links as $link)

            <x-menu-link path="v/{{$cur_version}}/{{$link->link_path}}">
                {{ $link->link_text}}
            </x-menu-link>
        @endforeach


    </div>




</div>