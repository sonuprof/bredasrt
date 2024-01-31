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
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-map-marked"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Sites</span>
                <span class="info-box-number">
                  {{$query->site_count}} Nos.
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Capacity</span>
                <span class="info-box-number">{{$query->sanction_load}} KW</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-truck-loading"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Material Dispatch</span>
                <span class="info-box-number">{{$query->material_i_date}} KW</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-wrench"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Installed</span>
                <span class="info-box-number">{{$query->installation_status}} KW</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Meter</span>
                <span class="info-box-number">
                {{$query->metering_status}} Nos.
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">RMS</span>
                <span class="info-box-number">{{$query->rms_status}} Nos.</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Material Payment</span>
                <span class="info-box-number">{{$query->material_payment}} KW</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">I & C Payment</span>
                <span class="info-box-number">{{$query->ic_payment}} KW</span>
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
          <section class="col-lg-6 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  SRT Status
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales (id="revenue-chart") -->
                  <div class="chart tab-pane active" >
                       <div id="chart"></div>

                       <script>
                         
                           var options = {
                             series: [{
                              name: "SRT Status",
                             data: [<?php echo $srt_g->site_count; ?>,<?php echo $srt_g->material_i_date; ?>,<?php echo $srt_g->installation_status; ?>, <?php echo $srt_g->nf; ?>]
                           }],
                             chart: {
                             height: 350,
                             type: 'bar',
                             events: {
                               click: function(chart, w, e) {
                               }
                             }
                           },
                           plotOptions: {
                             bar: {
                               columnWidth: '45%',
                               distributed: true,
                             }
                           },
                           dataLabels: {
                             enabled: false
                           },
                           legend: {
                             show: false
                           },
                           xaxis: {
                             categories: [
                               ['Total', 'Sites (Nos.)'],
                               ['Material', 'Dispatch (Nos.)'],
                               ['site','Installed  (Nos.)'],
                               ['Not','Feasible (Nos.)',],
                             ],
                             labels: {
                               style: {
                                 fontSize: '12px'
                               }
                             }
                           }
                           };
                   
                           var chart = new ApexCharts(document.querySelector("#chart"), options);
                           chart.render();
                         
                         
                       </script>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col -->
          <section class="col-lg-6 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i> SRT Status</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                       <div id="chart2"></div>

                       <script>
                         
                           var options2 = {
                             series: [{
                              name: "SRT",
                             data: [<?php echo $srt_g->installation_status; ?>,<?php echo $srt_g->metering_status; ?>, <?php echo $srt_g->rms_status; ?>, <?php echo $srt_g->inspect; ?>, <?php echo $srt_g->ic_payment; ?>]
                           }],
                             chart: {
                             height: 350,
                             type: 'bar',
                             events: {
                               click: function(chart2, w, e) {
                               }
                             }
                           },
                           plotOptions: {
                             bar: {
                               columnWidth: '45%',
                               distributed: true,
                             }
                           },
                           dataLabels: {
                             enabled: false
                           },
                           legend: {
                             show: false
                           },
                           xaxis: {
                             categories: [
                                 ['Installed', 'Sites (Nos.)'],
                               ['Meter', 'Installed (Nos.)'],
                               ['RMS', 'Installed (Nos.)'],
                               ['Inspected', 'Sites (Nos.)'],
                                ['Payment','Recieved (Nos.)'],
                             ],
                             labels: {
                               style: {
                                 fontSize: '12px'
                               }
                             }
                           }
                           };
                   
                           var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
                           chart2.render();
                         
                         
                       </script>
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
        
        <!-- Second row -->
        <div class="row">
          <!-- top col -->
          <section class="col-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Details
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="chart tab-pane active">
                       <table class="table text-white text-center" style="background:orange">
                        <!--<tbody>-->
                        <!--<tr>-->
                        <!--    <th>Materials yet to be dispatched</th>-->
                        <!--    <td> <a href="{{asset('/srt-data/not-dispatched')}}"><?php echo $srt_g->not_dispatch; ?> KW </a> </td>-->
                        <!--  </tr>-->
                        <!--  <tr>-->
                        <!--    <th>Site not installed</th>-->
                        <!--    <td><a href="{{asset('/srt-data/not-install')}}"> <?php echo $srt_g->not_install; ?> </a> </td>-->
                        <!--  </tr>-->
                        <!--  <tr>-->
                        <!--    <th>Meter not Working</th>-->
                        <!--   <td> <a href="{{asset('/srt-data/not-working-meter')}}"> <?php echo $srt_g->not_meter; ?>  </a> </td>-->
                        <!--  </tr>-->
                        <!--  <tr>-->
                        <!--    <th>RMS not working</th>-->
                        <!--    <td> <a href="{{asset('/srt-data/not-rms-working')}}"><?php echo $srt_g->not_rms; ?>  </a> </td>-->
                        <!--  </tr>-->
                        <!--</tbody>-->
                        
                          <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Phase</th>
                    <th>Material yet to be dispatched</th>
                     <th>Site installed</th>
                    <th>Site not installed</th>
                    <th>Meter installed</th>
                    <th>Meter not installed</th>
                    <th>RMS installed</th>
                    <th>RMS not installed</th>
                    <th>Image Pending</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($mainsrt as $mainsrts)
                  <tr>
                    <th>{{$number}}</th>
                    <td style="white-space: nowrap;"  ><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/phase/'. $mainsrts->phase)}}">{{$mainsrts->phase}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-dispatched/'. $mainsrts->phase)}}">{{$mainsrts->not_dispatch}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/install/'. $mainsrts->phase)}}">{{$mainsrts->install}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-install/'. $mainsrts->phase)}}">{{$mainsrts->not_install}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/working-meter/'. $mainsrts->phase)}}">{{$mainsrts->meter}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-working-meter/'. $mainsrts->phase)}}">{{$mainsrts->not_meter}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/rms-working/'. $mainsrts->phase)}}">{{$mainsrts->rms}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-rms-working/'. $mainsrts->phase)}}">{{$mainsrts->not_rms}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/pending-image/'. $mainsrts->phase)}}">{{$mainsrts->not_image}} </a></td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  <tr>
                   <th></th>
                    <th>Total</th>
                    <th>{{$srt_g->not_dispatch}}</th>
                     <th>{{$srt_g->install}}</th>
                    <th>{{$srt_g->not_install}}</th>
                    <th>{{$srt_g->meter}}</th>
                   <th>{{$srt_g->not_meter}}</th>
                   <th>{{$srt_g->rms}}</th>
                   <th>{{$srt_g->not_rms}}</th>
                    <th>{{$srt_g->not_image}}</th>
                  </tr>
                  </tfoot>
                       </table>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.top col -->
        </div>
        <!-- /.row (Second row) -->
        
        <!-- Third row -->
        <div class="row">
          
          <!-- modal col -->
          <section class="col-12 ">
            <!-- Custom tabs (Charts with tabs)-->
              <!-- View Tables -->
              <div class="col-12">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Phase Wise</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">District Wise</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Vendor Wise</a>
                    </li>
                </ul>
                <div class="card-body p-0">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <div class="card mb-0">
                          <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center"  style="overflow-x: scroll;">
                            <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Phase</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($phases as $phaseses)
                  <tr>
                    <th>{{$number}}</th>
                    <td style="white-space: nowrap;" >{{$phaseses->phase}}</td>
                    <td>{{$phaseses->site_count}}</td>
                    <td>{{$phaseses->sanction_load}}</td>
                    <td>{{$phaseses->material_i_date}}</td>
                    <td>{{$phaseses->material_payment}}</td>
                    <td>{{$phaseses->installation_status}}</td>
                    <td>{{$phaseses->metering_status}}</td>
                    <td>{{$phaseses->rms_status}}</td>
                    <td>{{$phaseses->abc_format}}</td>
                    <td>{{$phaseses->geo_image_status}}</td>
                    <td>{{$phaseses->insurance}}</td>
                    <td>{{$phaseses->ic_bill_submit}}</td>
                    <td>{{$phaseses->bill_i_no}}</td>
                    <td>{{$phaseses->ic_payment}}</td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  @foreach($sum as $sumes)
                  <tr>
                    <th></th>
                    <th>Total</th>
                    <th>{{$sumes->site_count}}</th>
                    <th>{{$sumes->sanction_load}}</th>
                    <th>{{$sumes->material_i_date}}</th>
                    <th>{{$sumes->material_payment}}</th>
                    <th>{{$sumes->installation_status}}</th>
                    <th>{{$sumes->metering_status}}</th>
                    <th>{{$sumes->rms_status}}</th>
                    <th>{{$sumes->abc_format}}</th>
                    <th>{{$sumes->geo_image_status}}</th>
                    <th>{{$sumes->insurance}}</th>
                    <th>{{$sumes->ic_bill_submit}}</th>
                    <th>{{$sumes->bill_i_no}}</th>
                    <th>{{$sumes->ic_payment}}</th>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>

                      <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="card mb-0">
                          <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center"  style="overflow-x: scroll;">
                            <thead>
                  <tr>
                  <th>Sr. No.</th>
                    <th>District</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($districts as $districtses)
                  <tr>
                    <th>{{$number}}</th>
                    <td style="white-space: nowrap;">{{$districtses->district}}</td>
                    <td>{{$districtses->site_count}}</td>
                    <td>{{$districtses->sanction_load}}</td>
                    <td>{{$districtses->material_i_date}}</td>
                    <td>{{$districtses->material_payment}}</td>
                    <td>{{$districtses->installation_status}}</td>
                    <td>{{$districtses->metering_status}}</td>
                    <td>{{$districtses->rms_status}}</td>
                    <td>{{$districtses->abc_format}}</td>
                    <td>{{$districtses->geo_image_status}}</td>
                    <td>{{$districtses->insurance}}</td>
                    <td>{{$districtses->ic_bill_submit}}</td>
                    <td>{{$districtses->bill_i_no}}</td>
                    <td>{{$districtses->ic_payment}}</td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  @foreach($sum as $sumes)
                  <tr>
                    <th></th>
                    <th>Total</th>
                    <th>{{$sumes->site_count}}</th>
                    <th>{{$sumes->sanction_load}}</th>
                    <th>{{$sumes->material_i_date}}</th>
                    <th>{{$sumes->material_payment}}</th>
                    <th>{{$sumes->installation_status}}</th>
                    <th>{{$sumes->metering_status}}</th>
                    <th>{{$sumes->rms_status}}</th>
                    <th>{{$sumes->abc_format}}</th>
                    <th>{{$sumes->geo_image_status}}</th>
                    <th>{{$sumes->insurance}}</th>
                    <th>{{$sumes->ic_bill_submit}}</th>
                    <th>{{$sumes->bill_i_no}}</th>
                    <th>{{$sumes->ic_payment}}</th>
                  </tr>
                  @endforeach 
                </table>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                      
                      <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                        <div class="card mb-0">
                          <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center"  style="overflow-x: scroll;">
                            <thead>
                  <tr>
                  <tr>
                  <th>Sr. No.</th>
                    <th>Vendor</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($vendors as $vendorses)
                  <tr>
                  <th>{{$number}}</th>
                    <td style="white-space: nowrap;">{{$vendorses->vendor}}</td>
                    <td>{{$vendorses->site_count}}</td>
                    <td>{{$vendorses->sanction_load}}</td>
                    <td>{{$vendorses->material_i_date}}</td>
                    <td>{{$vendorses->material_payment}}</td>
                    <td>{{$vendorses->installation_status}}</td>
                    <td>{{$vendorses->metering_status}}</td>
                    <td>{{$vendorses->rms_status}}</td>
                    <td>{{$vendorses->abc_format}}</td>
                    <td>{{$vendorses->geo_image_status}}</td>
                    <td>{{$vendorses->insurance}}</td>
                    <td>{{$vendorses->ic_bill_submit}}</td>
                    <td>{{$vendorses->bill_i_no}}</td>
                    <td>{{$vendorses->ic_payment}}</td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  @foreach($sum as $sumes)
                  <tr>
                    <th></th>
                    <th>Total</th>
                    <th>{{$sumes->site_count}}</th>
                    <th>{{$sumes->sanction_load}}</th>
                    <th>{{$sumes->material_i_date}}</th>
                    <th>{{$sumes->material_payment}}</th>
                    <th>{{$sumes->installation_status}}</th>
                    <th>{{$sumes->metering_status}}</th>
                    <th>{{$sumes->rms_status}}</th>
                    <th>{{$sumes->abc_format}}</th>
                    <th>{{$sumes->geo_image_status}}</th>
                    <th>{{$sumes->insurance}}</th>
                    <th>{{$sumes->ic_bill_submit}}</th>
                    <th>{{$sumes->bill_i_no}}</th>
                    <th>{{$sumes->ic_payment}}</th>
                  </tr>
                  @endforeach 
                  </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                    </div>
                </div>
            <!-- /. View Tables -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.modal col -->
        </div>
        <!-- /.row (Third row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('component.footer')