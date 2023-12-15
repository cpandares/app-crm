<form method="POST" action="{{ route('ForgetPasswordPost') }}">
    @csrf
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Send Password Reset Link</button>
</form>