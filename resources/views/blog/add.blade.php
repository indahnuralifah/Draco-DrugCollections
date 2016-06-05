@extends('admin')
@section('content')
         
<div class="right_col" role="main">
     <div class="x_panel" style="">
            <div class="x_title">
                    <h2>Form Blog</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>

           <form action="{{ url('/blog/save/') }}" method="POST" enctype="multipart/form-data">     
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="x_content">
            <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Judul</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="judul" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>   

            <div class="clearfix"></div>
            <br>
            <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Isi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="textarea" required="required" name="isi" class="form-control col-md-7 col-xs-12"></textarea>
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

            <div class="right_col" role="main">
            <div class="x_panel" style="">
            <div class="x_title">
                    <h2>View Blog</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>

            <div class="x_content">
                  <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <tr class="headings">
                         <th>Id<center> </th>
                         <th>Judul</th>
                         <th>Isi</th>
                         <th>Gambar</th>
                        </tr>
                           </thead> 
                           <tbody>   
                          @foreach($data2 as $key => $blog)
                        <tr>
                            <td>{{ $blog->id}}</td>
                            <td>{{ $blog->judul}}</td>
                            <td>{{ $blog->isi}}</td>
                            <td>{{ $blog->gambar}}</td>  
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

    
</body>
@endsection
</html>