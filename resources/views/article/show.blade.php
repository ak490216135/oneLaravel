<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/static/css/blog.css">
        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>

@include('public.nav')

        <div class="container">

          <div class="blog-header">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
          </div>

          <div class="row">

            <div class="col-sm-8 blog-main">
                
                <div>
                    {{ $article->title }}
                </div>

            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            
@include('public.right')

            </div><!-- /.blog-sidebar -->

          </div><!-- /.row -->

        </div>

@include('public.foot')

    </body>
</html>
