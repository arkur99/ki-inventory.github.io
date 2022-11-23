@include('layout.partials.login')
@include('layout.partials.register')
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">
        <div class="brand-container">
            <img src="{{ url('img/altie.png')}}" alt="Al-Ittihad" class=brand>
        </div>
        <div class="brand-caption">
            <p class="title">Pondok Pesantren Al-ittihad</p>
            <p class="caption">Karang tengah Cianjur</p>
        </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">beranda</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/list">List Data</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/lowongan">lowongan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/artikel">artikel</a>
        </li>
        <button class=" btn bg-success text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#login-modal">
          <i class="fas fa-arrow-right-to-bracket" ></i>
          login
        </button>
        
        
        </ul>
     
    </div>
  </div>
</nav>
<div class="w-100 bg-secondary py-2 ">
        <marquee behavior="" direction=""> hello world</marquee>
</div>