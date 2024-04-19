<style>
  .dot {
    display: block;
    position: absolute;
    height: 10px !important;
    width: 10px !important;
    background-color: #6de708;
    border-radius: 50%;
    top: 25px;
    left: 35px;
  }

  .activePage {
    background-color: #785822;

    font-weight: 800;
  }

  .sidesEle {
    font-size: 16px;
    font-weight: 400;
  }
</style>
</head>



<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm"
      style="height:58px; background-color: rgb(51, 50, 50) !important; position: sticky; top: 0%; ">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item sidesEle ">
          <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item sidesEle  hidden-mobile">
          <div class="user-panel  d-flex">
            <div class="image">
              <img src="{{asset('dist/img/avatar4.png')}}" class="img-circle elevation-2" alt="User Image">
              <span class="dot"></span>
            </div>
            <!--<div class="info">-->
            <!--  <a href="#" class="d-block text-white">Alexander Pierce</a>-->
            <!--</div>-->
          </div>
        </li>
        <li class="nav-item sidesEle ">
          <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>


      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-secondary elevation-4"
      style="background-color:rgb(51, 50, 50) !important; height: 100vh !important; position: fixed;">



      <p class="brand-link text-light  " >

        <img src="{{asset('dist/img/klk.png')}}" alt="AdminLTE Logo" class="brand-image img-circle p-1 elevation-3"
          style=" background-color: white;padding: 2px;">
        <span class="brand-text text-white">KLK Ventures</span>

      </p>

      <div class="sidebar">


        <nav>
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat" data-widget="treeview" role="menu"
            data-accordion="false">

                          <li class="nav-item sidesEle bord ">
                            <a href="{{route('kusum-dashboard')}}" class="nav-link  p-2  ">
                                <i class="nav-icon fas fa-home "></i>
                                <p class="text-white ">
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        
                         <li class="nav-item sidesEle bord ">
                            <a href="{{route('view-farmer')}}" class="nav-link  p-2  ">
                                <i class="nav-icon fas fa-users "></i>
                                <p class="text-white ">
                                    Farmer
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle bord activePage">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">Survey<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">


                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('add-site-survey')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add Survey
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('view-site-survey')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View Survey
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item sidesEle bord">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p class="text-white">Stock</p>
                            </a>
                        </li>
                        <li class="nav-item sidesEle bord">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fa fa-download"></i>
                                <p class="text-white">Installation</p>
                            </a>
                        </li>
                        <li class="nav-item sidesEle bord">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fa fa-file"></i>
                                <p class="text-white">Documentation</p>
                            </a>
                        </li>
                        <li class="nav-item sidesEle bord">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fa fa-check"></i>
                                <p class="text-white">Inspection</p>
                            </a>
                        </li>
                        <li class="nav-item sidesEle bord">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fa fa-credit-card"></i>
                                <p class="text-white">Payment</p>
                            </a>
                        </li>
                        <li class="nav-item sidesEle bord">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-comment"></i>
                                <p class="text-white">Complaint</p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle bord">
                            <a href="{{route('view-product')}}" class="nav-link p-2">
                                <i class="nav-icon fa fa-xing"></i>
                                <p  class="text-white" >
                                   Product
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle bord">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-users"></i>
                                <p  class="text-white" >
                                   Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add-request')}}" class="nav-link">
                                    <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>Add Request</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('view-request')}}" class="nav-link">
                                    <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>View Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item  sidesEle bord">
                            <a href="#" class="nav-link  p-2">
                                <i class="nav-icon fas fa-users"></i>
                                <p  class="text-white" >
                                   Dispatch
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                    <a href="{{route('inhouse-product-dispatch')}}" class="nav-link">
                                    <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>Inhouse Dispatch</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('view-inhouse-dispatch')}}" class="nav-link">
                                    <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>View Inhouse</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('add-product-dispatch')}}" class="nav-link">
                                    <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p >Product Dispatch</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('view-product-dispatch')}}" class="nav-link">
                                    <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>View Outer</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
          </ul>
        </nav>

      </div>

    </aside>