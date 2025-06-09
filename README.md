# Panel Notifications Management with Davinci AI - Laravel Admin

This Laravel module provides a complete CRUD interface for managing **Panel Notifications** within the admin panel. It allows admins to create, update, list, and delete notifications displayed on the dashboard or other admin interfaces.

## Features

- List all panel notifications ordered by a custom `order` field.
- Create new notifications with fields such as type, title, description, order, and status.
- Use **Davinci AI** for automatic content generation for notifications (optional feature).
- Edit and update existing notifications.
- Delete notifications.
- Access restricted to users with the `admin` role.
- Success feedback via Toastr notifications.

## Installation

To install this module into your Laravel project, follow these steps:

### 1. Copy Files Into Your Project

Copy the following files and folders into your Laravel project:

- **Controller**: Copy `PanelNotificationController.php` to `app/Http/Controllers/Admin/`.
- **Model**: Copy the `PanelNotification.php` model to `app/Models/`.
- **Migration**: Copy the migration file `2024_07_13_221347_create_panel_notifications_table.php` to `database/migrations/`.
- **Views**: Copy the `panel-notifications/` folder (containing `create.blade.php`, `edit.blade.php`, `index.blade.php`, `show.blade.php`) to `resources/views/default/admin/`.
- **Layouts**: Copy the layout files (e.g., `nav-aside.blade.php`, `alert.blade.php`) to `resources/views/layouts/dashboard/`.
- **Routes**: Add the route definition to your `routes/web.php` file.

### 2. Run migration

```bash
php artisan migrate
```
- 👤 Author
- Amir Shahamiri
- 🧑‍💻 GitHub: github.com/amirshahamiri
- 💼 LinkedIn: linkedin.com/in/amirshahamiri
