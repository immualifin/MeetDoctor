# 🏥 MediCare — Medical Appointment System

A comprehensive web-based healthcare information system that connects patients with medical professionals for online consultations and appointment scheduling. Built with **Laravel 9**, it features a fully-featured administration panel (Backsite) alongside a polished patient-facing interface (Frontsite).

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-9.x-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel 9.x" />
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white" alt="PHP 8.2+" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-3.x-06B6D4?style=flat&logo=tailwindcss&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License: MIT" />
</p>

---

## ✨ Key Features

### 🧑‍⚕️ Frontsite (Patient Portal)

| Feature | Description |
|---------|-------------|
| **Landing Page** | Showcases services, doctor specializations, and patient testimonials |
| **Appointment Booking** | Browse doctors by specialization and schedule appointments online |
| **Payment Gateway** | Secure payment processing via **Midtrans** |
| **Authentication** | Registration, login, and account management powered by Laravel Jetstream |
| **Responsive UI** | Mobile-first design built with Tailwind CSS & Alpine.js |

### 🛡️ Backsite (Admin Panel)

| Module | Description |
|--------|-------------|
| **Dashboard** | Real-time statistics on appointments, transactions, and user activity |
| **RBAC** | Full Role-Based Access Control — manage roles, permissions, and user assignments |
| **Master Data** | Specializations, user types, payment configurations, and consultation types |
| **Operational** | Doctor profiles and patient registry management |
| **Reporting** | Appointment and transaction reports |

---

## 🧱 Tech Stack

