@extends('layouts.app')

@section('title')
COVID-19 Website
@endsection


@section('content')
    <main>
      <!-- Header -->
      <div class="container">
        <section class="section-header">
          <div class="row">
            <div class="header-text col-lg-4">
              <div data-aos="zoom-out">
              <h1>
                Lawan
                <br />
                COVID-19 dengan
              </h1>
              <h2>
                #dirumahaja
              </h2>
              <a href="#aboutCovid" class="btn btn-about-covid px-4 mt-2">
                About COVID-19
              </a>
              </div>
            </div>
            <div class="col-lg-8" data-aos="zoom-out" data-aos-delay="300" >
              <img
                src="{{ url('frontend/images/header.png') }}"
                alt="headerImage"
                class="img-fluid"
              />
            </div>
          </div>

        </section>
      </div>
      <!-- End Header -->

      <!-- Data Content -->
      <section class="section-data" id="data">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col text-center section-data-heading">
              <h2>Data COVID-19</h2>
              <p>
                Data tersebut merupakan data
                <br />
                yang terjadi di Indonesia
              </p>
              <p>
              Sumber data : Kementerian Kesehatan & JHU
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section-data-content" id="dataContent">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" >
            <div class="col-10 info-panel">
              <div class="row">
                <div class="col-lg text-center">
                  <h4>Positif</h4>
                  <p data-toggle="counter-up">{{$list_data["positif"]}}</p>
                </div>
                <div class="col-lg text-center">
                  <h4>Sembuh</h4>
                  <p data-toggle="counter-up" >{{$list_data["sembuh"]}}</p>
                </div>
                <div class="col-lg text-center">
                  <h4>Meninggal</h4>
                  <p data-toggle="counter-up" >{{$list_data["meninggal"]}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Data Content -->

      <!-- About covid -->
      <section class="section-about-covid" id="aboutCovid">
        <div class="container">
          <div class="row" data-aos="fade-right" >
            <div class="col-md-5">
              <img
                src="{{ url('frontend/images/about.png') }}"
                alt="About"
                class="img-about"
              />
            </div>
            <div class="col-md-7">
              <h4>
                COVID-19
              </h4>
              <p>
                Coronavirus adalah keluarga besar virus yang bisa menyebabkan
                penyakit, mulai dari flu biasa hingga penyakit pernapasan paling
                parah, seperti Sindrom Pernapasan Timur Tengah (MERS) dan
                Sindrom Pernapasan Akut Parah (SARS)
              </p>
              <img src="{{ url('frontend/images/china.png') }}" alt="" class="img-china" />
            </div>
          </div>
        </div>
      </section>
      <section class="section-penyebaran-covid" id="penyebaranCovid">
        <div class="container">
          <div class="row" data-aos="fade-left" >
            <div class="col-md-5">
              <h4>
                Penyebaran COVID-19
              </h4>
              <p>
                Penyebaran COVID-19 bisa menyebar melalui :
              </p>
              <ul>
                <li>Udara</li>
                <li>Benda yang terkotaminasi</li>
                <li>Kontak manusia</li>
                <li>Binatang</li>
              </ul>
            </div>
            <div class="col-md-7">
              <img
                src="{{ url('frontend/images/penyebar.png') }}"
                alt="Penyebaran"
                class="img-penyebaran"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- End About Covid -->
      <!-- Gejala -->
      <section class="section-gejala" id="gejala">
        <div class="container">
          <div class="row" data-aos="fade-up" >
            <div class="col text-center section-gejala-heading">
              <h2>Gejala Covid-19</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="section-gejala-content" id="gejalaContent" data-aos="fade-up"  >
        <div class="container">
          <div class="section-gejala-covid row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-covid text-center d-flex flex-column">
                <div class="covid-img">
                  <img src="{{ url('frontend/images/panas_tinggi.png') }}" alt="" />
                </div>
                <div class="covid-gejala mt-auto">Panas Tinggi</div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-covid text-center d-flex flex-column">
                <div class="covid-img">
                  <img src="{{ url('frontend/images/batuk_kering.png') }}" alt="" />
                </div>
                <div class="covid-gejala mt-auto">Batuk Kering</div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-covid text-center d-flex flex-column">
                <div class="covid-img">
                  <img src="{{ url('frontend/images/sesak_nafas.png') }}" alt="" />
                </div>
                <div class="covid-gejala mt-auto">Sesak Napas</div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-covid text-center d-flex flex-column">
                <div class="covid-img">
                  <img src="{{ url('frontend/images/pusing.png') }}" alt="" />
                </div>
                <div class="covid-gejala mt-auto">Pusing Kepala</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gejala -->

      <!-- Pencegahan Covid -->
      <section class="section-pencegahan-covid" id="pencegahanCovid" data-aos="fade-up"  >
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <img
                src="{{ url('frontend/images/pencegahan.png') }}"
                alt=""
                class="img-pencegahan"
              />
            </div>
            <div class="pencegahan col md-5">
              <h4>
                Pencegahan
                <br />
                COVID-19
              </h4>
              <p>
                COVID-19 ini bisa kita cegah dengan cara :
              </p>
              <table>
                <tr>
                  <th>
                    <img src="{{ url('frontend/images/cuci_tangan.png') }}" alt="" />
                  </th>
                  <td>Cuci Tangan</td>
                </tr>
                <tr>
                  <th>
                    <img src="{{ url('frontend/images/kerumunan.png') }}" alt="" />
                  </th>
                  <td>Menjauhi kerumunan orang</td>
                </tr>
                <tr>
                  <th>
                    <img src="{{ url('frontend/images/tutup_mulut.png') }}" alt="" />
                  </th>
                  <td>Tutup jika bersin atau batuk</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!-- End Pencegahan Covid -->

      <!-- Hotline -->
      <section class="section-hotline-covid" id="hotlineCovid" data-aos="fade-up" >
        <div class="container">
          <div class="row">
            <div class="covid-hotline col-md-7">
              <h2>
                Hotline
                <br />
                Pengaduan COVID-19
              </h2>
              <a href="#" class="btn btn-telp-covid px-4 mt-2">
                Telepon
              </a>
            </div>
            <div class="col-md-5">
              <img
                src="{{ url('frontend/images/hotline.png') }}"
                alt=""
                class="img-hotline"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- End Hotline -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-team" data-aos="fade-up">
          <h2>Our Great Team</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ url('frontend/images/dev1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdul Latif Munjiat</h4>
                <span>CEO &amp; Founder Decodev</span>
                <div class="social">
                  <a href="https://twitter.com/Abdul_LM"><i class="icofont-twitter"></i></a>
                  <a href="https://facebook.com/Abdul23LM"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/abdul_lm/"><i class="icofont-instagram"></i></a>
                  <a href="https://github.com/abdul23lm"><i class="icofont-github"></i></a>
                  <a href="https://www.linkedin.com/in/abdul23lm/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ url('frontend/images/dev2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abbi Satria</h4>
                <span>Owner of BFAR Project</span>
                <div class="social">
                  <a href="https://twitter.com/abbi_satria"><i class="icofont-twitter"></i></a>
                  <a href="https://facebook.com/abbi.satria.7"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/abbisatria/"><i class="icofont-instagram"></i></a>
                  <a href="https://github.com/abbisatria"><i class="icofont-github"></i></a>
                  <a href="https://www.linkedin.com/in/abbi-satria-5595a3132/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ url('frontend/images/dev3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ridho</h4>
                <span>AI Engineer</span>
                <div class="social">
                  <a href="https://twitter.com/ridhomujizat"><i class="icofont-twitter"></i></a>
                  <a href="https://facebook.com/ridhomujizat"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/ridhomujizat/"><i class="icofont-instagram"></i></a>
                  <a href="https://github.com/ridhomujizat"><i class="icofont-github"></i></a>
                  <a href="https://www.linkedin.com/in/ridho-mujizat-07800b167/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->
    </main>
    @endsection




