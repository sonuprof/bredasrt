@include('component.head')
@include('component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>14440</h3>

                <p>Contract Quantity</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>10255<sup style="font-size: 20px"></sup></h3>

                <p>Supply Quantity</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>7344</h3>

                <p>Installation Quantity</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>3576</h3>

                <p>Data on Portal</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-map-marked"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Bill Submitted <span class="text-bold">40%</span></span>
                  <span class="info-box-number">9160 <small></small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Payment Recieved <span class="text-bold">40%</span></span>
                  <span class="info-box-number">3592</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-truck-loading"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Bill Submitted <span class="text-bold">5%</span></span>
                  <span class="info-box-number">5320</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-wrench"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Payment Recieved <span class="text-bold">5%</span></span>
                  <span class="info-box-number">1602</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Payment Recieved <span class="text-bold">25%</span></span>
                  <span class="info-box-number">3440 <small></small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Data Shared for Online</span>
                  <span class="info-box-number">5032</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-12 ">
            <div class="row">
              <div class="col-12">
                <div class="card p-0">
                  <div class="card-header">
                    <p class="card-title text-secondary text-bold">SSL Status</p>
                  </div>
                  <div class="card-body p-0">
                  <table class="table table-hover d-block table-bordered" style="overflow-x: auto;">
                      <thead class="table-active">
                        <tr>
                          <th>Area</th>
                          <th style="text-wrap: nowrap;">Work Order no. <br>Date - dd-mm-yy</th>
                          <th style="text-wrap: nowrap;">Contract Qty</th>
                          <th style="text-wrap: nowrap;">Supply Qty</th>
                          <th style="text-wrap: nowrap;">Bill Submitted 40%</th>
                          <th style="text-wrap: nowrap;">Payment Received 40%</th>
                          <th style="text-wrap: nowrap;">Installation Qty</th>
                          <th style="text-wrap: nowrap;">Bill Submitted <br>5%</th>
                          <th style="text-wrap: nowrap;">Payment Received 5%</th>
                          <th style="text-wrap: nowrap;">Payment Received 25%</th>
                          <th style="text-wrap: nowrap;">Data Shared for Online</th>
                          <th style="text-wrap: nowrap;">Data Portal</th>
                        </tr>
                      </thead>
                      <tbody id="sslBody">
                        <tr>
                          <td>Gaya</td>
                          <td>1314 & 10-06-23</td>
                          <td>1600</td>
                          <td>1420</td>
                          <td>1600</td>
                          <td>760</td>
                          <td>1120</td>
                          <td>800</td>
                          <td>480</td>
                          <td>480</td>
                          <td>760</td>
                          <td>705</td>
                        </tr>
                        <tr>
                          <td>Motihari</td>
                          <td>290, 405, 432, 3517 & 17-07-23, 15-09-23, 30-09-23, 30-09-23</td>
                          <td>3680</td>
                          <td>3060</td>
                          <td>2440</td>
                          <td>1190</td>
                          <td>2320</td>
                          <td>1160</td>
                          <td>0</td>
                          <td>1160</td>
                          <td>1120</td>
                          <td>348</td>
                        </tr>
                        <tr>
                          <td>Muzaffarpur</td>
                          <td>18 & 02-01-24</td>
                          <td>1920</td>
                          <td>600</td>
                          <td>160</td>
                          <td>0</td>
                          <td>80</td>
                          <td>160</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Nalanda</td>
                          <td>2537 & 12-10-23</td>
                          <td>1160</td>
                          <td>1160</td>
                          <td>600</td>
                          <td>240</td>
                          <td>592</td>
                          <td>600</td>
                          <td>0</td>
                          <td>0</td>
                          <td>592</td>
                          <td>366</td>
                        </tr>
                        <tr>
                          <td>Patna</td>
                          <td>2400 & 30-06-23</td>
                          <td>3080</td>
                          <td>2735</td>
                          <td>3080</td>
                          <td>1122</td>
                          <td>2080</td>
                          <td>2040</td>
                          <td>1122</td>
                          <td>1240</td>
                          <td>2000</td>
                          <td>1689</td>
                        </tr>
                        <tr>
                          <td>Rohtas</td>
                          <td>1788 & 27-06-23</td>
                          <td>3000</td>
                          <td>1280</td>
                          <td>1280</td>
                          <td>280</td>
                          <td>1152</td>
                          <td>560</td>
                          <td>0</td>
                          <td>560</td>
                          <td>560</td>
                          <td>468</td>
                        </tr>
                      </tbody>
                      <tfoot style="background-color: #e7e7e7e7;">
                        <tr id="setData">
                          <th colspan="2">Total</th>
                          <th id="2">12</th>
                          <th id="3">13</th>
                          <th id="4">14</th>
                          <th id="5">15</th>
                          <th id="6">16</th>
                          <th id="7">17</th>
                          <th id="8">18</th>
                          <th id="9">19</th>
                          <th id="10">20</th>
                          <th id="11">21</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-12 ">


          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
  @include('component.footer')