<!DOCTYPE html>
<html>
    <head>
    
@include('public.head')

    </head>
    <body>

@include('public.nav')

        <div class="container">

          <div class="blog-header">
            <h1 class="blog-title">When knowing is enough</h1>
            <p class="lead blog-description">当我们足够了解对方</p>
          </div>

          <div class="row">

            <div class="col-sm-9 blog-main">

                @foreach ($article as $v)
                
                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="/article/{{ $v->id }}">{{ $v->title }}</a></h2>
                    <p class="blog-post-meta">{{ $v->date }}</p>
                    <p>{{ $v->description }}</p>
                    <div>
                        <a href="{{ url('article/'.$v->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('article/'.$v->id) }}" method="POST" style="display: inline;">  
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>  
                    </div>
                </div><!-- /.blog-post -->

                @endforeach

                {{ $article->render() }}
                

            </div><!-- /.blog-main -->

            <div class="col-sm-3 blog-sidebar">

@include('public.right')

            </div><!-- /.blog-sidebar -->

          </div><!-- /.row -->

        </div>

@include('public.foot')

    </body>
</html>
