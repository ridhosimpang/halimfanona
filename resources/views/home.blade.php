@extends('layout.welcome')
@section('title', 'PT. Halim Fanona')
   
@section('container')  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>PT. HALIM FANONA</h1>
      <h2>Kota Graha RT 008 RW 002 Desa Mendalo Darat Kecamatan Jambi Luar Kota Kabupaten Muaro Jambi</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->\
    <div id="profil">
      <section id="about" class="about">
        <div class="container">
  
          <div class="row content">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
              <h2>PT Halim Fanona</h2>
              <h3>Sebuah Perusahaan yang bergerak dibidang property, berlokasi strategis di Muaro Jambi</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
              <p>
                PT. Halim Fanona berdiri sejak tahun 2015 yang didirikan dan dipimpin oleh Husni Mubarok Kama Raju sebagai Direktur Utama
              </p>
              <ul>
                <li ><i class="ri-check-double-line"></i> 1.	Visi 
                  <p>Menjadi pemimpin pasar dalam dunia properti dan realty secara terpadu yang berwawasan lingkungan</p>
                  </li>
                <li><i class="ri-check-double-line"></i> 2.	Misi
                <p>Membangun sumber daya manusia yang berkompeten dan berintegritas</p>
                <p>Melaksanakan pembangunan dan pengelolaan properti dan realty dengan tata kelola yang baik dan benar</p>
                 <p>Menjadi perusahaan pengembang yang mampu memberikan nilai lebih kepada stakeholder</p>
                 <p>Mendukung program pemerintah dalam rangka ketersediaan perumahan bagi masyarakat</p>
                  </li>
                
              
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
    </div>

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Kenapa Memilih Kami?</h3>
              <p>
                Perusahaan kami berdiri secara legal, tercercaya dan amanah.
              </p>

            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                @forelse($perumahan as $perum)
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>{{$perum->nama}}</h4>
                    <p>Tipe Rumah {{$perum->tiperumah}}</p>
                    <p>Luas Lahan {{$perum->luaslahan}}</p>
                  </div>
                </div>
                @empty
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Belum ada data perumahan</h4>
                  </div>
                </div>

                @endforelse
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
              </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=pt%20halim%20fanona&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Mendalo Darat RT 008 RW 002 Kecamatan Jambi Luar Kota Kabupaten Muaro Jambi</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>pthalimfanona@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>082296717997</p>
                </div>
              </div>
            </div>

                      </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          <span>PT. Halim Fanona</span>
        </div>
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
@endsection