<!doctype html>
<html lang="en" class="no-js">
  <head>
    <title>Checkout | SBINS</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet">
    <!-- all css -->
    <style>
      :root {
      --primary-color: #2D387C;
      --secondary-color: #4F74E3;
      --btn-primary-border-radius: 0.25rem;
      --btn-primary-color: #000;
      --btn-primary-background-color: #2D387C;
      --btn-primary-border-color: #2D387C;
      --btn-primary-hover-color: #000;
      --btn-primary-background-hover-color: #4F74E3;
      --btn-primary-border-hover-color: #4F74E3;
      --btn-primary-font-weight: 500;
      --btn-secondary-border-radius: 0.25rem;
      --btn-secondary-color: #2D387C;
      --btn-secondary-background-color: transparent;
      --btn-secondary-border-color: #2D387C;
      --btn-secondary-hover-color: #fff;
      --btn-secondary-background-hover-color: #4F74E3;
      --btn-secondary-border-hover-color: #4F74E3;
      --btn-secondary-font-weight: 500;
      --heading-color: #000;
      --heading-font-family: 'Poppins', sans-serif;
      --heading-font-weight: 700;
      --title-color: #000;
      --title-font-family: 'Poppins', sans-serif;
      --title-font-weight: 400;
      --body-color: #000;
      --body-background-color: #fff;
      --body-font-family: 'Poppins', sans-serif;
      --body-font-size: 14px;
      --body-font-weight: 300;
      --section-heading-color: #000;
      --section-heading-font-family: 'Poppins', sans-serif;
      --section-heading-font-size: 48px;
      --section-heading-font-weight: 600;
      --section-subheading-color: #000;
      --section-subheading-font-family: 'Poppins', sans-serif;
      --section-subheading-font-size: 16px;
      --section-subheading-font-weight: 400;
      }
    </style>
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
  <body>
    <div class="body-wrapper">
      <!-- header start -->
      <?php include 'header.php'; ?>
      <!-- header end -->
      <main id="MainContent" class="content-for-layout">
        <div class="checkout-page mt-4 mt-md-5">
          <div class="container">
            <div class="checkout-page-wrapper">
              <div class="row d-flex">
                <div class="col-7 mb-4 mb-md-5">
                  <h4 class="cprimary">Finalizar Compra</h4>
                </div>
                <div class="col-5 mb-4 mb-md-5 text-end">
                  <a href="cart.php" class="underline cprimary fw6">Volver al carrito</a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 pe-md-3">
                  <div class="checkout-progress overflow-hidden">
                    <ol class="checkout-bar px-0 d-none d-md-block">
                      <li class="progress-step activo" id="checkStep1"><a href="checkout.html">Datos
                        de contratación</a>
                      </li>
                      <li class="progress-step" id="checkStep2"><a href="checkout-2.html">Datos de los
                        asegurados</a>
                      </li>
                      <li class="progress-step" id="checkStep3"><a href="checkout-3.html">Métodos de
                        pago</a>
                      </li>
                    </ol>
                    <!---->
                    <div class="container d-block d-md-none px-0">
                      <div class="paso-container">
                        <div class="paso col-4">
                          <div class="paso-circle active" id="checkStep1M">1</div>
                          <div class="paso-text"><a href="checkout.html">Datos de contratación</a>
                          </div>
                        </div>
                        <div class="paso col-4">
                          <div class="paso-circle" id="checkStep2M">2</div>
                          <div class="paso-text"><a href="checkout-2.html">Datos de los
                            asegurados</a>
                          </div>
                        </div>
                        <div class="paso col-4">
                          <div class="paso-circle" id="checkStep3M">3</div>
                          <div class="paso-text"><a href="checkout-3.html">Métodos <br> de
                            pago</a>
                          </div>
                        </div>
                        <div class="paso-line"></div>
                      </div>
                    </div>
                    <!---->
                  </div>
                  <!--Start Primer formulario del checkout-->
                  <div class="shipping-address-area" id="checkForm1Cont">
                    <h5 class="cprimary text-center my-md-5">Completa los datos de contrato y
                      facturación
                    </h5>
                    <div class="shipping-address-form-wrapper">
                      <form id="checkForm1" class="shipping-address-form common-form">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-12">
                            <fieldset>
                              <label for="nameContratante" class="label">Nombre del
                              contratante</label>
                              <input name="nameContratante" type="text" id="nameContratante"
                                required>
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12 col-12">
                            <fieldset>
                              <label for="apellidosContratante" class="label">Apellidos del
                              contratante</label>
                              <input name="apellidosContratante" type="text"
                                id="apellidosContratante" required>
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12 col-12">
                            <fieldset>
                              <label for="emailContratante" class="label">Correo
                              electrónico</label>
                              <input name="emailContratante" type="email"
                                id="emailContratante" required>
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12 col-12">
                            <fieldset>
                              <label for="telefonoContratante" class="label">Teléfono</label>
                              <input name="telefonoContratante" type="tel"
                                id="telefonoContratante" required>
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12 col-12">
                            <fieldset>
                              <label for="rutContratante" class="label">RUT</label>
                              <input name="rutContratante" type="text" id="rutContratante"
                                required>
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12 col-12">
                            <fieldset>
                              <label for="documentoContratante" class="label">Número de
                              documento / Serie</label>
                              <input name="documentoContratante" type="text"
                                id="documentoContratante" required>
                            </fieldset>
                          </div>
                          <div class="col-12">
                            <fieldset>
                              <label for="region" class="label">Región de residencia</label>
                              <select name="region" class="form-select" id="region" required>
                                <option value="" selected disabled>Selecciona tu región de
                                  residencia
                                </option>
                                <option value="15">Región de Arica y Parinacota</option>
                                <option value="1">Región de Tarapacá</option>
                                <option value="2">Región de Antofagasta</option>
                                <option value="3">Región de Atacama</option>
                                <option value="4">Región de Coquimbo</option>
                                <option value="5">Región de Valparaíso</option>
                                <option value="13">Región Metropolitana de Santiago</option>
                                <option value="6">Región del Libertador General Bernardo
                                  O'Higgins
                                </option>
                                <option value="7">Región del Maule</option>
                                <option value="16">Región de Ñuble</option>
                                <option value="8">Región del Biobío</option>
                                <option value="9">Región de La Araucanía</option>
                                <option value="14">Región de Los Ríos</option>
                                <option value="10">Región de Los Lagos</option>
                                <option value="11">Región de Aysén del General Carlos Ibáñez
                                  del Campo
                                </option>
                                <option value="12">Región de Magallanes y de la Antártica
                                  Chilena
                                </option>
                              </select>
                            </fieldset>
                          </div>
                          <div class="col-12">
                            <fieldset>
                              <label for="comuna" class="label">Comuna de residencia</label>
                              <select name="comuna" class="form-select" id="comuna" required>
                                <option value="" selected disabled>Selecciona primero una
                                  región
                                </option>
                              </select>
                            </fieldset>
                          </div>
                          <div class="col-lg-4 col-md-12 col-12">
                            <fieldset>
                              <label for="calleContratante" class="label">Nombre de la
                              calle</label>
                              <input name="calleContratante" type="text" id="calleContratante"
                                required>
                            </fieldset>
                          </div>
                          <div class="col-lg-4 col-md-12 col-12">
                            <fieldset>
                              <label for="numeroDomicilio" class="label">Número de
                              domicilio</label>
                              <input name="numeroDomicilio" type="text" id="numeroDomicilio"
                                required>
                            </fieldset>
                          </div>
                          <div class="col-lg-4 col-md-12 col-12">
                            <fieldset>
                              <label for="deptoContratante" class="label">Depto.</label>
                              <input name="deptoContratante" type="text" id="deptoContratante"
                                required>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!--End Primer formulario del checktout-->
                  <!--Start segundo formulario del checkout-->
                  <div class="shipping-address-area hidden" id="checkForm2Cont">
                    <h5 class="cprimary text-center my-md-5">Completa los datos de los asegurados</h5>
                    <div class="title-container mt-4">
                      <div class="horizontal-line"></div>
                      <h5 class="titleSeguroCheck mb-0">Asegurados Seguro Oncológico</h5>
                    </div>
                    <div class="shipping-address-form-wrapper">
                      <form id="checkForm2" class="shipping-address-form common-form">
                        <!-- Start ContCard Asugrado Main-->
                        <div class="container border rounded mt-4 py-3 py-md-4" id="contAseMain">
                          <!-- Primera fila -->
                          <div class="row d-flex align-items-center">
                            <div class="col-6">
                              <p class="text-start mb-3"><span class="fw6 cprimary tituCheck"
                                id="nameAseMain">Asegurado Principal</span></p>
                            </div>
                            <div class="col-6">
                              <p class="text-end mb-3"><span class="circleBluel">Tú</span></p>
                            </div>
                          </div>
                          <!-- Segunda fila -->
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="mb-3">
                                <label for="inputRut" class="form-label fw5">RUT</label>
                                <input type="text" class="form-control" id="rutAseMain"
                                  disabled value="26.000.159-K">
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="mb-3">
                                <label for="diaAseMain" class="form-label fw5">Fecha de
                                nacimiento</label>
                                <div class="d-flex">
                                  <select class="form-select me-2" id="diaAseMain"
                                    required>
                                    <option selected value="">Día</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <!-- Aquí se deben agregar dinámicamente los días -->
                                  </select>
                                  <select class="form-select me-2" id="mesAseMain"
                                    required>
                                    <option selected value="">Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                  </select>
                                  <select class="form-select" id="yearAseMain" disabled>
                                    <option selected id="anioAseMain">1990</option>
                                    <!-- Aquí se deben agregar los años disponibles -->
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End ContCard Asugrado Main-->
                        <!-- Start ContCard Asugrado 1-->
                        <div class="container rounded mt-4 py-3 py-md-4 bgblulight" id="contAse1">
                          <!-- Primera fila -->
                          <div class="row d-flex align-items-center">
                            <div class="col-6">
                              <p class="text-start mb-3"><span class="fw6 cprimary tituCheck"
                                id="nameAse1">Asegurado 1 Apellido</span></p>
                            </div>
                            <div class="col-6">
                              <p class="text-end mb-3"><span class="fw6 cprimary tituCheck"
                                id="parentAse1">Hijo</span></p>
                            </div>
                          </div>
                          <!-- Segunda fila -->
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="mb-3">
                                <label for="rutAse1" class="form-label fw5">RUT</label>
                                <input type="text" class="form-control" id="rutAse1"
                                  value="" required>
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="mb-3">
                                <label for="diaAse1" class="form-label fw5">Fecha de
                                nacimiento</label>
                                <div class="d-flex">
                                  <select class="form-select me-2" id="diaAse1" required>
                                    <option selected value="">Día</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <!-- Aquí se deben agregar dinámicamente los días -->
                                  </select>
                                  <select class="form-select me-2" id="mesAse1" required>
                                    <option selected value="">Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                  </select>
                                  <select class="form-select" id="yearAse1" disabled>
                                    <option selected id="anioAse1">2020</option>
                                    <!-- Aquí se deben agregar los años disponibles -->
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End ContCard Asugrado 1-->
                        <!-- Start ContCard Asugrado 2-->
                        <div class="container rounded mt-4 py-3 py-md-4 bgblulight" id="contAse2">
                          <!-- Primera fila -->
                          <div class="row d-flex align-items-center">
                            <div class="col-6">
                              <p class="text-start mb-3"><span class="fw6 cprimary tituCheck"
                                id="nameAse2">Asegurado 2 Apellido</span></p>
                            </div>
                            <div class="col-6">
                              <p class="text-end mb-3"><span class="fw6 cprimary tituCheck"
                                id="parentAse2">Hijo</span></p>
                            </div>
                          </div>
                          <!-- Segunda fila -->
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="mb-3">
                                <label for="rutAse2" class="form-label fw5">RUT</label>
                                <input type="text" class="form-control" id="rutAse2"
                                  value="" required>
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="mb-3">
                                <label for="diaAse2" class="form-label fw5">Fecha de
                                nacimiento</label>
                                <div class="d-flex">
                                  <select class="form-select me-2" id="diaAse2" required>
                                    <option selected value="">Día</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <!-- Aquí se deben agregar dinámicamente los días -->
                                  </select>
                                  <select class="form-select me-2" id="mesAse2" required>
                                    <option selected value="">Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                  </select>
                                  <select class="form-select" id="yearAse2" disabled>
                                    <option selected id="anioAse2">2020</option>
                                    <!-- Aquí se deben agregar los años disponibles -->
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End ContCard Asugrado 2-->
                      </form>
                    </div>
                  </div>
                  <!--End segundo formulario del checkout-->
                  <!--Star Tercer formulario del checkout-->
                  <div class="shipping-address-area hidden" id="checkForm3Cont">
                    <h5 class="cprimary text-center my-md-5">Selecciona el método de envío de tu póliza
                    </h5>
                    <div class="shipping-address-form-wrapper">
                      <form id="checkForm3">
                        <!--Start shipping method-->
                        <div class="border rounded p-4 mt-5 mt-md-5" id="shipMethodBox">
                          <div class="form-check d-flex justify-content-between align-items-start">
                            <div class="pe-4">
                              <input class="form-check-input" type="checkbox" name="envioOptions" id="correoElectronico" checked>
                              <label class="form-check-label fw6 cprimary ps-1" for="correoElectronico">
                              Envío por correo electrónico
                              </label>
                              <small class="d-block text-muted">Entrega HOY al email: <span id="mailAseMain2">EMAIL-DEL-ASEGURADO@GMAIL.COM</span></small>
                            </div>
                            <div>
                              <span class="text-end d-block fw6 cprimary">Gratis</span>
                            </div>
                          </div>
                          <div class="form-check mt-3 d-flex justify-content-between align-items-start">
                            <div class="pe-4">
                              <input class="form-check-input" type="checkbox" name="envioOptions" id="whatsapp">
                              <label class="form-check-label fw6 cprimary ps-1" for="whatsapp"> Envío por Whatsapp</label>
                              <small class="d-block text-muted">Entrega HOY al número: +569 XXXX XXXX</small>
                            </div>
                            <div>
                              <span class="text-end d-block fw6 cprimary">Gratis</span>
                            </div>
                          </div>
                          <div class="form-check mt-3 d-flex justify-content-between align-items-start">
                            <div class="pe-4">
                              <input class="form-check-input" type="checkbox" name="envioOptions" id="impresionFisica">
                              <label class="form-check-label fw6 cprimary ps-1" for="impresionFisica">
                              Impresión física y envío a domicilio Donación de 1 árbol a replantación X
                              </label>
                              <small class="d-block text-muted">Envío de 3 a 7 días hábiles</small>
                            </div>
                            <div>
                              <span class="text-end d-block fw6 cprimary">$4.990</span>
                            </div>
                          </div>
                        </div>
                        <!--Start shipping method-->
                        <!-- start Acordeón-->
                        <div class="mt-5">
                          <div class="accordion" id="accordionExample">
                            <!-- Item 1 -->
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <div class="d-flex justify-content-between align-items-center w100 pe-3">
                                    <div><input type="radio" name="accordionRadio" class="me-2" id="radioBuCard" checked>
                                      <span>Tarjeta de crédito / débito </span>
                                    </div>
                                    <div class="d-none d-md-block"><img src="./assets/img/cards-icon.png" alt=""></div>
                                  </div>
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <div class="mb-4 mt-3">
                                    <label for="cardName" class="form-label fw5">Nombre en la Tarjeta</label>
                                    <input type="text" class="form-control" id="cardName" placeholder="Nombre completo">
                                  </div>
                                  <div class="mb-4">
                                    <label for="cardNumber" class="form-label fw5">Número de Tarjeta</label>
                                    <input type="text" class="form-control" id="cardNumber" placeholder="XXXX XXXX XXXX XXXX">
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 mb-4">
                                      <label for="expiryDate" class="form-label fw5">Fecha de Expiración</label>
                                      <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                      <label for="cvv" class="form-label fw5">CVV</label>
                                      <input type="text" class="form-control" id="cvv" placeholder="CVV">
                                    </div>
                                    <div class="col-12 mb-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Guardar esta tarjeta de forma segura para comprar más adelante
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <div class="d-flex justify-content-between align-items-center w100 pe-3">
                                    <div>
                                      <input type="radio" name="accordionRadio" class="me-2" id="radioBuMerPago">
                                      <span>Mercadopago</span> 
                                    </div>
                                    <div><img src="./assets/img/ico-mercadopago.png" alt="" width="40px"></div>
                                  </div>
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <p class="text-center mb-0">Finaliza tu compra y paga en hasta 12 cuotas de forma segura, con o sin cuenta de Mercado Pago</p>
                                  <div class="row justify-content-center mt-4">
                                    <div class="col-12 col-md-3">
                                      <div class="rounded border d-flex justify-content-center flex-column justify-content-center p-3 mb-4">
                                        <div class="text-center">
                                          <img src="./assets/img/credit-card.png" alt="" width="31px"> 
                                        </div>
                                        <div class="text-center">
                                          <span class="text_12">Tarjetas de crédito</span> 
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                      <div class="rounded border d-flex justify-content-center flex-column justify-content-center p-3 mb-4">
                                        <div class="text-center">
                                          <img src="./assets/img/debit-card.png" alt="" width="31px"> 
                                        </div>
                                        <div class="text-center">
                                          <span class="text_12">Tarjetas de débito</span> 
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row justify-content-center my-4">
                                      <div class="col-12 col-md-6 text-center">
                                        <img src="./assets/img/payment.png" alt="" class="img-fluid">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end acordeoón-->
                      </form>
                    </div>
                  </div>
                  <!--End Tercer formulario del checkout-->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 ps-md-5">
                  <div class="coupon-container p-4 mt-5 mt-md-0">
                    <h6 class="cprimary mb-4 mt-2">Cupón de descuento</h6>
                    <div class="form-group mb-4">
                      <input type="text" class="form-control"
                        placeholder="Ingresa tu código de descuento">
                    </div>
                    <div class="text-center">
                      <a href="#" class="underline cprimary fw6" id="appCupon">Aplicar cupón de
                      descuento</a>
                    </div>
                  </div>
                  <div class="coupon-container pt-4 mt-4">
                    <h6 class="cprimary mb-4 mt-2 px-4">Resumen de pedido</h6>
                    <div class="minicart-item d-flex">
                      <div class="mini-img-wrapper">
                        <img class="mini-img2" src="assets/img/products/on-indi-pr.webp" alt="img">
                      </div>
                      <div class="product-info">
                        <h2 class="product-title fw6 mb-3"><a href="#">Seguro oncológico
                          familiar</a>
                        </h2>
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="pe-md-3">
                            <p class="mb-0 text_12">Isapre</p>
                            <p class="mb-0 text_12">55 años</p>
                            <p class="mb-0 text_12">5 asegurados</p>
                          </div>
                          <div class="ps-md-3 text-end">
                            <p class="mb-0 fw6">UF 061 mes</p>
                            <p class="mb-0">$22.703</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="subtotal-item subtotal-box px-4">
                      <h4 class="subtotal-title">Subtotals:</h4>
                      <p class="subtotal-value">$22.703</p>
                    </div>
                    <div class="subtotal-item discount-box px-4">
                      <h4 class="subtotal-title">Descuento:</h4>
                      <p class="subtotal-value">$0</p>
                    </div>
                    <div class="subtotal-item discount-box totalCartCont px-4 py-3">
                      <h4 class="subtotal-title fw6">Total:</h4>
                      <h4 class="subtotal-value fw6">$22.703</h4>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mt-5">
                    <button type="submit" form="checkForm1"
                      class="btnContratCart mb-3" id="submitForm1Cont">Siguiente</button>
                    <button type="submit" form="checkForm2"
                      class="btnContratCart mb-3 hidden" id="submitForm2Cont">Siguiente</button>
                    <button type="submit" form="checkForm3"
                      class="btnContratCart mb-3 hidden" id="submitForm3Cont">Pagar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- footer start -->
      <?php include 'footer.php'; ?>
      <!-- footer end -->
      <!-- scrollup start -->
      <button id="scrollup">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
      </button>
      <!-- scrollup end -->
      <!-- drawer menu start -->
      <?php include 'drawer-menu.php'; ?>
      <!-- drawer menu end -->
      <!-- all js -->
      <script src="assets/js/vendor.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/checkout.js"></script>
    </div>
  </body>
</html>