<!DOCTYPE html>
<html>
  <head>
    <title>DomiCare</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/aos/aos.css">
    <link href="css/date-time-picker-component.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imbue:wght@400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

  <script src="js/js-index/modernizr.js"></script>
  </head>
  <body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
        <path fill="currentColor" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/>
      </symbol>
      <svg xmlns="http://www.w3.org/2000/svg" id="skype" viewBox="0 0 24 24">
        <path fill="currentColor" d="M13.005 18.423a2 2 0 0 1 1.237.207a3.25 3.25 0 0 0 4.389-4.389a2 2 0 0 1-.207-1.237a6.5 6.5 0 0 0-7.427-7.427A2 2 0 0 1 9.76 5.37a3.25 3.25 0 0 0-4.389 4.39a2 2 0 0 1 .207 1.237a6.5 6.5 0 0 0 7.427 7.427ZM12.001 20.5a8.5 8.5 0 0 1-8.4-9.81a5.25 5.25 0 0 1 7.09-7.09a8.5 8.5 0 0 1 9.71 9.71a5.25 5.25 0 0 1-7.09 7.09c-.427.066-.865.1-1.31.1Zm.053-3.5C9.252 17 8 15.62 8 14.586c0-.532.39-.902.928-.902c1.2 0 .887 1.725 3.125 1.725c1.143 0 1.776-.624 1.776-1.261c0-.384-.188-.808-.943-.995l-2.49-.624c-2.006-.504-2.37-1.592-2.37-2.612C8.027 7.797 10.019 7 11.89 7c1.72 0 3.755.956 3.755 2.228c0 .545-.479.863-1.011.863c-1.023 0-.835-1.418-2.9-1.418c-1.023 0-1.596.462-1.596 1.126c0 .663.803.876 1.502 1.035l1.836.409C15.49 11.695 16 12.876 16 13.989C16 15.713 14.675 17 12.015 17h.038Z"/></svg>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
        <path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 24 24">
        <path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-empty" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 16 16">
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-half" viewBox="0 0 16 16">
        <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 48 48">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M7.95 11.95h32m-32 12h32m-32 12h32"/>
      </symbol>
    </svg>

    <section id="intro" class="padding-large position-relative overflow-hidden" style="background-image: url(images/images_index/text-pattern1.png); background-repeat: no-repeat; background-position: center; background-position: top;">
      <div class="container-md">
        <div class="row">

          <div class="col-lg-6">
            <div class="banner-content pt-5">
              <h2 class="subtitle text-primary-dim">Votre ideal partenaire</h2><br><br>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-holder position-relative">
              <img src="images/images_index/banner-item3.png" alt="banner" class="img-fluid">
            </div>
          </div>

        </div><br><br><br>
        <div class="testimonial position-absolute" data-aos="fade-left" data-aos-duration="2000">
          <div class="row">
            <div class="review-item bg-light d-flex p-4 me-5">
              <div class="image-holder pe-4 pb-3">
                <img src="images/images_index/review-item1.jpg" alt="reviewer" class="border-circle img-fluid">
              </div>
              <div class="review-content">
                <blockquote>Une plateforme incroyablement pratique pour tous vos besoins domestiques.</blockquote>
                <div class="author-detail d-flex justify-content-between">
                  <span class="name fw-bold">CHAIRI Chaimae | Rabat</span>
                  <div class="rating-container d-flex align-items-center">
                    <div class="rating" data-rating="1" onclick="rate(1)">
                      <svg class="star star-fill" width="16" height="16">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="2" onclick="rate(1)">
                      <svg class="star star-fill" width="16" height="16">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="3" onclick="rate(1)">
                      <svg class="star star-fill" width="16" height="16">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="4" onclick="rate(1)">
                      <svg class="star star-half" width="16" height="16">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="5" onclick="rate(1)">
                      <svg class="star star-empty" width="16" height="16">
                        <use xlink:href="#star-empty"></use>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="review-item bg-light d-flex p-4">
              <div class="image-holder pe-4 pb-3">
                <img src="images/images_index/review-item2.jpg" alt="reviewer" class="border-circle img-fluid">
              </div>
              <div class="review-content">
                <blockquote>Un service inestimable, simplifiant chaque aspect de la vie domestique.</blockquote>
                <div class="author-detail d-flex justify-content-between">
                  <span class="name fw-bold">HOUDI Wiam | Tanger</span>
                  <div class="rating-container d-flex align-items-center">
                    <div class="rating" data-rating="1" onclick="rate(1)">
                      <svg class="star star-fill" width="16" height="16">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="2" onclick="rate(1)">
                      <svg class="star star-fill" width="16" height="16">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="3" onclick="rate(1)">
                      <svg class="star star-fill" width="16" height="16">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="4" onclick="rate(1)">
                      <svg class="star star-half" width="16" height="16">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </div>
                    <div class="rating" data-rating="5" onclick="rate(1)">
                      <svg class="star star-empty" width="16" height="16">
                        <use xlink:href="#star-empty"></use>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="training" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4"">
            <div class="training-card position-relative">
              <div class="card-img">
                <img src="images/images_index/training-item4.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail position-absolute" data-aos="zoom-in-up" data-aos-duration="2000">
                <h3 class="display-6 fw-bold text-uppercase light">
                  <a href="#">Jardinage</a>
                </h3>
                <p class="light">Transformez votre jardin avec notre service professionnel.</p>
                <a href="#" class="btn btn-primary btn-small text-uppercase mt-3 btn-pill">Découvrir</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4"">
            <div class="training-card position-relative">
              <div class="card-img">
                <img src="images/images_index/training-item5.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail position-absolute" data-aos="zoom-in-up" data-aos-duration="2000">
                <h3 class="display-6 fw-bold text-uppercase light">
                  <a href="#">Plombrie</a>
                </h3>
                <p class="light">Réparez votre plomberie avec notre expertise fiable.</p>
                <a href="#" class="btn btn-primary btn-small text-uppercase mt-3 btn-pill">Découvrir</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4"">
            <div class="training-card position-relative">
              <div class="card-img">
                <img src="images/images_index/training-item6.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail position-absolute" data-aos="zoom-in-up" data-aos-duration="2000">
                <h3 class="display-6 fw-bold text-uppercase light">
                  <a href="#">Menage</a>
                </h3>
                <p class="light">Profitez d'une maison impeccable et propre.</p>
                <a href="#" class="btn btn-primary btn-small text-uppercase mt-3 btn-pill">Découvrir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="information">
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="pe-lg-5"><img alt="" class="img-fluid rounded" src="images/images_index/info-item10.jpg"></div>
            </div>
            <div class="col-md-6">
              <div class="ps-lg-5 mt-4 mt-lg-0">
                <span class="text-muted">Features</span>
                <h4 class="display-6 fw-bold">Gagnez de l'argent en offrant vos services</h4>
                <p></p>
                <ul class="list-unstyled">
                  <li class="d-flex align-items-center mb-3">
                    <div class="text-primary me-3">
                      <svg class="bi bi-check-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg>
                    </div>Inscrivez-vous gratuitement sur notre plateforme.
                  </li>
                  <li class="d-flex align-items-center mb-3">
                    <div class="text-primary me-3">
                      <svg class="bi bi-check-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg>
                    </div>Créez votre profil et déposez vos annonces de service.
                  </li>
                  <li class="d-flex align-items-center mb-3">
                    <div class="text-primary me-3">
                      <svg class="bi bi-check-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg>
                    </div>Recevez un paiement sécurisé directement sur votre compte.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>



