@extends('cat')
@section('footer')
    <p>我挖了一個洞在這~</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.5301792594214!2d121.25908441405059!3d24.94807024788684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468227549ca3c2d%3A0x289558c58b53f74f!2zMzIw5qGD5ZyS5biC5Lit5aOi5Y2A6I-v56Wl5LiA6KGXMTbomZ8!5e0!3m2!1szh-TW!2stw!4v1658498823962!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection

@section('nav')
  <style>
    .bg-option{
      background-image: linear-gradient(rgb(254, 139, 158),rgb(255, 205, 214),white)
    }
  </style>
<nav class="navbar bg-option">
  <div class="container-fluid">
    <img src="https://lovedog.tw/wp-content/uploads/%E5%AE%98%E7%B6%B2%E7%94%A8%E5%B0%8F%E5%9C%96.png.webp" alt="" width="200" class="img-fluid">
    <div role="search">
      <ul class="navbar-nav d-block">
        <li class="nav-item mx-2" style="display: inline-block">
          <a class="nav-link active" aria-current="page" href="#">志工服務<i class="fa-solid fa-handshake-angle"></i></a>
        </li>
        <li class="nav-item mx-2" style="display: inline-block">
          <a class="nav-link" href="#">常見Q & A</a>
        </li>
        <li class="nav-item mx-2" style="display: inline-block">
          <a class="nav-link" href="#">公益合作</a>
        </li>
<li class="nav-item mx-2" style="display: inline-block">
          <a class="nav-link" href="#">捐款</a>
        </li>
        <li class="nav-item mx-2" style="display: inline-block">
          <a class="nav-link" href="#">註冊</a>
        </li>
        <li class="nav-item mx-2" style="display: inline-block">
          <a class="nav-link" href="#">登入</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection
