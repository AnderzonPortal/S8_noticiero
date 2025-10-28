<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Portal de noticias 2025">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com/favicon.ico">

  <title>El Informador Digital - Noticias 2025</title>

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary-color: #1a1a1a;
      --secondary-color: #666;
      --accent-color: #c41e3a;
      --border-color: #e5e5e5;
      --bg-light: #f8f9fa;
    }

    body {
      font-family: 'Roboto', sans-serif;
      color: var(--primary-color);
      line-height: 1.7;
    }

    /* Header Styles */
    .main-header {
      border-bottom: 3px solid var(--accent-color);
      padding: 20px 0 15px;
      background: #fff;
    }

    .site-title {
      font-family: 'Merriweather', serif;
      font-size: 2.8rem;
      font-weight: 900;
      letter-spacing: -1px;
      color: var(--primary-color);
      margin: 0;
      text-transform: uppercase;
    }

    .site-tagline {
      font-size: 0.85rem;
      color: var(--secondary-color);
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-top: 5px;
    }

    .date-header {
      font-size: 0.75rem;
      color: var(--secondary-color);
      padding: 8px 0;
      border-bottom: 1px solid var(--border-color);
      margin-bottom: 25px;
    }

    /* Featured Story */
    .featured-story {
      background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.8) 100%), 
                  url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="600"><rect fill="%23333" width="1200" height="600"/></svg>');
      background-size: cover;
      background-position: center;
      min-height: 450px;
      display: flex;
      align-items: flex-end;
      padding: 40px;
      margin-bottom: 40px;
      position: relative;
      border-radius: 4px;
      overflow: hidden;
    }

    .featured-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
    }

    .featured-category {
      display: inline-block;
      background: var(--accent-color);
      color: #fff;
      padding: 6px 14px;
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 15px;
    }

    .featured-title {
      font-family: 'Merriweather', serif;
      font-size: 2.5rem;
      font-weight: 900;
      color: #fff;
      line-height: 1.2;
      margin-bottom: 15px;
    }

    .featured-excerpt {
      font-size: 1.1rem;
      color: rgba(255,255,255,0.95);
      line-height: 1.6;
    }

    /* Section Headers */
    .section-header {
      border-bottom: 3px solid var(--primary-color);
      margin: 50px 0 30px;
      padding-bottom: 10px;
    }

    .section-title {
      font-family: 'Merriweather', serif;
      font-size: 1.5rem;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin: 0;
    }

    /* News Card Styles */
    .news-card {
      background: #fff;
      border: 1px solid var(--border-color);
      border-radius: 0;
      margin-bottom: 30px;
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .news-card:hover {
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      transform: translateY(-3px);
    }

    .news-image-wrapper {
      position: relative;
      overflow: hidden;
      background: #f0f0f0;
    }

    .news-image {
      width: 100%;
      height: 280px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .news-card:hover .news-image {
      transform: scale(1.05);
    }

    .news-category {
      position: absolute;
      top: 15px;
      left: 0;
      background: var(--accent-color);
      color: #fff;
      padding: 5px 15px;
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      z-index: 2;
    }

    .category-internacional { background: #0066cc; }
    .category-nacional { background: #28a745; }
    .category-economia { background: #6c757d; }
    .category-opinion { background: #ffc107; color: #000; }
    .category-tecnologia { background: #17a2b8; }
    .category-ciencia { background: #6f42c1; }
    .category-deportes { background: #dc3545; }
    .category-cultura { background: #e83e8c; }

    .news-body {
      padding: 25px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .news-title {
      font-family: 'Merriweather', serif;
      font-size: 1.4rem;
      font-weight: 700;
      line-height: 1.3;
      margin-bottom: 12px;
    }

    .news-title a {
      color: var(--primary-color);
      text-decoration: none;
      transition: color 0.2s;
    }

    .news-title a:hover {
      color: var(--accent-color);
    }

    .news-meta {
      font-size: 0.8rem;
      color: var(--secondary-color);
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .news-author {
      font-weight: 500;
      color: var(--primary-color);
    }

    .news-date::before {
      content: "•";
      margin-right: 10px;
    }

    .news-summary {
      font-size: 0.95rem;
      color: #444;
      line-height: 1.6;
      margin-bottom: 15px;
      flex-grow: 1;
    }

    .read-more {
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--accent-color);
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      display: inline-flex;
      align-items: center;
      margin-top: auto;
    }

    .read-more:hover {
      color: var(--primary-color);
    }

    .read-more::after {
      content: "→";
      margin-left: 8px;
      transition: margin-left 0.2s;
    }

    .read-more:hover::after {
      margin-left: 12px;
    }

    /* Small Card Styles */
    .news-card-small .news-image {
      height: 200px;
    }

    .news-card-small .news-body {
      padding: 20px;
    }

    .news-card-small .news-title {
      font-size: 1.15rem;
    }

    .news-card-small .news-summary {
      font-size: 0.9rem;
    }

    /* Text-only Cards */
    .news-card-text .news-body {
      padding: 30px;
    }

    /* Footer */
    .main-footer {
      background: var(--primary-color);
      color: #fff;
      padding: 40px 0 20px;
      margin-top: 60px;
    }

    .footer-content {
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 30px;
      margin-top: 30px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .site-title {
        font-size: 2rem;
      }

      .featured-story {
        min-height: 350px;
        padding: 25px;
      }

      .featured-title {
        font-size: 1.8rem;
      }

      .news-title {
        font-size: 1.2rem;
      }
    }
  </style>
</head>

<body>

  <!-- Main Header -->
  <header class="main-header">
    <div class="container">
      <div class="text-center">
        <h1 class="site-title">El Informador Digital</h1>
        <p class="site-tagline">Información Verificada y Actualizada</p>
      </div>
    </div>
  </header>

  <!-- Date Header -->
  <div class="container">
    <div class="date-header text-center">
      <span>MARTES, 28 DE OCTUBRE DE 2025</span>
    </div>
  </div>

  <div class="container">

    <!-- Featured Story -->
    <?php include("secciones/portada.php"); ?>
    <div class="featured-story">
      <div class="featured-content">
        <span class="featured-category">DESTACADO</span>
        <h2 class="featured-title"><?php echo $portada["titulo"]; ?></h2>
        <p class="featured-excerpt"><?php echo $portada["resumen"]; ?></p>
      </div>
    </div>

    <!-- Main Stories Section -->
    <div class="section-header">
      <h2 class="section-title">Noticias Principales</h2>
    </div>

    <?php
    include("secciones/internacional.php");
    include("secciones/nacional.php");
    ?>
    <div class="row">
      <div class="col-lg-6">
        <article class="news-card">
          <div class="news-image-wrapper">
            <span class="news-category category-internacional">Internacional</span>
            <img src="<?php echo $internacional["imagen"]; ?>" class="news-image" 
                 alt="<?php echo $internacional["titulo"]; ?>">
          </div>
          <div class="news-body">
            <h3 class="news-title">
              <a href="#"><?php echo $internacional["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $internacional["autor"]; ?></span>
              <span class="news-date">Hace 2 horas</span>
            </div>
            <p class="news-summary"><?php echo $internacional["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="news-card">
          <div class="news-image-wrapper">
            <span class="news-category category-nacional">Nacional</span>
            <img src="<?php echo $nacional["imagen"]; ?>" class="news-image" 
                 alt="<?php echo $nacional["titulo"]; ?>">
          </div>
          <div class="news-body">
            <h3 class="news-title">
              <a href="#"><?php echo $nacional["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $nacional["autor"]; ?></span>
              <span class="news-date">Hace 3 horas</span>
            </div>
            <p class="news-summary"><?php echo $nacional["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Economy & Opinion Section -->
    <?php
    include("secciones/economia.php");
    include("secciones/opinion.php");
    ?>
    <div class="row">
      <div class="col-lg-6">
        <article class="news-card">
          <div class="news-image-wrapper">
            <span class="news-category category-economia">Economía</span>
            <img src="<?php echo $economia["imagen"]; ?>" class="news-image" 
                 alt="<?php echo $economia["titulo"]; ?>">
          </div>
          <div class="news-body">
            <h3 class="news-title">
              <a href="#"><?php echo $economia["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $economia["autor"]; ?></span>
              <span class="news-date">Hace 4 horas</span>
            </div>
            <p class="news-summary"><?php echo $economia["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="news-card">
          <div class="news-image-wrapper">
            <span class="news-category category-opinion">Opinión</span>
            <img src="<?php echo $opinion["imagen"]; ?>" class="news-image" 
                 alt="<?php echo $opinion["titulo"]; ?>">
          </div>
          <div class="news-body">
            <h3 class="news-title">
              <a href="#"><?php echo $opinion["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $opinion["autor"]; ?></span>
              <span class="news-date">Hace 5 horas</span>
            </div>
            <p class="news-summary"><?php echo $opinion["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Technology & Science Section -->
    <div class="section-header">
      <h2 class="section-title">Tecnología y Ciencia</h2>
    </div>

    <?php
    include("secciones/tecnologia.php");
    include("secciones/ciencia.php");
    ?>
    <div class="row">
      <div class="col-lg-6">
        <article class="news-card">
          <div class="news-image-wrapper">
            <span class="news-category category-tecnologia">Tecnología</span>
            <img src="<?php echo $tecnologia["imagen"]; ?>" class="news-image" 
                 alt="<?php echo $tecnologia["titulo"]; ?>">
          </div>
          <div class="news-body">
            <h3 class="news-title">
              <a href="#"><?php echo $tecnologia["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $tecnologia["autor"]; ?></span>
              <span class="news-date">Hace 6 horas</span>
            </div>
            <p class="news-summary"><?php echo $tecnologia["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="news-card">
          <div class="news-image-wrapper">
            <span class="news-category category-ciencia">Ciencia</span>
            <img src="<?php echo $ciencia["imagen"]; ?>" class="news-image" 
                 alt="<?php echo $ciencia["titulo"]; ?>">
          </div>
          <div class="news-body">
            <h3 class="news-title">
              <a href="#"><?php echo $ciencia["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $ciencia["autor"]; ?></span>
              <span class="news-date">Hace 7 horas</span>
            </div>
            <p class="news-summary"><?php echo $ciencia["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Culture Section -->
    <div class="section-header">
      <h2 class="section-title">Cultura y Entretenimiento</h2>
    </div>

    <?php
    include("secciones/cultura.php");
    include("secciones/gente.php");
    ?>
    <div class="row">
      <div class="col-lg-6">
        <article class="news-card news-card-text">
          <div class="news-body">
            <span class="news-category category-cultura" style="position: static; margin-bottom: 15px; display: inline-block;">Cultura</span>
            <h3 class="news-title">
              <a href="#"><?php echo $cultura["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $cultura["autor"]; ?></span>
              <span class="news-date">Hace 8 horas</span>
            </div>
            <p class="news-summary"><?php echo $cultura["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="news-card news-card-text">
          <div class="news-body">
            <span class="news-category category-opinion" style="position: static; margin-bottom: 15px; display: inline-block;">Gente</span>
            <h3 class="news-title">
              <a href="#"><?php echo $gente["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $gente["autor"]; ?></span>
              <span class="news-date">Hace 9 horas</span>
            </div>
            <p class="news-summary"><?php echo $gente["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Sports & Entertainment Section -->
    <div class="section-header">
      <h2 class="section-title">Deportes y Medios</h2>
    </div>

    <?php
    include("secciones/deportes.php");
    include("secciones/television.php");
    include("secciones/video.php");
    ?>
    <div class="row">
      <div class="col-lg-4">
        <article class="news-card news-card-small">
          <div class="news-body">
            <span class="news-category category-deportes" style="position: static; margin-bottom: 12px; display: inline-block;">Deportes</span>
            <h3 class="news-title">
              <a href="#"><?php echo $deportes["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $deportes["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $deportes["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-4">
        <article class="news-card news-card-small">
          <div class="news-body">
            <span class="news-category" style="position: static; margin-bottom: 12px; display: inline-block; background: #343a40;">Televisión</span>
            <h3 class="news-title">
              <a href="#"><?php echo $television["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $television["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $television["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-4">
        <article class="news-card news-card-small">
          <div class="news-body">
            <span class="news-category category-deportes" style="position: static; margin-bottom: 12px; display: inline-block;">Video</span>
            <h3 class="news-title">
              <a href="#"><?php echo $video["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $video["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $video["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Education & Work Section -->
    <?php
    include("secciones/formacion.php");
    include("secciones/empleo.php");
    include("secciones/sociedad.php");
    ?>
    <div class="row">
      <div class="col-lg-4">
        <article class="news-card news-card-small">
          <div class="news-body">
            <span class="news-category category-tecnologia" style="position: static; margin-bottom: 12px; display: inline-block;">Formación</span>
            <h3 class="news-title">
              <a href="#"><?php echo $formacion["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $formacion["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $formacion["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-4">
        <article class="news-card news-card-small">
          <div class="news-body">
            <span class="news-category category-nacional" style="position: static; margin-bottom: 12px; display: inline-block;">Empleo</span>
            <h3 class="news-title">
              <a href="#"><?php echo $empleo["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $empleo["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $empleo["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-4">
        <article class="news-card news-card-small">
          <div class="news-body">
            <span class="news-category category-internacional" style="position: static; margin-bottom: 12px; display: inline-block;">Sociedad</span>
            <h3 class="news-title">
              <a href="#"><?php echo $sociedad["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $sociedad["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $sociedad["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

    <!-- Tech Section -->
    <div class="section-header">
      <h2 class="section-title">Tecnología Empresarial</h2>
    </div>

    <?php
    include("secciones/openstack.php");
    include("secciones/git.php");
    include("secciones/contenedores.php");
    include("secciones/openshift.php");
    ?>
    <div class="row">
      <div class="col-lg-6">
        <article class="news-card news-card-text">
          <div class="news-body">
            <span class="news-category category-deportes" style="position: static; margin-bottom: 15px; display: inline-block;">OpenStack</span>
            <h3 class="news-title">
              <a href="#"><?php echo $openstack["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $openstack["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $openstack["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="news-card news-card-text">
          <div class="news-body">
            <span class="news-category" style="position: static; margin-bottom: 15px; display: inline-block; background: #343a40;">Git</span>
            <h3 class="news-title">
              <a href="#"><?php echo $git["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $git["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $git["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <article class="news-card news-card-text">
          <div class="news-body">
            <span class="news-category category-tecnologia" style="position: static; margin-bottom: 15px; display: inline-block;">Contenedores</span>
            <h3 class="news-title">
              <a href="#"><?php echo $contenedores["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $contenedores["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $contenedores["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="news-card news-card-text">
          <div class="news-body">
            <span class="news-category category-deportes" style="position: static; margin-bottom: 15px; display: inline-block;">OpenShift</span>
            <h3 class="news-title">
              <a href="#"><?php echo $openshift["titulo"]; ?></a>
            </h3>
            <div class="news-meta">
              <span class="news-author">Por <?php echo $openshift["autor"]; ?></span>
            </div>
            <p class="news-summary"><?php echo $openshift["resumen"]; ?></p>
            <a href="#" class="read-more">Leer más</a>
          </div>
        </article>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h5 class="text-uppercase mb-3" style="font-weight: 700; letter-spacing: 1px;">El Informador Digital</h5>
          <p style="font-size: 0.9rem; line-height: 1.7; opacity: 0.8;">
            Tu fuente confiable de noticias verificadas y actualizadas las 24 horas del día.
          </p>
        </div>
        <div class="col-md-4 mb-4">
          <h6 class="text-uppercase mb-3" style="font-weight: 700; letter-spacing: 1px;">Secciones</h6>
          <ul class="list-unstyled" style="font-size: 0.9rem; line-height: 2;">
            <li><a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none;">Internacional</a></li>
            <li><a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none;">Nacional</a></li>
            <li><a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none;">Economía</a></li>
            <li><a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none;">Deportes</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h6 class="text-uppercase mb-3" style="font-weight: 700; letter-spacing: 1px;">Contacto</h6>
          <p style="font-size: 0.9rem; line-height: 2; opacity: 0.8;">
            Email: contacto@informadordigital.com<br>
            Tel: +51 1 234 5678
          </p>
        </div>
      </div>
      <div class="footer-content text-center">
        <p style="margin: 0; font-size: 0.85rem; opacity: 0.7;">
          © 2025 El Informador Digital. Todos los derechos reservados.
        </p>
        <p style="margin-top: 10px;">
          <a href="#" style="color: #fff; text-decoration: none; font-size: 0.85rem;">Volver arriba ↑</a>
        </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
          crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
  <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>