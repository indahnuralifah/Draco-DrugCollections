@extends('admin')
@section('content')

<div class="right_col" role="main">
     <div class="x_panel" style="">
            <div class="x_title">
                    <h2>Form Produk</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>

           <form action="{{ url('/produk/update/') }}" method="POST" enctype="multipart/form-data" autocomplete="off">     
            <input type="hidden" name="id" value="{{$data->id}}">  
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           
            <div class="x_content">
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Nama barang</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="nama_barang" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>   


            <div class="x_content">
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Harga</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="harga" name="harga" class="form-control col-md-7 col-xs-12" type="text" size="12" maxlength="12" onkeypress="return isNumberKey(event)" required>
             </div>
            </div>    

            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
             <label for="password" class="control-label col-md-3">Nama Produk</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
           <select class="form-control" name="nama_produk">
           @foreach ($produk as $masterproduk)
               <option>{{ $masterproduk->nama_produk }}</option>
          
           @endforeach
            </select>
            </div>
            </div>



             <div class="x_content">
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Jumlah Stok barang</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="harga" name="total" class="form-control col-md-7 col-xs-12" type="text" size="12" maxlength="12" onkeypress="return isNumberKey(event)" required>
             </div>
            </div>    

            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Gambar</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" name="gambar">
            </div>
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
            </form>
        </div>
     </div>

  <div class="x_panel" style="">       
            <div class="x_title">
                    <h2>View Produk</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
                  <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                                <tr class="headings">
                                 <th>No<center> </th>
                                 <th>Nama Barang</th>
                                 <th>Harga</th>
                                 <th>Nama Produk</th>
                                 <th>Stok</th> 
                                 <th>Gambar</th>
                                 <th></th>
                                 <th></th>
                                </tr>
                             </thead> 
                           <tbody>   
                           <?php $i = 1; ?>
                          @foreach($b as $bb)
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $bb->nama_barang}}</td>
                            <td>{{ $bb->harga}}</td>
                            <td>{{ $bb->nama_produk}}</td>
                            <td>{{ $bb->total}}</td>
                            <td><img src="{{ url('image/'.$bb->image) }}" alt="" style="max-width:100%;height: 40px;"></td>
                            <td>
                        <a href="{{ url('/edit/produk/'.$bb->id) }}"><i class="fa fa-pencil" style="font-size: 16px !important"></i> Edit</a>
                        </td>
                        <td>
                              <a href="{{ url('/delete/produk/'.$bb->id) }}" onclick="return confirm('Delete?')"><i class="fa fa-times"></i> Delete</a>
                              </td>
                         </tr> 
                          @endforeach                     
                    </tbody>
                  </table>
                </div>
            </div>

     </div>
    </div>
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

    <!-- /datepicker -->
    <!-- /footer content -->
</body>

@endsection
</html>