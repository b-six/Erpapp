<div class="navbar-fixed">
    <nav class="no-shadows">
        <div class="nav-wrapper">
            <a href="dashboard" class="brand-logo"><img src="<?php echo base_url('assets/img/marketing/sosro_logo.png') ?>" alt="Sosro Logo" height="60px" width="100px"></a>

            <!-- Dropdown Structure -->
            <ul id="order_DD" class="dropdown-content">
                <li><a href="sales_order" class="">Sales Order</a></li>
                <li><a href="production_order" class="">Production Order</a></li>
            </ul>

            <ul id="product_DD" class="dropdown-content ">
                <li><a href="stok_barang" class="">Stok Barang</a></li>
                <li><a href="produk_baru" class="">Produk Baru</a></li>
                <li><a href="promo" class="">Promo</a></li>
            </ul>

            <ul id="customer_DD" class="dropdown-content ">
                <li><a href="data_customer" class="">Data Customer</a></li>
                <li><a href="testimoni" class="">Testimoni</a></li>
            </ul>

            <ul id="acc_DD" class="dropdown-content ">
                <li class="no-pointer-event"><a href="#!" class="">Manager</a></li>
                <li class="divider"></li>
                <li><a href="#!" class="">My Account</a></li>
                <li><a href="#!" class="">Log Out</a></li>
            </ul>


            <!-- navabar menu -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger bold-font" href="#" data-target="order_DD">ORDER<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="product_DD">PRODUK<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="customer_DD">CUSTOMER<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger bold-font" href="#" data-target="acc_DD">Ryumada<i class="material-icons right">account_circle</i></a></li>
            </ul>
        </div>
    </nav>
</div>