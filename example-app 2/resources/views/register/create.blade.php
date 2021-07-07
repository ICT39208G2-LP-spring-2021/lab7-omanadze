<h1>რეგისტრაცია</h1>

<form action="/register" method="post">
    @csrf
    <input type="text" placeholder="სახელი" name="firstName" value="{{old('firstName')}}">
    <input type="text" placeholder="გვარი" name="lastName" value="{{old('lastName')}}">
    <input type="text" placeholder="პირადი ნომერი" name="personalNumber" value="{{old('personalNumber')}}">
    <input type="email" placeholder="მეილი" name="email" value="{{old('email')}}">
    <input type="password" placeholder="პაროლი" name="password">
    <button type="submit">submit</button>
    @foreach ($errors->all() as $error)
    <p style="color:red">{{$error}}</p>
    @endforeach
</form>

@if(session()->has('success'))
<div>{{session('success')}}</div>
@endif