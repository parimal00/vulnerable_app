<form action="{{ route('users.store') }}" method="post">
@csrf
    <label>Name</label><br>
    <input placeholder="name" name="name" type="text" /></br>
    @error('name')
        <span style="color:red">{{ $message }}</span>
    @enderror

    <label>Email</label><br>
    <input placeholder="email" name="email" type="text" /></br>
    @error('email')
        <span style="color:red">{{ $message }}</span>
    @enderror
    <label>Password</label><br>
    <input placeholder="password" name="password" type="password" /></br>
    @error('password')
        <span style="color:red">{{ $message }}</span>
    @enderror
    <label>Confirm password</label><br>
    <input placeholder="confirm password" name="password_confirmation" type="password" /></br>
    @error('password_confirm')
        <span style="color:red">{{ $message }}</span>
    @enderror


    <button>Submit</button>

</form>
