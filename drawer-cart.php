<div class="offcanvas offcanvas-end" tabindex="-1" id="drawer-cart">
  <div class="offcanvas-header border-btm-black">
    <h5 class="cart-drawer-heading text_16">Tu carrito</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
      aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <div class="cart-content-area d-flex justify-content-between flex-column">
      <div class="minicart-loop custom-scrollbar">
        <!-- minicart item -->
        <div class="minicart-item d-flex">
          <div class="mini-img-wrapper">
            <img class="mini-img" src="assets/img/products/on-indi-pr.webp" alt="img">
          </div>
          <div class="product-info">
            <h2 class="product-title"><a href="#">Seguro oncológico familiar</a></h2>
            <p class="product-vendor">Isapre / 33 años / 5 asegurados </p>
            <div class="misc d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center justify-content-between">
                <div class="product-price fw6 mb-0">$22.703</div>
              </div>
              <div class="product-remove-area d-flex flex-column align-items-end">
                <a href="#" class="product-remove">Remover</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="minicart-footer">
        <div class="minicart-calc-area">
          <div class="minicart-calc d-flex align-items-center justify-content-between mb-4">
            <span class="cart-subtotal mb-0">Subtotal</span>
            <span class="cart-subprice">$22.703</span>
          </div>
        </div>
        <div class="minicart-btn-area d-flex align-items-center justify-content-between">
          <a href="cart.php" class="minicart-btn btn-secondary roundfull">Ver carrito</a>
          <a href="checkout.php" class="minicart-btn btn-primary roundfull text_light">Pagar</a>
        </div>
      </div>
    </div>
    <div class="cart-empty-area text-center py-5 d-none">
      <div class="cart-empty-icon pb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"></circle>
          <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
          <line x1="9" y1="9" x2="9.01" y2="9"></line>
          <line x1="15" y1="9" x2="15.01" y2="9"></line>
        </svg>
      </div>
      <p class="cart-empty">No tienes seguros en tu carrito</p>
    </div>
  </div>
</div>