@include('components.header')
@if ($error->any())
    <div style="color:  red">
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
<form>
    
    <p>Name</p>
    <input type="text" name="name">
    <p>Email</p>
    <input type="email" name="email">
    <p>password</p>
    <input type="password" name="password">
    <p>Confirm password</p>
    <input type="password" name="password">
    <input type="submit">
</form>
@include('composer.footer')