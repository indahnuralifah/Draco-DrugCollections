@extends('welcome')

@section('content')
       
 <div id="all">

        <div id="content">
            <div class="container">
 <div class="col-sm-9" id="blog-listing">

              <div class="post">
                    @foreach($data as $key)
                        <h2><a href="post.html">{{$key->judul}}</a></h2>
                    <hr>
                        <p class="date-comments">
                            <a href="post.html"><i class="fa fa-calendar-o"></i>{{date_format(date_create($key->created_at),"D, d M Y")}}</a>
                        </p>
                        <div class="image">
                            <a>
                                <img src="/images/{{$key->gambar}}" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">{{$key->isi}}</p>
                        <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                        </p>
   	            			</div>

                    	</div>

                    </div>

                </div>

            </div>
            @endforeach

@endsection
