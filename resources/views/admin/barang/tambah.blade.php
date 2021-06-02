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
font-size: 16px;"> <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a  href="{{url('admin/transaksi')}}"><i class="fa fa-qrcode fa-3x"></i>Transaksi</a>
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
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Barang</h2>   
                        
                        <form action="{{url('admin/barang/')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label> Nama </label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> harga </label>
                                <input type="text" name="harga" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> detail </label>
                                <textarea name="detail" class="form-control">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label> stock </label>
                                <input type="text" name="stock" class="form-control">
                            </div><div class="form-group">
                                <label> merk </label>
                                <input type="text" name="merk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>photo </label>
                                <input type="file" name="file" id="photofile" class="from-file">
                            </div>
                            <input type="hidden"id="photo" name="photo">
                            <div class="form-group">
                                <label>category </label>
                                <select class="form-control" name="category_barang_id">
                                    @foreach($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                                
                            <button type="submit" class="btn btn-primary">simpan</button>
                            </form>
                       
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
    <!-- JQUERY SCRIPTS -->
    <script src={{ asset('admin/js/jquery-1.10.2.js') }}></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src={{ asset('admin/js/bootstrap.min.js') }}></script>
    <!-- METISMENU SCRIPTS -->
    <script src={{ asset('admin/js/jquery.metisMenu.js') }}></script>
      <!-- CUSTOM SCRIPTS -->
    <script src={{ asset('admin/js/custom.js') }}></script>
    <script>
        $("#photofile").on('change',function(){
          var selectedFile = this.files[0];
          selectedFile.convertToBase64(function(base64){
            $("#photo").val(base64) 
          })
        });
        File.prototype.convertToBase64 = function(callback){
            var reader = new FileReader();
            reader.onloadend = function (e) {
                  callback(e.target.result, e.target.error);
             };
            reader.readAsDataURL(this);
        };
    </script>
   
</body>
</html>
