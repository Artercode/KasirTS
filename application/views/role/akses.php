<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="far fa-circle"></i></i> Role Akses</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h5">
                     Role Akses: <br>

                  </div>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <div class="container-fluid">
      <?php $this->view('layouts/alert') ?>
      <div class="row">

         <!-- #################### akses ################################################## -->
         <div class="mt-n3 col-md-6">
            <!-- ########## form tambah role ########## -->
            <div class="card-header border-transparent bg-info">
               <?= form_open('role/tambah_akses', ['method' => 'POST']) ?>
               <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
               <div class="mb-n3 row">
                  <div class="col-md-2">
                     <div class="form-group">
                        <?= form_input('role_id', $input->role_id, ['class' => 'form-control', 'name' => 'role_id', 'placeholder' => 'ID Role']) ?>
                        <?= form_error('role_id') ?>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <?= form_input('menu_id', $input->menu_id, ['class' => 'form-control', 'name' => 'menu_id', 'placeholder' => 'ID Menu']) ?>
                        <?= form_error('menu_id') ?>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <?= form_input('submenu_id', $input->submenu_id, ['class' => 'form-control', 'name' => 'submenu_id', 'placeholder' => 'ID Submenu']) ?>
                        <?= form_error('submenu_id') ?>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <?= form_input('aktif', $input->aktif, ['class' => 'form-control', 'name' => 'aktif', 'placeholder' => 'Aktif']) ?>
                        <?= form_error('aktif') ?>
                     </div>
                  </div>

                  <!-- tambah -->
                  <div class="col-md-4">
                     <div class="form-group">
                        <a type="submit" class="h2 float-right">
                           <i class="far fa-plus-square"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <?= form_close() ?>
            </div>

            <!-- ########## tabel role ########## -->
            <div class="card-body p-0">
               <table class="table table-hover">
                  <thead>
                     <tr class="border">
                        <th>ID Role</th>
                        <th>ID Menu</th>
                        <th>ID Submenu</th>
                        <th>Info</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($content as $ct) : ?>
                        <tr>
                           <td><?= $ct->role_id ?></td>
                           <td><?= $ct->menu_id ?></td>
                           <td><?= $ct->submenu_id ?></td>
                           <td><?= $ct->info ?></td>
                           <td class="text-right">
                              <a href="" type="submit" class="h5 mb-n2 ml-3">
                                 <i class="text-info far fa-edit"></i>
                              </a>
                              <a type="submit" class="h5 mb-n2 ml-3" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                 <i class="text-red far fa-trash-alt"></i>
                              </a>
                           </td>
                        </tr>
                     <?php endforeach ?>
                  </tbody>
               </table>

               <nav class="mt-3 mb-n3" aria-label="Page navigation example">
                  <!-- $pagination method di controller, routes, dan [136]MY_Modal.php -->
                  <?= $pagination ?>
               </nav>
            </div>
         </div>
         <!-- akhir akses -->
      </div>
   </div>
</div>