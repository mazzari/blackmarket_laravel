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
    <header class="item header margin-top-0">
        <div class="wrapper">
          @extends('navbar')<div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="text-pageheader">
                  <div
                    class="subtext-image"
                    data-scrollreveal="enter bottom over 1.7s after 0.0s"
                  >
                    Detail Transaksi
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      {{-- content --}}

      <section class="item content">
        <div class="container toparea">
            <div class="underlined-title">
              <div class="editContent">
                <h1 class="text-center latestitems">Detail Transaksi</h1>
              </div>
            <br/><br/>
            <h1 class="text-center">TOTAL BELANJA</h1>
            <h2 style="text-align: center">{{$orders->total_order}}</h2>
            <h4 style="text-align: center; margin-top:50px"><a href="/shop" style=" width:50px;background-color:red;padding:15px; border-radius:20px; color:white;">Lanjut Belanja</a></h4>
        </div>
        </div>
      </section>
  </body>