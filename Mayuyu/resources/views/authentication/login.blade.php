@include('components.header')
    @if ($error->any())
        <div style="color:  red">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    <form action="{{route('register') }}" method="POST">
        @csrf
        <p>Email</p>
        <input type="email" name="email" required>
        <p>password</p>
        <input type="password" name="password" required>
        <p>Confirm password</p>
    </form>
@include('components.footer')