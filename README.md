# 🏢 Sam Ecobench

**Sam Ecobench** is a **full-featured business website** built with **Laravel** and the **Filament** admin panel. It pairs a modern, responsive public site — home, about, services, products, and news pages — with a powerful admin dashboard for managing every piece of content: banners, products, services, news, statistics, social links, and incoming contact messages, all with role-based access control.

<p align="left">
  <img src="https://img.shields.io/badge/PHP-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Filament-%23F59E0B.svg?style=for-the-badge&logo=laravel&logoColor=white" alt="Filament">
  <img src="https://img.shields.io/badge/MySQL-%234479A1.svg?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge" alt="License">
</p>

## 📚 Table of Contents

- [Features](#-features)
- [Preview](#-preview)
- [Demo Admin Account](#-demo-admin-account)
- [Project Structure](#-project-structure)
- [Requirements](#-requirements)
- [Installation Guide](#️-installation-guide)
- [Technologies Used](#-technologies-used)
- [License](#-license)
- [Contributing](#-contributing)
- [Connect with Me](#-connect-with-me)

## ✨ Features

### 1️⃣ Public Website 🌍
✅ **Home page:** Rotating hero banners, feature highlights, and services overview.
✅ **About page:** Company story, key strengths, and live statistics counters.
✅ **Services page:** Detailed service listings alongside skill/expertise progress bars.
✅ **Products page:** Filterable product catalog by category, with a dedicated detail page per product.
✅ **News page:** Paginated articles with a "Latest News" sidebar and view counters.
✅ **Contact page:** Contact form, embedded Google Map, and company contact details.

### 2️⃣ Admin Panel (Filament) 🛠️
✅ **Content management:** Full CRUD for banners, about content, features, statistics, services, and social links.
✅ **Product & category management:** Manage products, categories, and multiple images per product.
✅ **News management:** Create and edit news articles with a rich text editor.
✅ **Message inbox:** View and manage messages submitted through the contact form.
✅ **Role-based access control:** `superadmin` and `manager` roles with granular permissions, powered by Spatie Permission.
✅ **Session management:** View and revoke active user sessions.

## 👀 Preview

### 🏠 Home
![Home Page](./docs/screenshots/home.png)

### ℹ️ About
![About Page](./docs/screenshots/about.png)

### 🛠 Services
![Services Page](./docs/screenshots/services.png)

### 🛒 Products
![Products Page](./docs/screenshots/products.png)

### 📰 News
![News Page](./docs/screenshots/news.png)

### 📞 Contact
![Contact Page](./docs/screenshots/contact.png)

### 🔐 Admin Login
![Admin Login](./docs/screenshots/admin-login.png)

## 🔑 Demo Admin Account

The `RolePermissionSeeder` creates two demo accounts, both sharing the same password: `IQBOLSHOH`.

| 👤 Email | 🔑 Password | 📝 Role |
|:---------|:-------------|:--------|
| `admin@iqbolshoh.uz` | `IQBOLSHOH` | Super Admin (full access) |
| `manager@iqbolshoh.uz` | `IQBOLSHOH` | Manager (view-only access) |

Log in at:
```
http://localhost:8000/admin/login
```

## 📂 Project Structure

```
sam-ecobench.uz/
├── app/
│   ├── Filament/Resources/     # Admin panel CRUD resources (Products, News, Banners, etc.)
│   ├── Http/Controllers/       # Public-facing page controllers
│   └── Models/                  # Eloquent models
├── database/
│   ├── migrations/              # Database schema
│   └── seeders/                 # Demo data (roles, products, news, banners, etc.)
├── resources/
│   ├── views/
│   │   ├── layouts/             # Main Blade layout
│   │   ├── components/          # Header, footer, and shared components
│   │   └── pages/               # Home, about, services, products, news, contact views
│   ├── css/ and js/             # Tailwind & Vite entry files
├── routes/web.php                # Public routes
└── README.md
```

## 📋 Requirements

- PHP **8.2+**
- Composer
- MySQL / MariaDB (SQLite also works for local development)
- Node.js & npm

## ⚙️ Installation Guide 🛠️

### 1️⃣ Clone the Repository 📥
```bash
git clone https://github.com/Iqbolshoh/sam-ecobench.uz.git
```

### 2️⃣ Navigate to the Project Directory 📂
```bash
cd sam-ecobench.uz
```

### 3️⃣ Install Dependencies 📦
```bash
composer install
npm install
```

### 4️⃣ Configure the Environment ⚡
```bash
cp .env.example .env
php artisan key:generate
```
Then set your database credentials in `.env` (MySQL by default):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=business_website
DB_USERNAME=root
DB_PASSWORD=
```

### 5️⃣ Run Migrations and Seed Demo Data 🗄️
```bash
php artisan migrate --seed
php artisan storage:link
```

### 6️⃣ Build Front-End Assets 🎨
```bash
npm run build
```

### 7️⃣ Run the Application 🚀
```bash
php artisan serve
```
Then open **`http://localhost:8000`** in your browser, or **`http://localhost:8000/admin/login`** for the admin panel.

## 🖥 Technologies Used
![PHP](https://img.shields.io/badge/PHP-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-%23F59E0B.svg?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-%234479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-%2306B6D4.svg?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-%23646CFF.svg?style=for-the-badge&logo=vite&logoColor=white)

## 📜 License
This project is open-source and available under the [MIT License](./LICENSE).

## 🤝 Contributing
🎯 Contributions are welcome! If you have suggestions or want to enhance the project, feel free to fork the repository and submit a pull request.

## 📬 Connect with Me
💬 I love meeting new people and discussing tech, business, and creative ideas. Let's connect! You can reach me on these platforms:

<div align="center">

[![Website](https://img.shields.io/badge/Website-4285F4?style=for-the-badge&logo=googlechrome&logoColor=white)](https://iqbolshoh.uz)
[![Gmail](https://img.shields.io/badge/Gmail-EA4335?style=for-the-badge&logo=gmail&logoColor=white)](mailto:iilhomjonov777@gmail.com)
[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/iqbolshoh)
[![Telegram](https://img.shields.io/badge/Telegram-26A5E4?style=for-the-badge&logo=telegram&logoColor=white)](https://t.me/templates_uz_support)
[![WhatsApp](https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white)](https://wa.me/998776030033)
[![Instagram](https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white)](https://instagram.com/iqbolshoh.dev)
[![YouTube](https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/@Iqbolshoh_dev)

</div>
