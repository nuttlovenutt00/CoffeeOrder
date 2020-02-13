    <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('Dashboard'); ?>" class="nav-link Promptfont">หน้าแรก</a>
      </li>
    </ul>



    <ul class="navbar-nav ml-auto ">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <label class="Promptfont Promptfontsize2" >สวัสดี, <?php echo $this->session->userdata('name_per'); ?></label><?php echo nbs(5); ?><i class="fa fa-power-off" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 150px;">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer Promptfontsize">โปรไฟล์</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer Promptfontsize">ออกจากระบบ</a>
        </div>
      </li>
    </ul>
  </nav>
  

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('Dashboard'); ?>" class="brand-link">
      <img src="<?php echo base_url('assets/image/logomenu/001.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle ">
      <span class="brand-text font-weight-light"><?php echo $nameweb; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2 Promptfontsize">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">ระบบงาน</li>
          <li class="nav-item">
            <a href="<?php echo base_url('Order'); ?>" class="nav-link">
              <i class="nav-icon fa fa-plus-circle"></i>
              <p>
                รับออร์เดอร์ลูกค้า               
              </p>
            </a>
          </li>
          <li class="nav-header">จัดการข้อมูล</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" >
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                ข้อมูลสินค้า
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fa fa-caret-square-o-right"></i>
                  <p>จัดการเมนูแนะนำ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Product'); ?>" class="nav-link">
                  <i class="fa fa-caret-square-o-right"></i>
                  <p>จัดการข้อมูลสินค้า</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


