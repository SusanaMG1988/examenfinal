<li class="nav-item {{(request()->is('/')) ? 'active' : '' }}">
    <a class="nav-link" href="{{route('inicio')}}">Home <span class="sr-only">(current)</span></a>
</li>
@auth

<li class="nav-item {{(request()->is('pasteles*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{asset('pasteles')}}" tabindex="-1">Pasteles</a>
</li>

@endAuth