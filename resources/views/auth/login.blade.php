@extends('layouts.app')

@section('content')
<div class="container m-t-50">
    <div class="columns">
        <div class="column">

        </div>
        <div class="column is-two-thirds">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label for="email" class="label" name="email">E-mail</label>
                    <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" name="email" type="text" placeholder="E-mail" value="">
                </div>

                <div class="field">
                    <label for="password" class="label" name="password">Password</label>
                    <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" placeholder="password" type="password">
                </div>

                @if ($errors->has('email') || $errors->has('password'))
                    <p class="help is-danger">E-mail or password incorrect, please try again.</p>
                @endif

                <div class="control">
                  <button type="submit" class="button is-primary">Submit</button>
                </div>

                <div class="field m-t-20">
                  <div class="control">
                    <label class="checkbox">
                      <input class="m-r-20" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember me
                    </label>
                  </div>
                </div>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>




                {{-- <div class="form-group{{ $errors->has('password') ? ' is-danger' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}

                {{-- <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div> --}}
            </form>
        </div>
        <div class="column">

        </div>
    </div>
</div>
@endsection
