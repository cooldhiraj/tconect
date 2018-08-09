@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Registration</div>

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

                        <div  class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="acdemic-detail" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <select name="department" class="form-control">
                                    <option value="IT">IT</option>
                                    <option value="COMP">COMP</option>
                                    <option value="MECH">MECH</option>
                                    <option value="CIVIL">CIVIL</option>
                                </select>
                            </div>

                        </div>

                        <div  class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <label for="acdemic-detail" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                 <select name="year" class="form-control">
                                    <option value="FE">FIRST</option>
                                    <option value="SE">SECOND</option>
                                    <option value="TE">THIRD</option>
                                    <option value="BE">FOURTH</option>
                                </select>
                            </div>
                        </div>

                        <div  class="form-group{{ $errors->has('division') ? ' has-error' : '' }}">
                            <label for="acdemic-detail" class="col-md-4 control-label">Division</label>
                            
                            <div class="col-md-6">    
                                <select name="division" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                </select>

                                @if ($errors->has('division'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('division') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div  class="form-group{{ $errors->has('roll_no') ? ' has-error' : '' }}">

                            <label for="roll-no" class="col-md-4 control-label">Roll no</label>

                                <div class="col-md-6" >
                                    <input type="number" name="roll_no" class="form-control" required>

                                    @if ($errors->has('roll_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roll_no') }}</strong>
                                    </span>
                                     @endif
                                </div>

                        </div>
                        

                        <div class="form-group">

                            <label for="gender" class="col-md-4 control-label">Gender</label>

                                <div class="col-md-6">

                                    <label class="radio-inline">
                                        <input type="radio" name="gender">Male
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" name="gender">Female
                                    </label>

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
