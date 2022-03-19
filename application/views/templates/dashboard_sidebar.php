   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
           <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
           </div>
           <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- QUERY MENU ADMIN -->
       <?php
        $level_id = $this->session->userdata('level');
        $queryMenu = "SELECT `admin_menu`.`id`, `menu`
                        FROM `admin_menu` JOIN `admin_akses_menu`
                          ON `admin_menu`.`id` = `admin_akses_menu`.`menu_id`
                       WHERE `admin_akses_menu`.`level_id` = $level_id
                    ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

       <!-- LOOP MENU -->
       <?php foreach ($menu as $m) : ?>
           <div class="sidebar-heading">
               <?= $m['menu']; ?>
           </div>

           <!-- SUB MENU -->
           <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT * FROM `admin_sub_menu`
                                     WHERE `menu_id` = $menuId
                                       AND `menu_active` = 1
                            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

           <?php foreach ($subMenu as $sm) : ?>
               <!-- Nav Item - Dashboard -->
               <?php if ($title == $sm['title']) : ?>
                   <li class="nav-item active">
                   <?php else : ?>
                   <li class="nav-item">
                   <?php endif; ?>
                   <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                       <i class="<?= $sm['icon'];  ?>"></i>
                       <span><?= $sm['title'];  ?></span></a>
                   </li>
               <?php endforeach; ?>

               <!-- Divider -->
               <hr class="sidebar-divider">
           <?php endforeach; ?>

           <!-- Nav Item - Charts -->
           <li class="nav-item">
               <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                   <i class="fas fa-fw fa-sign-out-alt"></i>
                   <span>Logout</span></a>
           </li>

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>

   </ul>
   <!-- End of Sidebar -->