@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="userlevel" class="col-md-4 control-label">User Level</label>

                            <div class="col-md-6">
                                <select id="userlevel" class="form-control" name="userlevel" required>
                                    <option value=""><-- PleaseSelect --></option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="position" class="col-md-4 control-label">Position</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control" name="position" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control" name="department" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select id="status" class="form-control" name="status" required>
                                    <option value=""><-- PleaseSelect --></option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dayslimit" class="col-md-4 control-label">No of Days' Limit</label>

                            <div class="col-md-6">
                                <input id="dayslimit" type="number" class="form-control" name="dayslimit" min="1" max="10" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Approver</label>

                            <div class="col-md-6">
                                <input id="approveryes" type="radio" name="approver" value="Yes">
                                <label for="approveryes">Yes</label>&nbsp;
                                <input id="approverno" type="radio" name="approver" value="No">
                                <label for="approverno">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="approverfor" class="col-md-4 control-label">Approver For</label>

                            <div class="col-md-6">
                                <input id="approverfor" type="text" class="form-control" name="approverfor" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Custodian</label>

                            <div class="col-md-6">
                                <input id="custodianyes" type="radio" name="custodian" value="Yes">
                                <label for="custodianyes">Yes</label>&nbsp;
                                <input id="custodianno" type="radio" name="custodian" value="No">
                                <label for="custodianno">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
