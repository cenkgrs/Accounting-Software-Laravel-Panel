@extends('auth.layout')
<div class="container box-center">
    <form action="login" class="login-form">
        <div class="col-md-12 col-xs-12">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control">
        </div>
        <div class="col-md-12 col-xs-12">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control">
        </div>
    </form>
</div>