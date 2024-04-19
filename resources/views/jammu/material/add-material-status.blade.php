@include('component.head')
@include('component.kusum-header')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper formBack">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">

    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default borderCard">
        <div class="card-header ">
          <h3 class="card-title text-bold">Material Status Form</h3>
        </div>
        @if(session()->has('status'))
        <div class="alert my-3 p-3 alert-success">
          {{session('status')}}
        </div>
        @endif
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
        @endforeach
        @endif
      
        <form action="{{route('save-material')}}" method="Post">
          @csrf
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with * required input
              fields.</h6>
            <div class="row">
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="orderPump">Order Pump Capacity</label>
                <input type="text" name="order_pump_capacity" id="order_pump_capacity" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="head">Head</label>
                <input type="text" name="head" id="head" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="actualOrder">Actual Order</label>
                <input type="text" name="actual_order" id="actual_order" class="form-control">
              </div>

              <div class="col-12 mt-3">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Pump </p>
              </div>
         

              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="pump_available">Pump Available</label>
                <input type="text" name="pump_available" id="pump_available" class="form-control">
              </div>

              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="pump_sent_site">Pump Sent on Site</label>
                <input type="text" name="pump_sent_site" id="pump_sent_site" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="pump_req">Pump requirement</label>
                <input type="text" name="pump_req" id="pump_req" class="form-control">
              </div>

              <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  BOS
                </p>
              </div>
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="bos_available">BOS Available</label>
                <input type="text" name="bos_available" id="bos_available" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6   col-12  form-group">
                <label style="color: rgb(61, 22, 22);" for="bos_sent_site">BOS Sent on Site</label>
                <input type="text" name="bos_sent_site" id="bos_sent_site" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="bos_req">BOS Requirement</label>
                <input type="text" name="bos_req" id="bos_req" class="form-control">
              </div>

              <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Modules
                </p>
              </div>
                   <div class="col-lg-4 col-md-6   col-12  form-group">
                <label style="color: rgb(61, 22, 22);" for="FatherName">Modules Available
                </label>
                <input type="text" name="module_available" id="module_available" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="FatherName">Modules Sent on Site
                </label>
                <input type="text" name="module_sent_site" id="module_sent_site" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6   col-12  form-group">
                <label style="color: rgb(61, 22, 22);" for="module_req">Modules Required
                </label>
                <input type="text" name="module_req" id="module_req" class="form-control">
              </div>
              <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Structure
                </p>
              </div>
              <div class="col-lg-4 col-md-6   col-12  form-group">
                <label style="color: rgb(61, 22, 22);" for="structure_available">Structure Available
                </label>
                <input type="text" name="structure_available" id="structure_available" class="form-control">
              </div>

              <div class="col-lg-4 col-md-6   col-12  form-group">
                <label style="color: rgb(61, 22, 22);" for="structure_sent_site">Structure Sent on Site
                </label>
                <input type="text" name="structure_sent_site" id="structure_sent_site" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6   col-12  form-group">
                <label style="color: rgb(61, 22, 22);" for="structure_req">Structure Required
                </label>
                <input type="text" name="structure_req" id="structure_req" class="form-control">
              </div>
            </div>

          </div>

          <div class="card-footer" style="background-color: green;  ">
            <button type="submit" class="btn btn-info  btnSubt  text-bold mr-3">Submit</button>
            <button type="reset" class="btn btn-info btnCanc  text-bold">
              Cancel</button>
          </div>

        </form>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- / Content -->
<!-- Footer -->



@include("component.footer");