<div class="row nav-container">
  <nav class="navbar navbar-expand-lg navbar-light col-sm-12">
    <div class="logo">
      <a href="{{ route('homepage') }}"><img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Logo"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse voci-nav" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('homepage') }}">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('corso') }}">CORSO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('metodo') }}">METODO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dopoilcorso') }}">DOPO IL CORSO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lezionegratuita') }}">LEZIONE GRATUITA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link iscriviti" href="{{ route('iscriviti') }}">iscriviti</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="nav-spacing">

</div>
