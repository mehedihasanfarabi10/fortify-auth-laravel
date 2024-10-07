


@guest

<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('login')}}">LogIn</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('register')}}">Register</a>
    </li>
   
   
  </ul>
    
@else

<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
    </li>
  </ul>

@endguest

@yield('content')