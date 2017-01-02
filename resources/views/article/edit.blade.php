<!DOCTYPE html>
<html>
    <head>

@include('public.head')

    </head>
    <body>

@include('public.nav')

        <div class="container">

          <div class="blog-header">
            <h1 class="blog-title">In this state we stay together</h1>
            <p class="lead blog-description">在这安宁之中，我们永世相依</p>
          </div>

          <div class="row">

            <div class="col-sm-9 blog-main">
                
                <div>

@if($errors->any())

            @foreach($errors->all() as $error)
                <p class="bg-danger" style="padding: 15px;">{{ $error }}</p>
            @endforeach

@endif

                </div>

                <div>


                    <form action="{{ url('article/'.$article->id) }}" method="POST" class="form-horizontal" role="form">
                      {{ method_field('PATCH') }}
                      {!! csrf_field() !!}
                      <div class="form-group">
                        <label for="title" class="col-sm-2 text-right">标题 :</label>
                        <div class="col-sm-10">
                          <input type="标题" name="title" class="form-control" id="title" placeholder="标题" value="{{ $article->title }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tag" class="col-sm-2 text-right">TAG :</label>
                        <div class="col-sm-6">
                          <input type="tag" name="tag" class="form-control" id="tag" placeholder="TAG" value="{{ $article->tag }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="description" class="col-sm-2 text-right">简介 :</label>
                        <div class="col-sm-10">
                          <input type="description" name="description" class="form-control" id="description" placeholder="简介" value="{{ $article->description }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="content" class="col-sm-2 text-right">正文 :</label>
                        <div class="col-sm-10">
                          <script id="editor" name="content" type="text/plain" style="min-height: 600px;"><?php echo $article->content; ?></script>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-block btn-default">修改</button>
                        </div>
                      </div>
                    </form>

                </div>

            </div><!-- /.blog-main -->

            <div class="col-sm-3 blog-sidebar">
            
@include('public.right')

            </div><!-- /.blog-sidebar -->

          </div><!-- /.row -->

        </div>

@include('public.foot')

<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
</script>

    </body>
</html>
