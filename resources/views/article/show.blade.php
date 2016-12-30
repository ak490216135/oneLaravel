<!DOCTYPE html>
<html>
    <head>
    
@include('public.head')

    </head>
    <body>

@include('public.nav')

        <div class="container">

          <div class="blog-header">
            <h1 class="blog-title">We vanquish thoughts of solitude</h1>
            <p class="lead blog-description">在这平静中合二为一</p>
          </div>

          <div class="row">

            <div class="col-sm-9 blog-main">
                
                <div class="page-header">
                    <h2>{{ $article->title }}</h2><small>{{ $article->date }}</small>
                </div>

                <div class="content">
                    <?php echo $article->content; ?>
                </div>

            </div><!-- /.blog-main -->

            <div class="col-sm-3 blog-sidebar">
            
@include('public.right')

            </div><!-- /.blog-sidebar -->

          </div><!-- /.row -->

        </div>

@include('public.foot')

    </body>
</html>
