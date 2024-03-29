<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700"
      rel="stylesheet"
    />

  </head>
  <body>
    <!-- HEADER =============================-->
    <header class="item header margin-top-0">
      <div class="wrapper">
        @extends('navbar')
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="text-pageheader">
                <div
                  class="subtext-image"
                  data-scrollreveal="enter bottom over 1.7s after 0.0s"
                >
                  Checkout
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- CONTENT =============================-->
    <section class="item content">
      <div class="container toparea">
        <div class="underlined-title">
          <div class="editContent">
            <h1 class="text-center latestitems">MAKE PAYMENT</h1>
          </div>
          <div class="wow-hr type_short">
            <span class="wow-hr-h">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
          </div>
        </div>
        <div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">
          <form id="edd_checkout_cart_form" method="post">
            <div id="edd_checkout_cart_wrap">
              
            </div>
          </form>
          <div id="edd_checkout_form_wrap" class="edd_clearfix">
            <form
              id="edd_purchase_form"
              class="edd_form"
              action="{{ route('infopersonal',[$barang['id']])}}"
              method="POST"
              enctype="multipart/form-data"
            >
            <table id="edd_checkout_cart" class="ajaxed">
              <thead>
                <tr class="edd_cart_header_row">
                  <th class="edd_cart_item_name">Item Name</th>
                  <th class="edd_cart_item_price">Item Price</th>
              
                </tr>
              </thead>
              <tbody>
                <tr
                  class="edd_cart_item"
                  id="edd_cart_item_0_25"
                  data-download-id="25"
                >
                  <td class="edd_cart_item_name">
                    <div class="edd_cart_item_image">
                      <img
                        width="150"
                        height="150"
                        src="{{$barang->photo}}"
                        alt=""
                      />
                    </div>
                    <span class="edd_checkout_cart_item_title"
                      >{{$barang->nama}}</span
                    >
                  </td>
                  <td class="edd_cart_item_price">{{$barang->harga}}</td>
                  
                  
                </tr>
              </tbody>
              <tfoot>
                
                <tr
                  class="edd_cart_footer_row edd_cart_discount_row"
                  style="display: none"
                >
                  <th colspan="5" class="edd_cart_discount"></th>
                </tr>
                <tr class="edd_cart_footer_row">
                  <th class="edd_cart_total">
                    Total:
                    <span
                      class="edd_cart_amount"
                      data-subtotal=""
                      data-total=""
                      >{{$barang->harga*1+15000}}</span
                    >
                   
                  </th>
                  <th>
                    <span>Quantity : </span> <input type="number" name="quantity" id="quantity" value="1" max="10" min="1" step="1">
                  </th>
                
                </tr>
              </tfoot>
            </table>
            @csrf
            <input type="hidden" name="id_barang" value="{{ $barang['id'] }}">
                <input type="hidden" name="edd_action" value="purchase" />
                <input type="hidden" name="edd-gateway" value="manual" />
                <input
                  type="submit"
                  class="edd-submit button"
                  id="edd-purchase-button"
                  name="edd-purchase"
                  value="Purchase"
                />
              </fieldset>
            </form>
          </div>
        </div>
      </div>
      
    </section>

    <!-- CALL TO ACTION =============================-->
    <section class="content-block" style="background-color: #00bba7">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div
              class="item"
              data-scrollreveal="enter top over 0.4s after 0.1s"
            >
              <h1 class="callactiontitle"></h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER =============================-->
    <div class="footer text-center">
      <div class="container">
        <div class="row">
          <p class="footernote">connection with blackmarket</p>
          <ul class="social-iconsfooter">
            <li>
              <a href="#"><i class="fa fa-phone"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </li>
          </ul>
          <p>&copy; 2021 conection with blackmarket<br /></p>
        </div>
      </div>
    </div>

        <!-- SCRIPTS =============================-->
        <script src="{{asset('js/jquery-.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/anim.js')}}"></script>
    <script>
      function chekjenis() {
        var jenis=$("#jenis-pembayaran").val()
        if(jenis=="transfer"){
          $("#bank").show()
      }else{
        $("#bank").hide()
          }
      }
    </script>
  </body>
</html>
