@include('layouts.headclient')

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Precios</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Nuestros Precios</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Dento Pricing Table Area Start ***** -->
  <section class="dento-pricing-table-area mt-50 section-padding-0-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="dento-price-table table-responsive">
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th scope="col">Nombre de servicios</th>
                  <th scope="col">Etapa</th>
                  <th scope="col">Precio</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                  <th scope="row">Servicio de blanqueamiento dental a domicilio</th>
                  <td>1 Veces</td>
                  <td>115.00</td>
                </tr>
                <tr>
                  <th scope="row">Servicio de Blanqueamiento Dental en Clínica Dental</th>
                  <td>1 Veces</td>
                  <td>100.00</td>
                </tr>
                <tr>
                  <th scope="row">Coronas y empastes de cerámica Porcelana dental</th>
                  <td>1 Veces</td>
                  <td>99.00</td>
                </tr>
                <tr>
                  <th scope="row">Retirar coronas, puentes Servicio</th>
                  <td>1 diente</td>
                  <td>50.00</td>
                </tr>
                <tr>
                  <th scope="row">Cubriendo la recesión de las encías</th>
                  <td>1 Veces</td>
                  <td>400.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-12">
          <div class="more-btn text-center mt-50">
            <a href="#" class="btn dento-btn">Read More <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Dento Pricing Table Area End ***** -->

  @include('layouts.footerclient')