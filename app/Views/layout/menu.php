 <li class="menu-header">Main Menu</li>
 <li><a class="nav-link" href="<?= site_url('home') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
 <li><a class="nav-link" href="<?= site_url('acara') ?>"><i class="far fa-calendar"></i> <span>Acara</span></a></li>
 <li class="nav-item dropdown">
     <a href="#" class="nav-link has-dropdown"><i class="far fa-address-book"></i><span>Kontak</span></a>
     <ul class="dropdown-menu">
         <li><a class="nav-link" href="<?= site_url('groups') ?>">Grup Kontak</a></li>
         <li><a class="nav-link" href="<?= site_url('contacts') ?>">Kontak Saya</a></li>
     </ul>
 </li>
 <li class="nav-item dropdown">
     <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-envelope"></i> <span>undangan</span></a>
     <ul class="dropdown-menu">
         <li><a class="nav-link" href="<?= site_url('undangan') ?>">saya mengundang</a></li>
         <li><a class="nav-link" href="layout-transparent.html">saya diundang</a></li>
     </ul>
 </li>