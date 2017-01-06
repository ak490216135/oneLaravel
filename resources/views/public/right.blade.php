              <div class="sidebar-module sidebar-module-inset">
                <h4>关于我</h4>
                <p>这是一个使用Laravel框架搭建的简单Blog.</p>
              </div>
              <div class="dropdown">
                <button class="btn btn-block btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                  操作
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width: 100%">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="/article/create">添加文章</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">设置单页</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">登出</a></li>
                </ul>
              </div>


              <div class="sidebar-module">
                <h4>TAG</h4>
                <ol class="list-unstyled">
                  
                  <?php
                    $tag = DB::table('tag')->orderBy('id', 'asc')->get();
                  ?>

                  @foreach ($tag as $v)

                  <li><a href="#">{{ $v->name }}</a></li>

                  @endforeach

                </ol>
              </div>
              <div class="sidebar-module">
                <h4>更多方式</h4>
                <ol class="list-unstyled">
                  <li><a href="#">GitHub</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                </ol>
              </div>