<section id="latest-blog" class="pb-5">
  <section class="py-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center" style="color: #EAAA00;">Services</h2>
          <p class="text-dark mb-5 text-center">Nos professionnels qualifiés sont là pour vous offrir un service exceptionnel. Avec notre plateforme conviviale, la réservation est simple et rapide. Faites confiance à notre réseau de prestataires fiables pour vous aider à rendre votre vie quotidienne plus facile et plus agréable..</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
      <div class="row gy-5">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-1-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
            </svg>
            <h5 class="m-2 font-weight-bold">Transparence et Confiance </h5>
            <p class="m-0 text-dark">Garantit la fiabilité des services via transparence, favorisant une relation de confiance mutuelle.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-2-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
            </svg>
            <h5 class="m-2 font-weight-bold">Gestion Simplifiée </h5>
            <p class="m-0 text-dark">Facilite la gestion des services à domicile, rendant les processus plus simples et efficaces.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-3-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z" />
            </svg>
            <h5 class="m-2 font-weight-bold">Facilité d'Accès aux Services </h5>
            <p class="m-0 text-dark">Simplifie l'accès aux services à domicile, offrant une solution pratique et accessible.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
</section>

    <footer id="footer" class="overflow-hidden padding-large pb-0" style="background-color: #EAAA00;">
      <div class="container">

        <div class="row d-flex flex-wrap justify-content-center">

          <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
            <div class="footer-menu">
              <div class="image-holder">
                <img src="images/images_index/main-logo.png" alt="logo">
              </div>

              <ul class="social-links list-unstyled d-flex mt-3">
                <li class="pe-3">
                  <a href="#">
                    <svg class="facebook text-primary-500 light" width="25" height="25">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li class="pe-3">
                  <a href="#">
                    <svg class="twitter text-primary-500 light" width="25" height="25">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li class="pe-3">
                  <a href="#">
                    <svg class="instagram text-primary-500 light" width="25" height="25">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li class="pe-3">
                  <a href="#">
                    <svg class="skype text-primary-500 light" width="25" height="25">
                      <use xlink:href="#skype"></use>
                    </svg>
                  </a>
                </li>
              </ul>

            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
            <div class="footer-menu light">
              <ul class="menu-list list-unstyled light">
                <li class="pb-2 light">
                  <a href="mailto:">info@domicare.com</a>
                </li>
                <li class="pb-2 light">Palestine Street, Tetouan, Maroc
                </li>
                <li class="pb-2 light">011-554-8798-6556
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 col-sm-12 pb-3">
            <div class="footer-menu light">
              <ul class="menu-list list-unstyled light">
                <li class="pb-2 light"><a href="#">Nos partenaires</a>
                </li>
                <li class="pb-2 light"><a href="#">Nos services</a>
                </li>
                <li class="pb-2 light"><a href="#">S'inscrire</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mx-auto text-center">
          <p class="light">Tous les droits reserves  <a href="#">DomiCare.</a> </p>
        </div>

      </div>
    </footer>

    <script src="js/js-index/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/js-index/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="css/aos/aos.js"></script>
    <script type="text/javascript" src="js/js-index/plugins.js"></script>
    <script type="text/javascript" src="js/js-index/script.js"></script>
  </body>
</html>
