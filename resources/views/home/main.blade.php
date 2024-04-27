<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Concours Disponibles</h2>
                <h3>Trouvez les <span>concours</span> actuellement ouvertes</h3>
                <p>Identifiez un concours pour laquelle vous souhaitez soumettre votre candidature et affichez les
                    détails.
                </p>
            </div>

        </div>
        <div class="row">
            @foreach($concours as $concours)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top img-fluid" src="{{ asset('storage/images/' . $concours->image) }}" alt="Logo" style="object-fit: cover; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><a href="{{ route('concours.voir',$concours->id) }}">{{ $concours->titre }}</a></h5>
                        <p class="card-text"><strong class="h6">Date d'ouverture:</strong> {{ $concours->date_debutIns }}</p>
                        <p class="card-text"><strong class="h6">Date Limite:</strong> {{ $concours->date_limiteIns }}</p>
                        <p class="card-text flex-grow-1">{{ Str::limit($concours->description, 100) }}</p>
                        <a href="{{ route('concours.voir',$concours->id) }}" class="btn btn-primary mt-auto">En savoir plus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>













    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->

    <!-- ======= Counts Section ======= -->


    <!-- ======= Services Section ======= -->
   <!-- End Services Section -->

    <!-- ======= Features Section ======= -->


    <!-- ======= Portfolio Section ======= -->

    <!-- ======= Team Section ======= -->
   <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->


    <!-- ======= Frequently Asked Questions Section ======= -->
   <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
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
    </section><!-- End Contact Section -->
    <script>
        function toggleVisibility(id) {
            var fullDescription = document.getElementById("fullDescription_" + id);
            var shortDescription = document.getElementById("shortDescription_" + id);
            var button = document.getElementById("toggleButton_" + id);

            if (fullDescription.style.display === "none") {
                fullDescription.style.display = "block";
                shortDescription.style.display = "none";
                button.textContent = "Voir moins";
            } else {
                fullDescription.style.display = "none";
                shortDescription.style.display = "block";
                button.textContent = "Voir plus";
            }
        }
    </script>

  </main><!-- End #main -->