| Layer | Technology |
|-------|------------|
| **Framework** | [Laravel 9.x](https://laravel.com/) |
| **CSS Framework** | [Tailwind CSS 3.x](https://tailwindcss.com/) |
| **JavaScript** | [Alpine.js](https://alpinejs.dev/) |
| **Livewire** | [Laravel Livewire](https://laravel-livewire.com/) |
| **Authentication** | [Laravel Jetstream](https://jetstream.laravel.com/) (Fortify + Livewire stack) |
| **Database** | MySQL 8.4 |
| **Payment** | [Midtrans Payment Gateway](https://midtrans.com/) |
| **Notifications** | [SweetAlert2](https://sweetalert2.github.io/) |

> **Stack acronym:** TALL (Tailwind · Alpine.js · Laravel · Livewire)

---

## 🎨 Branding & Design

| Element | Value |
|---------|-------|
| **Application Name** | MediCare |
| **Tagline** | *Healthy Life, Better Future.* |
| **Primary Color** | `#2563EB` (Blue) |
| **Secondary Color** | `#1E3A5F` (Navy) |
| **Accent Color** | `#F59E0B` (Amber) |
| **Typography** | Inter (300, 400, 500, 600, 700) |

---

## 📋 System Requirements

| Requirement | Version |
|-------------|---------|
| **PHP** | ≥ 8.0.2 *(tested on PHP 8.2)* |
| **Composer** | 2.x |
| **Node.js & NPM** | Latest LTS |
| **MySQL** | 8.x |
| **Web Server** | Apache (via XAMPP/WAMP/Laragon) or Nginx |

---

## 🚀 Installation

Follow these steps to set up the project in your local environment.

### 1. Clone the Repository

```bash
git clone https://github.com/immualifin/MeetDoctor.git
cd MeetDoctor
```

### 2. Install PHP Dependencies

```bash
composer install
```

> ⚠️ **Note:** If you're running PHP ≥ 8.2, run `composer update` first — the lock file may reference dependencies incompatible with newer PHP versions.

### 3. Install Frontend Dependencies

```bash
npm install
npm run dev          # Development build with hot reload
npm run production   # Minified production build
```

### 4. Environment Configuration

Copy the example environment file and configure your settings:

```bash
cp .env.example .env
```

Edit `.env` with your database credentials and Midtrans keys:

```env
APP_NAME=MediCare
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meetdoctor
DB_USERNAME=root
DB_PASSWORD=

# Midtrans Payment Gateway
MIDTRANS_SERVER_KEY=your_midtrans_server_key
MIDTRANS_CLIENT_KEY=your_midtrans_client_key
MIDTRANS_IS_PRODUCTION=false
MIDTRANS_IS_SANITIZED=true
MIDTRANS_IS_3DS=true
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations & Seeders

```bash
php artisan migrate --seed
```

Seeders will populate the database with the following data:

| Entity | Count | Details |
|--------|-------|---------|
| Super Admin | 1 | `admin@mail.com` / `Admin@12345` |
| Doctors | 4 | See table below |
| Roles | 5 | Super Admin, Admin, Staff Hospital, Doctor, Patient |
| Specializations | 12 | Dentistry, Dermatology, Orthodontics, etc. |
| Permissions | Full scope | Mapped to all roles |
| User Types | 3 | Admin, Doctor, Patient |
| Consultation Types | All | Consultation categories |
| Payment Configuration | Complete | Midtrans settings |

### 7. Create Storage Symlink

```bash
php artisan storage:link
```

### 8. Launch the Application

```bash
php artisan serve
```

Visit **[http://localhost:8000](http://localhost:8000)** in your browser.

---

## 👤 Default Accounts

### Super Administrator

| Field | Value |
|-------|-------|
| **Email** | `admin@mail.com` |
| **Password** | `Admin@12345` |

### Doctor Accounts

| Doctor | Email | Specialization | Consultation Fee |
|--------|-------|----------------|-----------------:|
| Dr. Andi Pratama | `andi.pratama@mail.com` | Dentist | Rp 450.000 |
| Dr. Siti Nurhaliza | `siti.nurhaliza@mail.com` | Dermatology | Rp 250.000 |
| Dr. Budi Santoso | `budi.santoso@mail.com` | Orthodontics | Rp 900.000 |
| Dr. Dewi Lestari | `dewi.lestari@mail.com` | Pediatric Dentistry | Rp 300.000 |

> 🔐 All doctor accounts share the default password: **`Doctor@12345`**

---

## 🦷 Available Specializations

| Specialization | Consultation Fee |
|----------------|-----------------:|
| Dermatology | Rp 250.000 |
| Dentist | Rp 450.000 |
| Endodontics | Rp 150.000 |
| General Dentistry | Rp 120.000 |
| Oral and Maxillofacial Surgery | Rp 80.000 |
| Orthodontics | Rp 900.000 |
| Pediatric Dentistry | Rp 300.000 |
| Periodontics | Rp 250.000 |
| Prosthodontics | Rp 250.000 |
| Radiology | Rp 250.000 |
| Surgery | Rp 250.000 |
| Urology | Rp 250.000 |

---

## 📁 Project Structure

```
MeetDoctor/
├── app/
│   ├── Models/
│   │   ├── MasterData/         # Specialist, TypeUser, Consultation, ConfigPayment
│   │   ├── ManagementAccess/   # Role, Permission, RoleUser, DetailUser
│   │   └── Operational/        # Doctor, Appointment, Transaction
│   └── Http/
│       └── Controllers/        # Auth, Frontsite, Backsite controllers
├── database/
│   ├── migrations/             # Database schema
│   └── seeders/                # 11 seeder files
├── resources/
│   └── views/
│       ├── components/         # Reusable UI components (header, footer)
│       ├── pages/
│       │   ├── frontsite/      # Landing page, appointment, payment, success
│       │   └── backsite/       # Admin dashboard & CRUD management
│       └── layouts/            # Blade layouts (default, auth, guest, app)
├── public/
│   ├── assets/
│   │   └── frontsite/
│   │       └── images/         # Logo, doctor photos, icons, illustrations
│   ├── css/                    # Compiled Tailwind CSS
│   └── js/                     # Compiled JavaScript
├── tailwind.config.js          # Tailwind configuration
├── webpack.mix.js              # Laravel Mix build pipeline
└── composer.json               # PHP dependencies
```

---

## ⚠️ Important Notes

1. **Database:** Ensure MySQL is running before executing migrations. Default host is `127.0.0.1:3306`.
2. **Midtrans:** Payment processing requires valid `MIDTRANS_SERVER_KEY` and `MIDTRANS_CLIENT_KEY` in `.env`. Without them, the payment flow will fail silently.
3. **Production Deployment:** Set `APP_ENV=production`, `APP_DEBUG=false`, and use production Midtrans keys. Run `npm run production` to generate minified assets.
4. **Doctor Photos:** Stored at `public/assets/frontsite/images/doctor-{1-4}.png`. Replace with actual photos in production.
5. **File Permissions:** Ensure `storage/` and `bootstrap/cache/` directories are writable by your web server.

---

## 📄 License

This project is open-sourced under the [MIT License](LICENSE).

---

<p align="center">
  <sub>Built with ❤️ using Laravel & Tailwind CSS</sub>
</p>
