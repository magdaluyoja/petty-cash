@extends("main")

@section("title","Login")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" id="frmlogin" parsley-validate>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label">Username/Email</label>
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="button" class="btn btn-primary btn-block" id="btnlogin">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="divresult"></div>
        </div>
        
    </div>
</div>
@endsection
@section("script")
    <script src="js/login/login.js"></script>
@endsection