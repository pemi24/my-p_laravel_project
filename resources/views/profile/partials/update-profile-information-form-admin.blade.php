<form action="{{ route('profile.admin_update') }}" method="POST">
    @csrf
    @method('PATCH')

    <!-- Admin profile information fields -->
    <div>
        <label for="admin_name">Name:</label>
        <input type="text" id="admin_name" name="admin_name" value="{{ $admin->name }}" required>
    </div>

    <div>
        <label for="admin_email">Email:</label>
        <input type="email" id="admin_email" name="admin_email" value="{{ $admin->email }}" required>
    </div>

    <!-- Update profile button -->
    <div>
        <button type="submit">Update Profile</button>
    </div>
</form>
