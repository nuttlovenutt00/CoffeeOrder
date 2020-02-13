

<div class="content-wrapper" ng-controller="indexController">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group">
                        <button type="button" class="btn btn-default">ทั้งหมด</button>
                        <button type="button" class="btn btn-default">พนักงาน</button>
                        <button type="button" class="btn btn-default">พนักงานชงกาแฟ</button>
                      </div>
          </div>
          <div class="col-sm-6" >
            <ol class="breadcrumb float-sm-right Promptfontsize">
              <li class="breadcrumb-item"><a href="Dashboard">หน้าแรก</a></li>
              <li class="breadcrumb-item active">รับออร์เดอร์ลูกค้า</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="row Promptfontsize">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-history" aria-hidden="true"></i></i> รายการที่รอชำระเงิน</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-hover text-nowrap">
                  <tbody>
                    <tr>
                      <td width="20px"><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-binoculars" aria-hidden="true"></i> ดูข้อมูล</button></td>                      
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td width="20px"><button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</button></td>
                      <td width="20px"><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-bell" aria-hidden="true"></i> ส่งเสียงเตือน</button></td>
                      <td width="20px"><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-credit-card" aria-hidden="true"></i> ชำระเงิน</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row Promptfontsize">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายการที่ชำระเงินแล้ว</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-hover text-nowrap">
                  <tbody>
                    <tr>
                      <td width="20px"><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-binoculars" aria-hidden="true"></i> ดูข้อมูล</button></td>                      
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td width="20px"><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-credit-card" aria-hidden="true"></i> ชำระเงิน</button></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              </div>
            </div>
            <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายการที่กำลังทำ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-hover text-nowrap">
                  <tbody>
                    <tr>
                      <td width="20px"><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-binoculars" aria-hidden="true"></i> ดูข้อมูล</button></td>                      
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td width="20px"><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-credit-card" aria-hidden="true"></i> ชำระเงิน</button></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              </div>
            </div>
            <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายการที่เสร็จแล้ว</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-hover text-nowrap">
                  <tbody>
                    <tr>
                      <td width="20px"><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-binoculars" aria-hidden="true"></i> ดูข้อมูล</button></td>                      
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td width="20px"><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-credit-card" aria-hidden="true"></i> ชำระเงิน</button></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
            
        </div>
    </section>
    
  </div>
  