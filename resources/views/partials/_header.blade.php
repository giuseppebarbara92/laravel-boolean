<header>
  <div class="header-left">
    <img src="{{ asset('img/boolean.png')}}" alt="">
  </div>
  <div class="header-right">
    <ul>
      <li class="{{ (Request::route()->getName() == 'home') ? 'active' : null }}">
        <a href="{{ route('home')}}">Home</a>
      </li>
      <li class="{{ (Request::route()->getName() == 'students.index') ? 'active' : null }}">
        <a href="{{ route('students.index')}}">Studenti</a>
      </li>
      <li class="{{ (Request::route()->getName() == 'static.privacy') ? 'active' : null }}">
        <a href="{{ route('static.privacy')}}">Privacy Policy</a>
      </li>
      <li class="{{ (Request::route()->getName() == 'static.work') ? 'active' : null }}">
        <a href="{{ route('static.work')}}">Lavora con noi</a>
      </li>
    </ul>
  </div>
</header>
