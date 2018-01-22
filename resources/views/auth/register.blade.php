@extends('layouts.app')

@section('content')
<div class="container m-t-50">
    <div class="columns">
        <div class="column"></div>
        <div class="column is-two-thirds">

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label for="name" class="label">Name</label>
                    <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" name="name" type="text" placeholder="Name">
                </div>

                <div class="field">
                    <label for="email" class="label">E-mail</label>
                    <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="text" placeholder="E-mail">
                </div>

                <div class="field">
                    <label class="label">I register as a...</label>
                    <div class="control">
                        <div class="select">
                            <select name="type" class="{{ $errors->has('password') ? ' is-danger' : '' }}">
                                <option value="1">Company</option>
                                <option value="0">Normal user</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label for="password" class="label" name="password">Password</label>
                    <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" placeholder="password" type="password">
                </div>

                <div class="field">
                    <label for="password" class="label" name="password">Repeat password</label>
                    <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password_confirmation" placeholder="password" type="password">
                </div>

                <div class="control">
                  <button type="submit" class="button is-primary m-t-20">Submit</button>
                </div>

                @if ($errors->has('email') || $errors->has('password') || $errors->has('name'))
                    <p class="help is-danger">Fill in all the fields</p>
                @endif
            </form>

        </div>
        <div class="column"></div>
    </div>

</div>
@endsection
