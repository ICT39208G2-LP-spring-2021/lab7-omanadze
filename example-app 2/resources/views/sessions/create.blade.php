<h1>ლოგინი</h1>

<form action="/login" method="post">
    @csrf
    <input type="email" placeholder="მეილი" name="email" value="{{old('email')}}">
    <input type="password" placeholder="პაროლი" name="password">
    <button type="submit">login</button>
    @foreach ($errors->all() as $error)
    <p style="color:red">{{$error}}</p>
    @endforeach
</form>