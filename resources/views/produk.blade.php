@extends('app_home')

@section ('content')


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">


                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Data Obat {{$data4->nama_produk}}</strong>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

 <div class="row products">
                    @foreach($data2 as $key => $produk)
           <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="{{url('gambar/'.$produk->Gambar)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="{{url('gambar/'.$produk->Gambar)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="{{url('gambar/'.$produk->Gambar)}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>{{$produk->nama_obat}}</h3>
                                    <p class="price">Rp. {{$produk->harga}}</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        @endforeach
@endsection