@extends('themeAdmin')
@extends('admin.footer')
@extends('admin.main')
@extends('admin.topMenu')
@extends('admin.mainMenu')
@extends('admin.dashboard')
@section('posts')
    <div class="col-md-12">
        <hr>
        <a href="#"><strong><i class="glyphicon glyphicon-list-alt"></i> Ultimos Posts cadastrados</strong></a>
        <hr>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success"> Create new post </a>
        <hr>
    </div>
    <div class="col-md-8">
        <table class="table table-striped">
            <thead>
            <tr><th>Visits</th><th>ID</th><th>Title</th><th>Action</th></tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td></td>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', ['id'=>$post->id]) }}" class="btn btn-default">Edit</a>
                        <a href="{{ route('admin.posts.destroy', ['id'=>$post->id]) }}" class="btn btn-danger">Destroy</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $posts->render() !!}
        <hr>

        <!--tabs-->
        <div class="container">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <h4><i class="glyphicon glyphicon-user"></i></h4>
                    Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                    <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</p>
                </div>
                <div class="tab-pane" id="messages">
                    <h4><i class="glyphicon glyphicon-comment"></i></h4>
                    Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                    <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</p>
                </div>
                <div class="tab-pane" id="settings">
                    <h4><i class="glyphicon glyphicon-cog"></i></h4>
                    Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                    <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</p>
                </div>
            </div>
        </div>
        <!--/tabs-->

        <hr>

        <div class="panel panel-default">
            <div class="panel-heading"><h4>New Requests</h4></div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                    <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                    <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Please remember to <a href="#">Logout</a> for classified security.
        </div>


    </div>

    <div class="col-md-4">

        <ul class="nav nav-pills nav-stacked">
            <li class="nav-header"></li>
            <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
        </ul>

        <hr>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="glyphicon glyphicon-wrench pull-right"></i>
                    <h4>Submit Request</h4>
                </div>
            </div>
            <div class="panel-body">

                <form class="form form-vertical">
                    <div class="control-group">
                        <label>Name</label>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label>Title</label>
                        <div class="controls">
                            <input type="password" class="form-control" placeholder="Password">

                        </div>
                    </div>
                    <div class="control-group">
                        <label>Details</label>
                        <div class="controls">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label>Select</label>
                        <div class="controls">
                            <select class="form-control"><option>General Question</option><option>Server Issues</option><option>Billing Question</option></select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-primary">
                                Post
                            </button>
                        </div>
                    </div>

                </form>


            </div><!--/panel content-->
        </div><!--/panel-->

        <div class="panel panel-default">
            <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
            <div class="panel-body">
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
            </div>
        </div><!--/panel-->

    </div>

@endsection