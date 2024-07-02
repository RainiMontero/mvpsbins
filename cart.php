<!doctype html>
<html lang="en" class="no-js">
  <head>
    <title>Carrito de compras | SBINS</title>
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
        <div class="cart-page mt-4 mt-md-5">
          <div class="container">
            <div class="cart-page-wrapper">
              <div class="row">
                <div class="col-12 mb-4 mb-md-5">
                  <h4 class="cprimary">Carrito de compras</h4>
                </div>
                <div class="col-lg-8 col-md-12 col-12 pe-md-3">
                  <!--start Items Cart Desktop-->
                  <table class="cart-table w-100 d-none d-md-table-cell">
                    <thead>
                      <tr>
                        <th class="cart-caption heading_18 cprimary">Seguro</th>
                        <th class="cart-caption heading_18 cprimary"></th>
                        <th
                          class="cart-caption text-center heading_18 d-none d-md-table-cell px-md-3 cprimary">
                          Cant. Asegurados
                        </th>
                        <th class="cart-caption text-center heading_18 px-md-4 cprimary">Precio</th>
                        <th class="px-md-4"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="cart-item">
                        <td class="cart-item-media pe-3 ps-md-4 py-md-4">
                          <div class="mini-img-wrapper">
                            <img class="mini-img rounded"
                              src="assets/img/products/on-indi-pr.webp" alt="img">
                          </div>
                        </td>
                        <td class="cart-item-details">
                          <h2 class="product-title fw6"><a href="#">Seguro Oncológico Plan
                            Familiar</a>
                          </h2>
                          <p class="product-vendor"><b>Previsión:</b> <span
                            id="prev-cart">Isapre</span></p>
                          <p class="product-vendor"><b>Mayor edad:</b> <span
                            id="edad-cart">38</span></p>
                        </td>
                        <td class="cart-item-quantity">
                          <div class="text-center mb-1">
                            <span id="cantAsegu" class="cprimary text_20  fw6">5</span>
                          </div>
                          <p class="mb-0"><span id="editAseOncoCart" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar</span></p>
                        </td>
                        <td class="cart-item-price text-center">
                          <div class="product-price-cart csecondary text_20 fw6 mb-1"><span
                            id="priceOncoCart">$22.703</span><span
                            class="text_12 csecondary">/mes</span></div>
                          <p class="mb-0 fw6"><span id="ufOncoCart">UF 0.61</span></p>
                        </td>
                        <td class="cart-item-delete text-center">
                          <p class="mb-md-2"><a href="#" id="dltOncoCart"><img
                            src="./assets/img/icontrash.svg" alt=""></a></p>
                          <p class="mb-0 pt-1"><span id="dltOncoCartTx">Eliminar</span></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--End Items Cart Desktop-->
                  <!--start Items Cart Mobile-->
                  <div class="container-fluid d-block d-md-none">
                    <div class="row bgCartItm">
                      <div class="col-4 p-3 pe-0">
                        <img class="img-fluid rounded" src="assets/img/products/on-indi-pr.webp" alt="img">
                        <button id="editAseOncoCartMb" class="w-100 mt-3  btn bg-bludark text-light text_14" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar</button>
                        <p class="text-center mt-3 mb-0"><a id="dltOncoCartTxMb" class="text_14 underline">Eliminar</a></p>
                      </div>
                      <div class="col-8 p-3">
                        <h2 class="product-title fw6"><a href="#">Seguro Oncológico Plan Familiar</a></h2>
                        <p class="product-vendor mb-0"><b>Previsión:</b> <span id="prev-cartMb">Isapre</span></p>
                        <p class="product-vendor mb-0"><b>Mayor edad:</b> <span id="edad-cartMb">38</span></p>
                        <p class="product-vendor mb-0"><b>Asegurados:</b> <span id="cantAseguMb" class="cprimary">5</span> </p>
                        <hr class="mb-2">
                        <div class="product-price-cart"><span id="priceOncoCartMb" class="csecondary text_20 fw6">$22.703</span><span
                          class="text_12 csecondary">/mes</span> <span id="ufOncoCartMb">UF 0.61</span></div>
                      </div>
                    </div>
                  </div>
                  <!--End Items Cart Mobile-->
                  <!--Start Asistencias-->
                  <div class="mt-5">
                    <h4 class="cprimary">Agregar asistencias adicionales</h4>
                    <div class="row mt-4 mt-md-5">
                      <div class="col-6 col-md-4 mb-4">
                        <img src="./assets/img/asistencia-1.webp" alt="" class="img-fluid">
                      </div>
                      <div class="col-6 col-md-4 mb-4">
                        <img src="./assets/img/asistencia-2.webp" alt="" class="img-fluid">
                      </div>
                      <div class="col-6 col-md-4 mb-4">
                        <img src="./assets/img/asistencia-3.webp" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <!--Start Asistencias-->
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-4 mt-md-4 ps-md-5">
                  <div class="cart-total-area">
                    <div class="coupon-container p-4">
                      <h6 class="cprimary mb-4 mt-2">Cupón de descuento</h6>
                      <div class="form-group mb-4">
                        <input type="text" class="form-control" placeholder="Ingresa tu código de descuento">
                      </div>
                      <div class="text-center">
                        <a href="#" class="underline cprimary fw6" id="appCupon">Aplicar cupón de descuento</a>
                      </div>
                    </div>
                    <div class="coupon-container pt-4 mt-4">
                      <h6 class="cprimary mb-4 mt-2 px-4">Resumen de pedido</h6>
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
                    <div class="d-flex justify-content-center mt-3 mt-md-5">
                      <button class="btnContratCart w-100 mb-3"  onclick="window.location.href='checkout.php'">Finalizar contratación</button>
                    </div>
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
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-light" id="staticBackdropLabel">Edita tu grupo familiar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Start Formulario PDP-->
                <form id="insuranceForm">
                    <div class="product-details ps-lg-4">
                      <!--Start info contratante PDP-->
                      <div class="row mt-3 justify-content-center">
                        <div class="col-8 col-md-6">
                          <!--Start Previsión-->
                          <fieldset id="previ-pdp">
                            <label for="prevision" class="text_16 fw6  cprimary">Tu previsión de
                            Salud</label>
                            <p class="text_12">*No incluye FONASA "A" Y PRAIS.</p>
                            <select name="prevision" id="previPdp" class="form-select mt-3">
                              <option selected value="isapre">ISAPRE</option>
                              <option value="fonasa">FONASA</option>
                            </select>
                          </fieldset>
                          <!--End Previsión-->
                        </div>
                        <div class="col-4 col-md-6 d-flex">
                          <!--Start Edad-->
                          <fieldset id="cli-edad-pdp"
                            class="d-flex flex-column justify-content-between w100">
                            <label for="edad-cli" class="text_16 fw6  cprimary">Tu edad</label>
                            <select name="edad-cli" id="edad-cli" class="form-select mt-3" required>
                            </select>
                          </fieldset>
                          <!--End Edad-->
                        </div>
                      </div>
                      <!--END info contratante PDP-->
                      <div class="row mt-4">
                        <div class="co-12 mb-0">
                          <p class="mb-0"><span class="gradient-blue text_20 fw6">Agrega a tu grupo
                            familiar</span>
                            <span class="cprimary text_12 ">(Hasta 7 personas)</span>
                          </p>
                        </div>
                        <div class="col-12 px-4 mt-4 mb-0 mb-md-5">
                          <div id="aseguradosCont">
                            <!--Start Asegurado Info-->
                            <div class="row justify-content-center border rounded p-3 pt-5 custom-select-container mt-4"
                              id="contAse1">
                              <div class="closeCont">
                                <button type="button" class="btn-close" aria-label="Close"
                                  id="dlt-Ase1" data-counter="1"></button>
                              </div>
                              <select class="form-select mb-3" id="parentA1" required>
                                <option selected disabled value="">Selecciona parentezco</option>
                                <option value="hijo">Hijo</option>
                                <option value="conyuge">Cónyuge</option>
                                <option value="padre">Padre</option>
                              </select>
                              <div class="col-12 col-md-6 col-lg-5 mb-3">
                                <label for="nombreA1" class="form-label fw6 cprimary">Nombre</label>
                                <input type="text" class="form-control" id="nombreA1" required>
                              </div>
                              <div class="col-8 col-md-6 col-lg-4 mb-3">
                                <label for="apellidoA1"
                                  class="form-label fw6 cprimary">Apellido</label>
                                <input type="text" class="form-control" id="apellidoA1" required>
                              </div>
                              <div class="col-4 col-md-6 col-lg-3 mb-3">
                                <label for="edadA1" class="form-label fw6 cprimary">Edad</label>
                                <input type="number" class="form-control" id="edadA1" required>
                              </div>
                            </div>
                            <!--Start Asegurado Info-->
                          </div>
                          <!--Start Add more Asegurado-->
                          <div class="mb-4 mt-4 text-center">
                            <span class="gradient-blue text_16 fw6 pointer" id="addMoreAse">+ Agregar
                            otro familiar</span>
                          </div>
                          <!--End Add more Asegurado-->
                          <!--Start DPS-->
                          <div id="dpsPdp">
                            <p class="cprimary text_16 text-center fw6">Antes de continuar, por favor
                              responde la Declaración Personal de Salud
                            </p>
                            <p class="csecondary text_16 text-center fw6">Responder con información
                              errónea podría afectar tu cobertura.
                            </p>
                            <div class="bgGray1 py-3 px-4 mt-4 rounded">
                              <p class="txt-justify text_12">De acuerdo al art. 8 bis de la Ley
                                Nacional del Cáncer N° 21.258, si tuviste un diagnostico de cáncer y
                                estuviste en tratamiento y te encuentras en etapa de remanencia por
                                5 años, no debes declarar la enfermedad en la siguiente declaración
                                Para mayor detalle: <a href="#">Leer Ley.</a>
                              </p>
                            </div>
                            <div class="mt-4 borderBlue rounded d-flex align-items-center"
                              id="dpsQuestions" style="height:auto;padding-bottom:20px">
                              <div id="q1-pdp" class="flexDps">
                                <div class="mt-4 mb-4 ms-3"><span class="py-2 cprimary fw6">Pregunta 1 de 3</span>
                                </div>
                                <div>
                                  <p class="mx-3 my-3 fw6">¿Tú y/o alguno de tus asegurados
                                    adicionales
                                    están en estudio o conocimiento y/o han sido diagnosticados
                                    y/o
                                    sometidos a tratamientos médicos por alguna de las
                                    siguientes
                                    causas?
                                  </p>
                                  <ul class="mx-3">
                                    <li>Cáncer o enfermedad neoplásica de cualquier naturaleza
                                      (incluidos leucemias y linfomas).
                                    </li>
                                    <li>Virus VIH.</li>
                                    <li> Virus Hepatitis B o Hepatitis C.</li>
                                    <li>Nódulos, masas quistes o tumores, pólipos y/o lesiones
                                      de la
                                      piel.
                                    </li>
                                    <li>Quimioterapia y/o radioterapia.</li>
                                  </ul>
                                  <div class="mx-3">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio"
                                        name="q1-dps-pdp" id="q1-dps-pdp-Si"
                                        value="option1">
                                      <label class="form-check-label" for="inlineRadio1"><span
                                        class="fw6 cprimary text_16">Si</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio"
                                        name="q1-dps-pdp" id="q1-dps-pdp-No"
                                        value="option2">
                                      <label class="form-check-label" for="inlineRadio2"><span
                                        class="fw6 cprimary text_16">No</span></label>
                                    </div>
                                  </div>
                                </div>
                                <div class="mx-3 m-3">
                                  <div class="d-flex justify-content-between">
                                    <div class="text-center">
                                      <button type="button"
                                        class="btn btn-outline-secondary invisible">Volver</button>
                                    </div>
                                    <div class="text-center">
                                      <button type="button" class="btn-false"
                                        id="btnEmp1">
                                        Continuar 
                                        <svg class="icon" width="60"
                                          height="60" viewBox="0 0 64 64" fill="#ffffff"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g opacity="0.4">
                                            <path
                                              d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                              fill="#fff"></path>
                                          </g>
                                        </svg>
                                      </button>
                                      <button type="button" class="btn-next  hidden"
                                        id="nxtQ2">
                                        Continuar 
                                        <svg class="icon" width="60"
                                          height="60" viewBox="0 0 64 64" fill="#ffffff"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g opacity="0.4">
                                            <path
                                              d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                              fill="#fff"></path>
                                          </g>
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="q2-pdp" class="hidden">
                                <div class="mt-4 mb-4 ms-3"><span class="py-2 cprimary fw6">Pregunta
                                  2
                                  de 3</span>
                                </div>
                                <div>
                                  <p class="mx-3 my-3 fw6">¿Tú y/o alguno de tus asegurados
                                    adicionales han tenido un resultado alterado en cualquiera
                                    de los siguientes exámenes?
                                  </p>
                                  <ul class="mx-3">
                                    <li>Virus del papiloma humano (VPH).</li>
                                    <li>Antígeno prostático.</li>
                                    <li>Frontis de Papanicolau (PAP).</li>
                                    <li>Mamografía, ecografía, tomografía computarizada o
                                      resonancia magnética.
                                    </li>
                                  </ul>
                                  <div class="mx-3">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio"
                                        name="q2-dps-pdp" id="q2-dps-pdp-Si"
                                        value="option1">
                                      <label class="form-check-label" for="inlineRadio1"><span
                                        class="fw6 cprimary text_16">Si</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio"
                                        name="q2-dps-pdp" id="q2-dps-pdp-No"
                                        value="option2">
                                      <label class="form-check-label" for="inlineRadio2"><span
                                        class="fw6 cprimary text_16">No</span></label>
                                    </div>
                                  </div>
                                </div>
                                <div class="mx-3 m-3">
                                  <div class="d-flex justify-content-between">
                                    <div class="text-center">
                                      <button type="button" class="btn btn-outline-secondary"
                                        id="bckQ1">Volver</button>
                                    </div>
                                    <div class="text-center">
                                      <button type="button" class="btn-false">
                                        Continuar 
                                        <svg
                                          class="icon" width="60" height="60"
                                          viewBox="0 0 64 64" fill="#ffffff"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g opacity="0.4">
                                            <path
                                              d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                              fill="#fff"></path>
                                          </g>
                                        </svg>
                                      </button>
                                      <button type="button" class="btn-next  hidden"
                                        id="nxtQ3">
                                        Continuar 
                                        <svg class="icon" width="60"
                                          height="60" viewBox="0 0 64 64" fill="#ffffff"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g opacity="0.4">
                                            <path
                                              d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                              fill="#fff"></path>
                                          </g>
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="q3-pdp" class="hidden">
                                <div class="mt-4 mb-4 ms-3"><span class="py-2 cprimary fw6">Pregunta
                                  3
                                  de 3</span>
                                </div>
                                <div>
                                  <p class="mx-3 my-3 fw6">¿Tú y/o alguno de tus asegurados
                                    adicionales han sido rechazados de un seguro de vida o salud
                                    en el pasado?
                                  </p>
                                  <div class="mx-3">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio"
                                        name="q3-dps-pdp" id="q3-dps-pdp-Si"
                                        value="option1">
                                      <label class="form-check-label" for="inlineRadio1"><span
                                        class="fw6 cprimary text_16">Si</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio"
                                        name="q3-dps-pdp" id="q3-dps-pdp-No"
                                        value="option2">
                                      <label class="form-check-label" for="inlineRadio2"><span
                                        class="fw6 cprimary text_16">No</span></label>
                                    </div>
                                  </div>
                                </div>
                                <div class="mx-3 m-3">
                                  <div class="d-flex justify-content-between">
                                    <div class="text-center">
                                      <button type="button" class="btn btn-outline-secondary"
                                        id="bckQ2">Volver</button>
                                    </div>
                                    <div class="text-center">
                                      <button type="button" class="btn-false">
                                        Continuar 
                                        <svg
                                          class="icon" width="60" height="60"
                                          viewBox="0 0 64 64" fill="#ffffff"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g opacity="0.4">
                                            <path
                                              d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                              fill="#fff"></path>
                                          </g>
                                        </svg>
                                      </button>
                                      <button type="button" class="btn-next  hidden"
                                        id="nxtDone">
                                        Continuar 
                                        <svg class="icon" width="60"
                                          height="60" viewBox="0 0 64 64" fill="#ffffff"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g opacity="0.4">
                                            <path
                                              d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                              fill="#fff"></path>
                                          </g>
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="fail-pdp" class="hidden">
                                <div></div>
                                <div>
                                  <h5 class="mx-4 my-3 fw6 text-center">Lamentablemente no podemos
                                    continuar con el proceso.
                                  </h5>
                                  <div class="mx-4">
                                    <p class="text-center">Debido a la condición de salud
                                      declarada, al ser una de las respuestas afirmativas en
                                      este momento no podemos asegurarte. Si deseas puedes
                                      ajustar tu carga familiar.
                                    </p>
                                  </div>
                                  <div class="mx-3 m-3">
                                    <div class="text-center">
                                      <button type="button"
                                        class="btn btn-outline-secondary underline"
                                        id="bckQ3">Volver</button>
                                    </div>
                                  </div>
                                </div>
                                <div></div>
                              </div>
                              <div id="done-pdp" class="hidden">
                                <div></div>
                                <div>
                                  <h5 class="mx-4 my-3 fw6 text-center gradient-blue">¡Excelente!
                                    Respuestas guardadas
                                  </h5>
                                  <p class="text-center mb-3 mx-4">Recuerda que si no declaras
                                    correctamente tu salud u omites información, podrías afectar
                                    el cobro del seguro si debes usarlo.
                                  </p>
                                  <p class="text-center mb-3 mx-4"><b>Importante:</b> Este seguro
                                    NO cubre En caso de estar en estudio o tener un diagnóstico
                                    de cáncer actualmente.
                                  </p>
                                </div>
                                <div class="text-center"><button type="button"
                                  class="btn btn-outline-secondary underline"
                                  id="bckDone">Volver</button></div>
                              </div>
                            </div>
                          </div>
                          <!--End DPS-->
                          <div id="alertDPS" class="labelDspAlert">Debes responder las 3 preguntas para avanzar</div>
                          <div class="d-none my-2 d-md-flex justify-content-center">
                            <div>
                            </div>
                            <div>
                              <button class="btnContrat" id="btnContrat" data-bs-dismiss="modal">Actualizar el carrito</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!--Start Formulario PDP-->
            </div>
          </div>
        </div>
      </div>
      <!-- all js -->
      <script src="assets/js/vendor.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/pdp.js"></script>
    </div>
  </body>
</html>