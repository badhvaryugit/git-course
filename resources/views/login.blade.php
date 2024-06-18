<h1>Login</h1>

<form method="POST" action="loginSubmit">
    {{ csrf_field() }}
    <table>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email" />
                <br />
                <span class="error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="textbox" name="password" />
                <br />
                <span class="error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>        
        <tr>
            <td></td>
            <td><input type="submit" name="submit" /></td>
            <br />
            {{ session('error') }}
        </tr>
    </table>
 </form>
 
 <style>
    .error{color: red;}
</style>