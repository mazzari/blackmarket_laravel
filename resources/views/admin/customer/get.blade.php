<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- BOOTSTRAP STYLES-->
    <link href={{ asset('admin/css/bootstrap.css') }} rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href={{ asset('admin/css/font-awesome.css') }} rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href={{ asset ('admin/css/custom.css') }} rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Black market</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="{{url('home')}}" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    	
                   	
                    <li>
                        <a  href="{{url('admin/index')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="{{url('admin/datapelanggan')}}"><i class="fa fa-desktop fa-3x"></i> Data pelanggan</a>
                    </li>
                    <li>
                        <a  href="{{url('admin/pemesanan')}}"><i class="fa fa-qrcode fa-3x"></i>Pemesanan</a>
                    </li>
						   <li  >
                        <a  href="{{url('admin/bank')}}"><i class="fa fa-bar-chart-o fa-3x"></i>Bank</a>
                    </li>	
                      <li  >
                        <a  href="{{url('admin/category')}}"><i class="fa fa-table fa-3x"></i>category</a>
                    </li>
                    <li>
                        <a  href="{{url('admin/barang')}}"><i class="fa fa-table fa-3x"></i>Barang</a>
                    </li>
                    <li>
                        <a  href="{{url('admin/order')}}"><i class="fa fa-table fa-3x"></i>Order</a>
                    </li>
                  <li>
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper"> 
            <div id="page-inner">
            
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data pelanggan</h2>  
                        <table class="table table-striped">
                            <thead>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Nomor telepon</th>
                                <th>email</th>
                                
                            </thead>
                            <tbody>
                            @foreach($pelanggans as $pelanggan)
                            <tr>
                                <td>{{$pelanggan->nama}}</td>
                                <td>{{$pelanggan->alamat}}</td>
                                <td>{{$pelanggan->no_tlp}}</td>
                                <td>{{$pelanggan->email}}</td>    
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS 
    <script src={{ asset('admin/js/jquery-1.10.2.js') }}></script>
      
    <script src={{ asset('admin/js/bootstrap.min.js') }}></script>
   
    <script src={{ asset('admin/js/jquery.metisMenu.js') }}></script>
      
    <script src={{ asset('admin/js/custom.js') }}></script>
    --><!-- BOOTSTRAP SCRIPTS --><!-- CUSTOM SCRIPTS --> <!-- METISMENU SCRIPTS -->
</body>
</html>
