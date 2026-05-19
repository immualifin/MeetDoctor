# MeetDoctor - Medical Appointment System

MeetDoctor adalah aplikasi sistem informasi kesehatan berbasis web yang memungkinkan pasien untuk mencari dokter, melakukan konsultasi, dan membuat janji temu secara online. Proyek ini dibangun menggunakan **Laravel 9** dengan fitur administrasi lengkap (Backsite) dan antarmuka pengguna (Frontsite).

## Fitur Utama

### Frontsite (Pasien)
- **Landing Page**: Informasi layanan dan spesialisasi dokter.
- **Appointment Booking**: Pilih dokter berdasarkan spesialisasi dan buat janji temu.
- **Payment Integration**: Pembayaran terintegrasi menggunakan **Midtrans Payment Gateway**.
- **Auth System**: Pendaftaran dan login pasien menggunakan Laravel Jetstream.

### Backsite (Admin / Management)
- **Dashboard**: Statistik ringkasan aktivitas janji temu dan transaksi.
- **RBAC (Role Based Access Control)**: Manajemen Role, Permission, dan User.
- **Master Data**:
  - Manajemen Spesialisasi Dokter.
  - Manajemen Tipe User.
  - Manajemen Konfigurasi Pembayaran.
  - Manajemen Jenis Konsultasi.
- **Operational**:
  - Manajemen Data Dokter.
  - Daftar Pasien Rumah Sakit.
- **Reporting**:
  - Laporan Janji Temu (Appointments).
  - Laporan Transaksi (Transactions).

## Tech Stack

- **Backend**: [Laravel 9](https://laravel.com/)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com/), [Alpine.js](https://alpinejs.dev/), [Livewire](https://laravel-livewire.com/) (TALL Stack)
- **Authentication**: [Laravel Jetstream](https://jetstream.laravel.com/) (Fortify + Livewire)
- **Database**: MySQL
- **Payment Gateway**: [Midtrans](https://midtrans.com/)
- **Notification**: [SweetAlert2](https://sweetalert2.github.io/)

## Persyaratan Sistem

- PHP >= 8.0.2
- Composer
- Node.js & NPM
- MySQL

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek di lingkungan lokal Anda:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/bootcamp-fwd-2022-laravel-9.git
   cd bootcamp-fwd-2022-laravel-9
   ```

2. **Instal Dependensi PHP**
   ```bash
   composer install
   ```

3. **Instal Dependensi Frontend**
   ```bash
   npm install
   npm run dev
   ```

4. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` dan sesuaikan konfigurasi database serta Midtrans:
   ```env
   DB_DATABASE=nama_database_anda
   DB_USERNAME=root
   DB_PASSWORD=

   MIDTRANS_SERVER_KEY=your_midtrans_server_key
   MIDTRANS_CLIENT_KEY=your_midtrans_client_key
   ```

5. **Generate App Key**
   ```bash
   php artisan key:generate
   ```

6. **Migrasi dan Seeding Database**
   ```bash
   php artisan migrate --seed
   ```

7. **Link Storage**
   ```bash
   php artisan storage:link
   ```

8. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```
   Akses aplikasi di `http://localhost:8000`.

## Lisensi

Proyek ini menggunakan lisensi MIT. Silakan lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.
