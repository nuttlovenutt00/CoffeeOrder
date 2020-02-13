<?php //ประกาศตัวแปรเก็บค่า$autoid  ?>
<script type="text/javascript">
    var autoid = <?php echo "'".$autoid."'"; ?>;
</script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right Promptfontsize">
              <li class="breadcrumb-item"><a href="Dashboard">หน้าแรก </a></li>
              <li class="breadcrumb-item active"><?php echo $breadcrumb; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row" >
        <div class="col-12">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title Promptfontsize2" ><i class="nav-icon fa fa-tasks"></i> จัดการข้อมูลสินค้า</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body Promptfontsize" id="formmain">
              <div class="row">
                <div class="col-sm-1">
                      <a class="btn btn-app Promptfontsize btn-success" style="cursor: pointer;" onclick="insertdata()">
                        <i class="fa fa-plus-square"></i> เพิ่มข้อมูล
                      </a>
                </div>
                <div class="col-sm-1">
                      <a class="btn btn-app Promptfontsize  btn-info" style="cursor: pointer;" onclick="refresh()">
                        <i class="fa fa-refresh" id="btn-refresh"></i> รีเฟรช
                      </a>
                </div>
              </div>
              <p>&nbsp;</p>
              <div class="row">
                <div class="col-12" id="load-products">
                    <table id="example1" class="table table-bordered table-hover ">
                      <thead>
                      <tr >
                        <th width="17%">จัดการ</th>
                        <th width="5%" align="center">ลำดับ</th>
                        <th width="10%">ประเภท</th>
                        <th width="10%">รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th width="10%">ราคา</th>
                        <th width="10%">หน่วยนับ</th>
                        <th width="10%">สถานะ</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $num=1; foreach ($detailpro as $rs) { ?>
                      <tr>
                        <td><div class="btn-group ">
                            <button type="button" class="btn btn-primary btn-sm Promptfontsize" onclick="editdata('<?php echo $rs->PId; ?>','<?php echo $rs->t_name; ?>','<?php echo $rs->PName; ?>','<?php echo $rs->PPrice; ?>','<?php echo $rs->UName; ?>','<?php echo $rs->PStatus;?>')"><i class="fa fa-edit"></i> แก้ไข</button>
                            <button type="button" class="btn btn-info btn-sm Promptfontsize" onclick="copydata('<?php echo $rs->t_name; ?>','<?php echo $rs->PName; ?>','<?php echo $rs->PPrice; ?>','<?php echo $rs->UName; ?>','<?php echo $rs->PStatus;?>')"><i class="fa fa-clone"></i> คัดลอก</button>
                            <button type="button" class="btn btn-danger btn-sm Promptfontsize" onclick="SwalDelete('<?php echo $rs->PId; ?>','<?php echo $rs->PName; ?>')"><i class="fa fa-trash-o"></i> ลบ</button>
                          </div></td>
                        <td align="center"><?php echo $num ?></td>
                        <td><?php echo $rs->t_name; ?></td>
                        <td><?php echo $rs->PId; ?></td>
                        <td><?php echo $rs->PName; ?></td>
                        <td align="right"><?php echo "฿".number_format($rs->PPrice,2); ?></td>
                        <td><?php echo $rs->UName; ?></td>
                        <td><?php echo $rs->PStatus; $num++?></td>
                      </tr> 

                      <?php } ?>               
                      </tbody>
                </table>
                
              </div>
            </div>
            </div>
            <div class="card-body Promptfontsize" id="formmainload" style="display: none"><center>
                <i class="fa fa-circle-o-notch fa-spin" style="font-size:14px"></i> <label class="Promptfontsize">loadding...</label>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="modal-addproduct" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <label class=" Promptfontsize2" style="font-weight: 200;" id="textheader"></label>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="form_insertpro">
            <div class="modal-body">
                <div class="card-body Promptfontsize" >
                  <div id="form_body_insert">
                    <div class="form-group ">
                      <label for="id_pro">รหัสสินค้า</label>
                      <input type="text" class="form-control Promptfontsize" id="id_pro" name="id_pro" placeholder="รหัสสินค้า" readonly="readonly" value="<?php echo $autoid; ?>" autocomplete="off" ng-model="">
                    </div>
                    <div class="form-group" >
                        <label>ประเภทสินค้า</label>
                        <select class="form-control Promptfontsize" id="type_pro" name="type_pro">
                          <?php $num=1; foreach ($datatypepro as $rs) { ?>
                            <option value="<?php echo $rs->t_id_auto; ?>" id="<?php echo "typeProduct".$rs->t_name; ?>"><?php echo $rs->t_name; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name_pro">ชื่อสินค้า</label><?php echo nbs(2); ?>
                        <label for="name_pro" style="color: #FF0000;display: none" id="error_namepro_no">คุณไม่ได้กรอกชื่อสินค้า!</label>
                        <label for="name_pro" style="color: #FF0000;display: none" id="error_p_pro_nametwo">ชื่อสินค้าซ้ำ กรุณากรอกใหม่!</label>
                        <input type="text" class="form-control Promptfontsize" id="name_pro" name="name_pro"  placeholder="ชื่อสินค้า" autocomplete="off" onfocus="myFunction(this,'error_namepro_no','error_p_pro_nametwo')">
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                              <label for="p_pro">ราคาสินค้า</label><?php echo nbs(2); ?>
                              <label for="p_pro" style="color: #FF0000;display: none" id="error_p_pro_no">คุณไม่ได้กรอกราคาสินค้า!</label>
                              <label for="p_pro" style="color: #FF0000;display: none" id="error_p_pro_noint">กรุณากรอกราคาสินค้าเป็นตัวเลข!</label>
                              <label for="p_pro" style="color: #FF0000;display: none" id="error_p_pro_zero">ไม่สามารถกรอกราคาสินค้าต่ำกว่าหรือดท่ากับ 0 ได้!</label>
                              <input type="number" class="form-control Promptfontsize" id="p_pro" name="p_pro" placeholder="0.00" autocomplete="off" onfocus="myFunction(this,'error_p_pro_no','error_p_pro_noint','error_p_pro_zero')">
                            </div>   
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>หน่วยนับ</label>
                                <select class="form-control Promptfontsize" id="unit_pro"  name="unit_pro">
                                  <?php $num=1; foreach ($dataunitpro as $rs) { ?>
                                    <option value="<?php echo $rs->UId; ?>" id="<?php echo "Unit".$rs->UName; ?>"><?php echo $rs->UName; ?></option>
                                  <?php } ?>
                                </select>
                            </div>
                        </div>
                     </div>  
                    <div class="form-group">
                        <label>สถานะ</label>
                        <select class="form-control Promptfontsize" id="status_pro"  name="status_pro">
                            <option value="เปิดใช้งาน" selected="selected">เปิดใช้งาน</option>
                            <option value="ปิดใช้งาน">ปิดใช้งาน</option>
                        </select>
                    </div>
                  </div>
                  <div class="row" id="form_body_insert_load" style="display: none">
                    <div class="col-md-12">
                        <center>
                          <label class="Promptfontsize2">กำลังดำเนินการ...</label><br>
                          <i class="fa fa-refresh fa-spin" style="font-size:30px;color: #6c757d"></i></center>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm Promptfontsize" data-dismiss="modal" >ยกเลิก</button>
              <button type="button" class="btn btn-success btn-sm Promptfontsize" id="insert_pro"><i class="fa fa-plus-square"></i> เพิ่มข้อมูล</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
    </section>
    
  </div>

<script src="<?php echo base_url('assets/js/ajax/product/ajax_product_view.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>


