<h1>My Form</h1>

<form method="POST" action="formSubmit" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table>
        <tr>
            <td>Name: </td>
            <td><input type="textbox" name="name" />
                <br />
                <span class="error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="textbox" name="email" />
                <br />
                <span class="error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>Upload file: </td>
            <td><input type="file" name="doc" />
                <br />
                <span class="error">
                    @error('doc')
                        {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" /></td>
        </tr>
    </table>
</form>

<style>
    .error{color: red;}
</style>