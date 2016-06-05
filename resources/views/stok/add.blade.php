@extends('admin')
@section('content')
<div class="right_col" role="main">
     <div class="x_panel" style="">
            <div class="x_title">
                    <h2>Form Blog</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>

           <form action="{{ url('/stok/save/') }}" method="POST" enctype="multipart/form-data">     
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="x_content">
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Kode</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="kode" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>   

          

            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Nama Obat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="nama_obat" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>  


            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Jenis Obat Obat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <select class="form-control" name="jenis_obat">
               <option>Sirup</option>
               <option>Tablet</option>
               <option>Kapsul</option>
            </select> 
             </div>
            </div>  

            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Satuan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
          <select class="form-control" name="satuan">
               <option>Botol</option>
               <option>Kardus</option>
            </select> 
             </div>
            </div> 

         <div class="clearfix"></div>
            <br>
             <div class="item form-group">
             <label for="password" class="control-label col-md-3">Nama Produk</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
           <select class="form-control" name="nama_produk">
           @foreach ($data1 as $keluhan)
               <option>{{ $keluhan->nama_produk }}</option>
          
           @endforeach
            </select>
            </div>
            </div>

            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Ket</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="ket" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>  



            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Harga Jual</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="harga_jual" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>  


            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Harga Beli</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="harga_beli" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>  
            
            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Jumlah Stok</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="jumlah_stok" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>  



            <div class="clearfix"></div>
            <br>
            <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
            </div>
            </div>
        </div>
     </div>
     </div>
    </div>
    <div class="clearfix"></div>

                                
                </div>
            </div>
        </div>
    </div>


    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

</body>
@endsection
</html>