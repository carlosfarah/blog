<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Posts mais recentes
            <small>atualidades do mundo de TI</small>
        </h1>

        <!-- First Blog Post -->

        @foreach($posts as $post)
            <h2>
                <a href="#">{{ $post['titulo']  }}</a>
            </h2>
            <p class="lead">
                by <a href="index.php">{{ $post['autor']  }}</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Postado em {{ $post['criado'] }}</p>
            <hr>
            @if ($post['banner'] == NULL)
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            @else
                {{ $post['banner'] }}
            @endif
            <hr>
            <p>{{ $post['conteudo'] }}</p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            <hr>
    @endforeach

        <!-- Pager -->
        <ul class="pager">
            <li class="previous">
                <a href="#">&larr; Mais antigos</a>
            </li>
            <li class="next">
                <a href="#">Mais novos &rarr;</a>
            </li>
        </ul>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Blog Search Well -->
        <div class="well">
            <h4>Pesquisar</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
            </div>
            <!-- /.input-group -->
        </div>

        <!-- Blog Categories Well -->
        <div class="well">
            <h4>Categorias</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        @foreach($categorias as $categoria)
                            <li><a href="#">{{ $categoria['titulo'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well">
            <h4>{{ $widget[0]['titulo'] }}</h4>
            <p>{{ $widget[0]['conteudo'] }}</p>

        </div>

    </div>

</div>
<!-- /.row -->