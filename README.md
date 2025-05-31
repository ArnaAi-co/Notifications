# Panel Notifications Management with Davinci AI - Laravel Admin

This Laravel module provides a complete CRUD interface for managing **Panel Notifications** within the admin panel. It integrates with **Davinci AI** to enhance the user experience by enabling smart features like automated content generation, notifications categorization, and more.

## Features

- List all panel notifications ordered by a custom `order` field.
- Create new notifications with fields such as type, title, description, order, and status.
- Use **Davinci AI** for automatic content generation for notifications (optional feature).
- Edit and update existing notifications.
- Delete notifications.
- Access restricted to users with the `admin` role.
- Success feedback via Toastr notifications.

## Installation

Follow these steps to integrate **Panel Notifications** management with **Davinci AI** in your Laravel application.

### 1. Install Davinci AI Client

Ensure you have access to the **Davinci AI** API and install the required client. You can install the necessary package using Composer or another dependency manager, depending on the package Davinci AI provides.

```bash
composer require davinci-ai/davinci-sdk
