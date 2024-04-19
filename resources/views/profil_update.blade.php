<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
<div class="profile-page">
  <div class="content">
    <div class="content__cover">
      <div class="content__avatar"></div>
      <div class="content__bull"><span></span><span></span><span></span><span></span><span></span>
      </div>
    </div>
    <div class="content__actions"><a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
          <path fill="currentColor" d="M192 256A112 112 0 1 0 80 144a111.94 111.94 0 0 0 112 112zm76.8 32h-8.3a157.53 157.53 0 0 1-68.5 16c-24.6 0-47.6-6-68.5-16h-8.3A115.23 115.23 0 0 0 0 403.2V432a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48v-28.8A115.23 115.23 0 0 0 268.8 288z"></path>
          <path fill="currentColor" d="M480 256a96 96 0 1 0-96-96 96 96 0 0 0 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592a48 48 0 0 0 48-48 111.94 111.94 0 0 0-112-112z"></path>
        </svg><span>ID =  {{$data->id_user}}</span></a><a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <path fill="currentColor" d="M208 352c-41 0-79.1-9.3-111.3-25-21.8 12.7-52.1 25-88.7 25a7.83 7.83 0 0 1-7.3-4.8 8 8 0 0 1 1.5-8.7c.3-.3 22.4-24.3 35.8-54.5-23.9-26.1-38-57.7-38-92C0 103.6 93.1 32 208 32s208 71.6 208 160-93.1 160-208 160z"></path>
          <path fill="currentColor" d="M576 320c0 34.3-14.1 66-38 92 13.4 30.3 35.5 54.2 35.8 54.5a8 8 0 0 1 1.5 8.7 7.88 7.88 0 0 1-7.3 4.8c-36.6 0-66.9-12.3-88.7-25-32.2 15.8-70.3 25-111.3 25-86.2 0-160.2-40.4-191.7-97.9A299.82 299.82 0 0 0 208 384c132.3 0 240-86.1 240-192a148.61 148.61 0 0 0-1.3-20.1C522.5 195.8 576 253.1 576 320z"></path>
        </svg><span>Message</span></a></div>
    <div class="content__title">
      <h1>{{$data->nom}} {{$data->prenom}} </h1>
    </div>

    <div class="content__description">
    <form action="your_action_url" method="POST" enctype="multipart/form-data">
    <div>
        <label for="image" class="title"><strong>IMAGE:</strong></label>
        <input type="file" id="image" name="image">
    </div>
    <div>
        <label for="nom" class="title"><strong>NOM:</strong></label>
        <input type="text" id="nom" name="nom" class="content_p" value="{{ $data->nom }}">
    </div>
    <div>
        <label for="prenom" class="title"><strong>PRENOM:</strong></label>
        <input type="text" id="prenom" name="prenom" class="content_p" value="{{ $data->prenom }}">
    </div>
    <div>
        <label for="ville" class="title"><strong>VILLE:</strong></label>
        <input type="text" id="ville" name="ville" class="content_p" value="{{ $data->ville }}">
    </div>
    <div>
        <label for="age" class="title"><strong>AGE:</strong></label>
        <input type="number" id="age" name="age" class="content_p" value="{{ $data->age }}">
    </div>
    <div>
        <label for="email" class="title"><strong>EMAIL:</strong></label>
        <input type="email" id="email" name="email" class="content_p" value="{{ $data->email }}">
    </div>
    <div>
        <label for="telephone" class="title"><strong>TELEPHONE:</strong></label>
        <input type="tel" id="telephone" name="telephone" class="content_p" value="{{ $data->telephone }}">
    </div>
    </form>
</div>


    <!-- <ul class="content__list">
      <li><span>65</span>Friends</li>
      <li><span>43</span>Photos</li>
      <li><span>21</span>Comments</li>
    </ul> -->
    <div class="content__button">
<a class="button" href="/profil/{{ $data->id_user }}">
        <div class="button__border"></div>
        <div class="button__bg"></div>
        <p class="button__text">PROFIL</p></a></div>
  </div>
  <div class="bg">
    <div><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
    </div>
  </div>
  <div class="theme-switcher-wrapper" id="theme-switcher-wrapper"><span>Themes color</span>
    <ul>
      <li><em class="is-active" data-theme="orange"></em></li>
      <li><em data-theme="green"></em></li>
      <li><em data-theme="purple"></em></li>
      <li><em data-theme="blue"></em></li>
    </ul>
  </div>
  <div class="theme-switcher-button" id="theme-switcher-button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
      <path fill="currentColor" d="M352 0H32C14.33 0 0 14.33 0 32v224h384V32c0-17.67-14.33-32-32-32zM0 320c0 35.35 28.66 64 64 64h64v64c0 35.35 28.66 64 64 64s64-28.65 64-64v-64h64c35.34 0 64-28.65 64-64v-32H0v32zm192 104c13.25 0 24 10.74 24 24 0 13.25-10.75 24-24 24s-24-10.75-24-24c0-13.26 10.75-24 24-24z"></path>
    </svg>
  </div>
</div>

<script  href="web/public/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>
