# Panel Notifications Management - Laravel Admin

This Laravel module provides a complete CRUD interface for managing **Panel Notifications** within the admin panel. It allows admins to create, update, list, and delete notifications displayed on the dashboard or other admin interfaces.

---

## Features

- List all panel notifications ordered by a custom `order` field.
- Create new notifications with type, title, description, order, and status.
- Edit and update existing notifications.
- Delete notifications.
- Access restricted to users with the `admin` role.
- Success feedback via Toastr notifications.

---

## Installation

1. Make sure you have a Laravel project set up.
2. Add the `PanelNotification` model and migration (not included here).
3. Add the `PanelNotificationController` under `App\Http\Controllers\Admin`.
4. Register routes in your `routes/web.php`:

```php
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('panel-notifications', \App\Http\Controllers\Admin\PanelNotificationController::class);
});
