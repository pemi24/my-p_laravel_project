<form action="{{ route('profile.admin_update') }}" method="POST">
    @csrf
    @method('PATCH')

    <!-- Current password field -->
    <div>
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
    </div>

    <!-- New password field -->
    <div>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
    </div>

    <!-- Confirm new password field -->
    <div>
        <label for="new_password_confirmation">Confirm New Password:</label>
        <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
    </div>

    <!-- Update password button -->
    <div>
        <button type="submit">Update Password</button>
    </div>
</form>
