@extends('welcome')

@section('content')
       @foreach($data as $key)
 <div id="all">

        <div id="content">
            <div class="container">
 <div class="col-sm-9" id="blog-listing">

              <div class="post">
       
                        <h2><a href="post.html">{{$key->judul}}</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.html"><i class="fa fa-calendar-o"></i>{{date_format(date_create($key->created_at),"D, d M Y")}}</a>
                            <a href="post.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a>
                                <img src="{{$key->gambar}}" class="img-responsive" alt="Example blog post alt">
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
