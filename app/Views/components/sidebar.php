<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

<<<<<<< HEAD
=======
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
        <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Nav -->
        <?php
        }
        ?>

        <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->

        <?php if (session()->get('role') == 'admin') : ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'diskon') ? "" : "collapsed" ?>" href="diskon">
                    <i class="bi bi-cash-coin"></i>
                    <span>Diskon</span>
                </a>
            </li>
        <?php endif; ?>

=======
    <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
    </a>
</li><!-- End Profile Nav -->
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869

        <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'kategori') ? "" : "collapsed" ?>" href="kategori">
                    <i class="bi bi-receipt"></i>
                    <span>Kategori Produk</span>
                </a>
            </li><!-- End Category Nav -->
        <?php
        }
        ?>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li> <!-- End Profile Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="faq">
                <i class="bi bi-question-circle"></i>
                <span>FAQ</span>
            </a>
        </li><!--End FAQ Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'contact') ? "" : "collapsed" ?>" href="contact">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Nav -->
<<<<<<< HEAD

    </ul>

    


=======
    </ul>

>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
</aside><!-- End Sidebar-->