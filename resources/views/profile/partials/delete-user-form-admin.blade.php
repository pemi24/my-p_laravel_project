<form action="{{ route('profile.admin_destroy') }}" method="POST">
    @csrf
    @method('DELETE')

    <!-- Password field for account deletion confirmation -->
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <!-- Delete account button -->
    <div>
        <button type="submit">Delete Account</button>
    </div>
</form>

