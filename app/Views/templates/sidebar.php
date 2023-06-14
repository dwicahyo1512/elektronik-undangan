<div class="main-sidebar sidebar-style-2">
     <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
               <a href="<?= route_to('dashboard'); ?>">E_Undangan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
               <a href="<?= route_to('dashboard'); ?>">EU</a>
          </div>
          <ul class="sidebar-menu">
               <?php
               $uri = new \CodeIgniter\HTTP\URI(current_url());
               $getSegment2 = $uri->getSegment(2);
               ?>
               <li class="menu-header">Dashboard</li>
               <?php if (in_groups('superadmin')) : ?>
                    <li <?= ($getSegment2 === 'dashboard') ? 'class="active"' : '' ?>>
                         <a href="<?= route_to('dashboard'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                    </li>
               <?php endif; ?>
               <li <?= ($getSegment2 === 'galeri_produk') ? 'class="active"' : '' ?>>
                    <a href="<?= route_to('galeri'); ?>" class="nav-link"><i class="fas fa-image"></i> <span>Galeri</span></a>
               </li>

               <!-- FITUR -->
               <?php if (in_groups(['superadmin', 'admin'])) : ?>
                    <li class="menu-header">Fitur Olah Data</li>
               <?php endif; ?>
               <?php if (in_groups('superadmin')) : ?>
                    <li <?= ($getSegment2 === 'kategori') ? 'class="active"' : '' ?>>
                         <a href="<?= base_url('superadmin/kategori'); ?>" class="nav-link"><i class="fas fa-columns"></i> <span>Kategori</span></a>
                    </li>
                    <li <?= ($getSegment2 === 'tag') ? 'class="active"' : '' ?>>
                         <a class="nav-link" href="<?= base_url('superadmin/tag'); ?>"><i class="fas fa-tags"></i> <span>Tag</span></a>
                    </li>
                    <li <?= ($getSegment2 === 'blog') ? 'class="active"' : '' ?>>
                         <a href="<?= base_url('superadmin/blog'); ?>" class="nav-link"><i class="fas fa-newspaper"></i> <span>Blog</span></a>
                    </li>
                    <li <?= ($getSegment2 === 'produk') ? 'class="active"' : '' ?>>
                         <a href="<?= base_url('superadmin/produk'); ?>" class="nav-link"><i class="fas fa-cubes"></i> <span>Produk</span></a>
                    </li>
                    <li <?= ($getSegment2 === 'hadiah') ? 'class="active"' : '' ?>>
                         <a href="<?= base_url('superadmin/hadiah'); ?>" class="nav-link"><i class="fas fa-gift"></i> <span>Hadiah</span></a>
                    </li>
               <?php endif; ?>
               <?php if (in_groups(['superadmin', 'admin'])) : ?>
                    <li <?= ($getSegment2 === 'reservasi') ? 'class="active"' : '' ?>>
                         <a href="<?= base_url('admin/reservasi'); ?>" class="nav-link"><i class="fas fa-file-invoice-dollar"></i> <span>Reservasi</span></a>
                    </li>
                    <li <?= ($getSegment2 === 'klaim_hadiah') ? 'class="active"' : '' ?>>
                         <a href="<?= route_to('klaim_hadiah'); ?>" class="nav-link"><i class="fas fa-money-bill"></i> <span>Klaim Hadiah</span></a>
                    </li>
               <?php endif; ?>
               <!-- SELESAI FITUR -->

               <li class="menu-header">Pengguna</li>
               <?php if (in_groups('superadmin')) : ?>
                    <li <?= ($getSegment2 === 'akses_pengguna' || $getSegment2 === 'detail_pengguna' || $getSegment2 === 'buat_pengguna') ? 'class="active"' : '' ?>>
                         <a class="nav-link" href="<?= route_to('daftar_pengguna'); ?>"><i class="fas fa-user-shield"></i> <span>Daftar Akses Pengguna</span></a>
                    </li>
               <?php endif; ?>
               <li <?= ($getSegment2 === 'reservasi_pengguna') ? 'class="active"' : '' ?>>
                    <a class="nav-link" href="<?= base_url('user/reservasi_pengguna'); ?>"><i class="fas fa-clipboard-list"></i> <span>Reservasi Pengguna</span></a>
               </li>
               <li <?= ($getSegment2 === 'hadiah_pengguna') ? 'class="active"' : '' ?>>
                    <a class="nav-link" href="<?= route_to('hadiah_pengguna'); ?>"><i class="fas fa-box-open"></i> <span>Klaim Hadiah Pengguna</span></a>
               </li>
               <li <?= ($getSegment2 === 'acara') ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('user/acara') ?>"><i class="far fa-calendar"></i> <span>Acara</span></a></li>
               <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="far fa-address-book"></i><span>Kontak</span></a>
                    <ul class="dropdown-menu">
                         <li <?= ($getSegment2 === 'grps') ? 'class="active"' : '' ?>>
                              <a class="nav-link" href="<?= base_url('user/grps') ?>">Grup Kontak</a>
                         </li>
                         <li <?= ($getSegment2 === 'contacts') ? 'class="active"' : '' ?>>
                              <a class="nav-link" href="<?= base_url('user/contacts') ?>">Kontak Saya</a>
                         </li>
                    </ul>
               </li>
               <li class="nav-item dropdown" hidden>
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-envelope"></i> <span>undangan</span></a>
                    <ul class="dropdown-menu">
                         <li><a class="nav-link" href="<?= site_url('undangan') ?>">saya mengundang</a></li>
                         <li><a class="nav-link" href="layout-transparent.html">saya diundang</a></li>
                    </ul>
               </li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
               <a href="<?= base_url('logout') ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Logout
               </a>
          </div>
     </aside>
</div>