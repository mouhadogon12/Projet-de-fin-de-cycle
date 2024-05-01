<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sen Concours</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <style>
    .confirm-alert {
        font-size: 16px;
        padding: 20px;
    }
</style>


  <!-- Favicons -->
  <link href="{{ asset('') }}assets/img/favicon.png" rel="icon">
  <link href="{{ asset('') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Resi
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('home.header')

<section id="about" class="about section-bg" style="margin-top: 25px">

    <div class="container" data-aos="fade-up">


        <div class="section-title">

            <h2  style="margin-top: 25px">{{ $concours->titre }}</h2>

           </div>

       <div>
        <form action="{{ route('candidatures.store',['concoursId' => $concours->id]) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<span class="badge badge-secondary" style="margin-top: 20px"><h2>Candidater</h2></span>

            </div>

            <div class="mb-3 row">
               <div class="col">
                <label for="seriebac">Série de baccalauréat</label>
                <select class="form-select" id="seriebac" name="seriebac" required>
                    <option value="">Sélectionner la série de baccalauréat</option>
                    <option value="S2">S2</option>                    <!-- Ajoutez d'autres options au besoin -->
                    <option value="S1">S1</option>                    <!-- Ajoutez d'autres options au besoin -->
                    <option value="S3">S3</option>
                    <option value="L2">L2</option>
                    <option value="L">L'</option>
                    <option value="T">T</option>                    <!-- Ajoutez d'autres options au besoin -->
                    <!-- Ajoutez d'autres options au besoin -->
                </select>
               </div>
                <div class="col">
                    <label for="releve_bac" class="form-label">Releve Bac</label>
                    <input type="file" class="form-control" id="releve_bac" name="releve_bac" required>
                </div>
            </div>
           <div class="mb-3 row">
            <div class="col">
                <label for="annebac" class="form-label">Annee obtention Bac</label>
                <input type="number" class="form-control" id="annebac" name="annebac" required>
            </div>
            <div class="col">
                <label for="ecole" class="form-label">Etablissement de provenance</label>
                <input type="text" class="form-control" id="ecole" name="ecole" required>
            </div>
           </div>
           <div class="mb-3 row">
            <div class="col">
                <label for="num_cni" class="form-label">N* CNI</label>
                <input type="number" class="form-control" id="num_cni" name="num_cni" required>
            </div>
            <div class="col">
                <label for="code_postal" class="form-label">Code postal</label>
                <input type="number" class="form-control" id="code_postal" name="code_postal" required>
            </div>
           </div>
           <div class="mb-3 row">
            <div class="col">
                <label for="date_Naissance" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="date_Naissance" name="date_Naissance" required>
            </div>
            <div class="col">
                <label for="lieu_Naissance" class="form-label">Lieu de Naissance</label>
                <input type="text" class="form-control" id="lieu_Naissance" name="lieu_Naissance" required>
            </div>
           </div>
           <div class="mb-1 row" style="width: 50%">
            <div class="col">
             <label for="nationalite">Nationnalite</label>
             <select class="form-select" id="nationalite" name="nationalite" required>
                 <option value="">Votre nationalite</option>
                 <option value="Guineene">Guineene</option>                    <!-- Ajoutez d'autres options au besoin -->
                 <option value="Mauritanienne">Mauritanie</option>                    <!-- Ajoutez d'autres options au besoin -->
                 <option value="Gambiene">Mauritanienne</option>
                 <option value="Senegalaise">Senegalaise</option>
                 <option value="Maliene">Maliene</option>
                 <option value="Marocaine">Marocaine</option>                    <!-- Ajoutez d'autres options au besoin -->
                 <!-- Ajoutez d'autres options au besoin -->
             </select>
            </div>

         </div>


         <a class="btn btn-danger" style="  float: right" href="{{ route('home.page') }}">Annuler</a>
            <button type="submit" class="btn btn-primary" style="  float: right">Soumettre</button>
        </form>


       </div>

    </div>
</section>

  <!-- ======= Hero Section ======= -->


  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- ======= Footer ======= -->
 @include('home.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
