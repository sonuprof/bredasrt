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
        <!-- Request Product -->
        <div class="card">
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
<form action="#">
            <div class="card-body">
              <p class="text-muted small">* marked filled must be filled.</p>
              <div class="row">
                
                <div class="col-md-6 form-group">
                  <label for="dispatchDate">Date of Dispatch *</label>
                  <input type="date" name="dispatchDate" id="dispatchDate" class="form-control" required>
                </div>
                
                <div class="col-md-6 form-group">
                  <label for="truckNum">Truck Number *</label>
                  <input type="text" name="truckNum" id="truckNum" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                  <label for="challanNum">Challan Number *</label>
                  <input type="text" name="challanNum" id="challanNum" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                  <label for="driverNum">Driver Number *</label>
                  <input type="phone" pattern="[0-9]{10-13}" name="driverNum" id="driverNum" class="form-control" required>
                </div>
                
                
                <div class="col-12 form-group">
                  <label for="dispatchType">Type of Dispatch *</label>
                  <select name="dispatchType" id="dispatchType" class="form-control" onchange="toggler(this)" required>
                    <option value="dis" >Select...</option>
                    <option value="internal">Internal Dispatch</option>
                    <option value="external">External Dispatch</option>
                  </select>
                </div>

                <div class="col-12 form-group" id="showInternal" style="display: none;">
                  <label for="ware">Warehouse Name *</label>
                  <select name="ware" id="ware" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="dimak">Dimak</option>
                  </select>
                </div>

                <div class="col-md-6 form-group hiddenDimak" style="display: none;">
                  <label for="siteName">Site Name *</label>
                  <input type="text" name="siteName" id="siteName" class="form-control">
                </div>
                
                <div class="col-md-6 form-group hiddenDimak" style="display: none;">
                  <label for="location">Location *</label>
                  <input type="text" name="location" id="location" class="form-control">
                </div>
                
                <div class="col-12 form-group">
                  <table class="table table-bordered table-hoverable d-block d-md-table" style="overflow-x:auto">
                    <thead>
                      <tr>
                        <th style="width:50%;">Product Name</th>
                        <th style="width:20%;">Quantity</th>
                        <th style="width:20%;">Unit</th>
                        <th style= text-align: center;"><i class="fa fa-trash-alt"></i></th>
                      </tr>
                    </thead>
                    <tbody id="prodTable">
                    <tr>
                          <td style="width:50%;">
                            <select name="products[]" id="prodName" class="form-control">
                              <option value="dis">Select...</option>
                              @foreach($product as $products)
                              <option value="{{$products->id}}">{{$products->name}} | {{$products->capacity}}</option>
                              @endforeach
                            </select>
                          </td>
                          <td style="width:20%;"><input type="number" name="quantitiess[]" id="prodQuant" class="form-control"></td>
                          <td style="width:20%;"><input type="text" name="units[]" id="unit" class="form-control"></td>
                          <td align="center"><button class="btn btn-danger" type="button" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                      <td colspan="3">
                        <button type="button" class="btn btn-secondary rounded-circle" onclick="addFields()"><i class="fa fa-plus"></i></button>
                      </td>
                    </tfoot>
                  </table>
                </div>
                
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Submit</button>
              <button class="btn btn-default float-right">Cancel</button>
            </div>
          </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->

 <script>
  function toggler(input){
    let option = input.value;
    if(option == 'internal'){
      document.getElementById('showInternal').style.display = "block";
      document.getElementById('showInternal').children[1].setAttribute('required', true);
      for(i=0;i<2;i++){
        document.getElementsByClassName('hiddenDimak')[i].style.display = "none";
        document.getElementsByClassName('hiddenDimak')[i].children[1].value = "";
        document.getElementsByClassName('hiddenDimak')[i].children[1].removeAttribute('required');
      }
    }
    else if(option == 'external'){
      for(i=0;i<2;i++){
        document.getElementsByClassName('hiddenDimak')[i].style.display = "block";
        document.getElementsByClassName('hiddenDimak')[i].children[1].setAttribute('required', true);
      }
      document.getElementById('showInternal').style.display = "none";
      document.getElementById('showInternal').children[1].value = "dis";
      document.getElementById('showInternal').children[1].removeAttribute('required');
    }
    else{
      for(i=0;i<2;i++){
        document.getElementsByClassName('hiddenDimak')[i].style.display = "none";
        document.getElementsByClassName('hiddenDimak')[i].children[1].value = "";
        document.getElementsByClassName('hiddenDimak')[i].children[1].removeAttribute('required');
      }
      document.getElementById('showInternal').style.display = "none";
      document.getElementById('showInternal').children[1].value = "dis";
      document.getElementById('showInternal').children[1].removeAttribute('required');
    }
  }

  function deleteRow(field){
    let row = field.parentElement.parentElement;
    row.remove();
  } 

  function addFields(){
    let table = document.getElementById('prodTable');
    let newRow = document.createElement('tr');
    newRow.innerHTML = `
    <td style="width:50%;">
      <select name="prodName" id="prodName" class="form-control">
        <option value="dis">Select...</option>
        <option value="dimak">Dimak</option>
      </select>
    </td>
    <td style="width:20%;"><input type="number" name="prodQuant" id="prodQuant" class="form-control"></td>
    <td style="width:20%;"><input type="text" name="unit" id="unit" class="form-control"></td>
    <td align="center"><button class="btn btn-danger" type="button" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
    `;
    table.appendChild(newRow);
  } 
</script>

@include('component.footer')


