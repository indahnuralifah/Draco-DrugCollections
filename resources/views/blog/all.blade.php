@extends('welcome')

@section('content')
       
 <div id="all">

        <div id="content">
            <div class="container">
 <div class="col-sm-9" id="blog-listing">
   @foreach($data as $key)
              <div class="post" style="position: absolute;left: 150;width: 800px;">


                 
                        <h2><a href="post.html">{{$key->judul}}</a></h2>
                    <hr>
                        <p class="date-comments">
                            <a href="post.html"><i class="fa fa-calendar-o"></i>{{date_format(date_create($key->created_at),"D, d M Y")}}</a>
                        </p>
                        <div class="gambar">
                            <a>
                                <img src="/gambar/{{$key->gambar}}" class="img-responsive" alt="Example blog post alt" style="float: center;max-width: 400px">
                            </a>
                        </div>
                        <p class="intro">{{$key->isi}}</p>
                        <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                        </p>


   	            			</div>
                             @endforeach

                    	</div>

                    </div>

                </div>

            </div>
           
@endsection
