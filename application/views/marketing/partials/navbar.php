<div class="navbar-fixed">
    <nav class="no-shadows">
        <div class="nav-wrapper blue-dark-grey darken-4">
            <a href="dashboard" class="brand-logo"><img src="<?php echo base_url('assets/img/marketing/sosro_logo.png') ?>" alt="Sosro Logo" height="60px" width="100px"></a>

            <!-- Dropdown Structure -->
            <ul id="order_DD" class="dropdown-content indigo darken-4">
                <li><a href="sales_order" class="white-text">Sales Order</a></li>
                <li><a href="production_order" class="white-text">Production Order</a></li>
            </ul>

            <ul id="product_DD" class="dropdown-content indigo darken-4">
                <li><a href="stok_produk" class="white-text">Stok Produk</a></li>
                <li><a href="produk_baru" class="white-text">Produk Baru</a></li>
                <li><a href="promo" class="white-text">Promo</a></li>
            </ul>

            <ul id="customer_DD" class="dropdown-content indigo darken-4">
                <li><a href="data_customer" class="white-text">Data Customer</a></li>
                <li><a href="testimoni" class="white-text">Testimoni</a></li>
            </ul>

            <ul id="acc_DD" class="dropdown-content indigo darken-4">
                <li class="no-pointer-event"><a href="#!" class="white-text">Manager</a></li>
                <li class="divider"></li>
                <li><a href="#!" class="white-text">My Account</a></li>
                <li><a href="#!" class="white-text">Log Out</a></li>
            </ul>


            <!-- navabar menu -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger bold-font" href="#" data-target="order_DD">ORDER<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="product_DD">PRODUCT<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="customer_DD">CUSTOMER<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="acc_DD">Ryumada<i class="material-icons right">account_circle</i></a></li>
            </ul>
        </div>
    </nav>
</div>