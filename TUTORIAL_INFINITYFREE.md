# 📚 Tutorial Hosting Laravel di InfinityFree

## 🎯 Persiapan Sebelum Upload

### 1. Siapkan Project Laravel Anda
Pastikan folder `portofolio-naufal` sudah siap dengan semua file Laravel.

### 2. Buat File .env untuk Production
Di folder `portofolio-naufal`, edit file `.env.example` dan simpan sebagai `.env` dengan konfigurasi:

```env
APP_NAME="Portfolio Naufal"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=http://your-domain.rf.gd

DB_CONNECTION=mysql
DB_HOST=sqlXXX.infinityfree.com
DB_PORT=3306
DB_DATABASE=epiz_xxxxx_database
DB_USERNAME=epiz_xxxxx
DB_PASSWORD=your_password
```

---

## 🚀 Langkah-Langkah Hosting di InfinityFree

### **STEP 1: Daftar di InfinityFree**

1. Buka **https://www.infinityfree.net/**
2. Klik tombol **"Sign Up"** (pojok kanan atas)
3. Isi form pendaftaran:
   - Email address
   - Password
   - Centang "I agree to the Terms of Service"
4. Klik **"Sign Up"**
5. Cek email Anda dan **verifikasi akun**

---

### **STEP 2: Buat Hosting Account**

1. Login ke **Client Area** InfinityFree
2. Klik **"Create Account"**
3. Pilih subdomain gratis atau gunakan domain sendiri:
   - **Subdomain gratis**: `naufalportfolio.rf.gd` atau `naufalweb.great-site.net`
   - Atau gunakan custom domain jika punya
4. Isi form:
   - **Username**: pilih username (otomatis generate)
   - **Password**: buat password untuk cPanel
   - **Email**: email Anda
5. Klik **"Create Account"**
6. Tunggu 5-10 menit hingga akun aktif

---

### **STEP 3: Akses cPanel dan Upload Files**

#### A. Login ke cPanel
1. Di Client Area, klik **"Control Panel"** atau **"cPanel"**
2. Atau buka: `https://cpanel.infinityfree.net/`
3. Login dengan username dan password yang dibuat tadi

#### B. Upload Project via File Manager
1. Di cPanel, cari dan klik **"File Manager"**
2. Buka folder **`htdocs`** (ini adalah root website Anda)
3. **HAPUS** semua file default di folder `htdocs` (default.php, dll)

#### C. Upload File Laravel
**PENTING**: Struktur folder yang BENAR di InfinityFree:

```
htdocs/
├── index.php (dari public folder Laravel)
├── .htaccess (dari public folder Laravel)
├── favicon.ico
├── 3.png, 4.png, 5.png (gambar-gambar)
├── app/
├── bootstrap/
├── config/
├── database/
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
├── artisan
├── composer.json
└── composer.lock
```

**Cara Upload:**
1. Zip folder `portofolio-naufal` di komputer Anda
2. Upload file ZIP ke `htdocs` via File Manager
3. Extract ZIP file di `htdocs`
4. Pindahkan semua file dari folder `portofolio-naufal` ke `htdocs` langsung
5. **Pindahkan** isi folder `public` Laravel ke root `htdocs`:
   - `public/index.php` → `htdocs/index.php`
   - `public/.htaccess` → `htdocs/.htaccess`
   - `public/3.png`, `public/4.png`, dll → `htdocs/`

---

### **STEP 4: Setup Database MySQL**

1. Di cPanel, klik **"MySQL Databases"**
2. Buat database baru:
   - **Database Name**: `portfolio` (akan jadi `epiz_xxxxx_portfolio`)
   - Klik **"Create Database"**
3. Buat user database:
   - **Username**: `dbuser`
   - **Password**: buat password kuat
   - Klik **"Create User"**
4. Tambahkan user ke database:
   - Pilih user yang dibuat
   - Pilih database yang dibuat
   - Centang **"ALL PRIVILEGES"**
   - Klik **"Add User to Database"**
5. **CATAT** informasi ini:
   - Database host: `sqlXXX.infinityfree.com` (lihat di halaman MySQL)
   - Database name: `epiz_xxxxx_portfolio`
   - Username: `epiz_xxxxx_dbuser`
   - Password: password yang Anda buat

---

### **STEP 5: Konfigurasi Laravel**

#### A. Edit file .env di File Manager
1. Di File Manager, buka file `.env` di root `htdocs`
2. Klik kanan → **Code Edit**
3. Update dengan info database Anda:

```env
APP_NAME="Portfolio Naufal"
APP_ENV=production
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxx
APP_DEBUG=false
APP_URL=http://naufalportfolio.rf.gd

DB_CONNECTION=mysql
DB_HOST=sqlXXX.infinityfree.com
DB_PORT=3306
DB_DATABASE=epiz_xxxxx_portfolio
DB_USERNAME=epiz_xxxxx_dbuser
DB_PASSWORD=your_password_here
```

#### B. Generate APP_KEY
Karena InfinityFree tidak support terminal, Anda harus generate APP_KEY secara manual:
1. Buka website: https://generate-random.org/laravel-key-generator
2. Copy key yang di-generate (format: `base64:xxxxxxxxxxxxx`)
3. Paste ke `.env` di baris `APP_KEY=`

#### C. Edit index.php
1. Buka file `htdocs/index.php`
2. Edit baris require bootstrap:

**DARI:**
```php
require __DIR__.'/../bootstrap/app.php';
```

**MENJADI:**
```php
require __DIR__.'/bootstrap/app.php';
```

**DARI:**
```php
require __DIR__.'/../vendor/autoload.php';
```

**MENJADI:**
```php
require __DIR__.'/vendor/autoload.php';
```

#### D. Edit .htaccess
Buat file `.htaccess` di root `htdocs` dengan isi:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>

<IfModule mod_negotiation.c>
    Options -MultiViews
</IfModule>

IndexIgnore *

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} (.+)/$
RewriteRule ^ %1 [L,R=301]

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

---

### **STEP 6: Set Permissions (CHMOD)**

Di File Manager, set permission untuk folder:
1. Klik kanan folder `storage` → **Change Permissions** → `755`
2. Klik kanan folder `bootstrap/cache` → **Change Permissions** → `755`
3. Centang **"Recurse into subdirectories"**

---

### **STEP 7: Import Database**

#### A. Export Database dari Local
1. Buka phpMyAdmin di localhost
2. Export database Laravel Anda (format SQL)

#### B. Import ke InfinityFree
1. Di cPanel, klik **"phpMyAdmin"**
2. Pilih database Anda di sidebar kiri
3. Klik tab **"Import"**
4. Pilih file SQL yang sudah di-export
5. Klik **"Go"**

---

### **STEP 8: Testing**

1. Buka browser dan akses domain Anda:
   - `http://naufalportfolio.rf.gd`
2. Jika error muncul, cek:
   - File `.env` sudah benar?
   - Database connection sudah benar?
   - Permission folder `storage` sudah 755?

---

## 🔧 Troubleshooting

### Error 500 - Internal Server Error
- Cek file `.env`, pastikan `APP_DEBUG=true` sementara untuk lihat error
- Cek permission folder `storage` dan `bootstrap/cache`

### Database Connection Error
- Cek DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD di `.env`
- Pastikan database sudah dibuat dan user sudah ditambahkan

### CSS/JS Tidak Load
- Pastikan file di folder `public` sudah dipindahkan ke root `htdocs`
- Cek file `.htaccess` sudah benar

### Blank Page
- Cek `index.php`, pastikan path ke `bootstrap/app.php` sudah benar
- Enable error reporting di `index.php`:
  ```php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  ```

---

## 📝 Catatan Penting

1. **InfinityFree TIDAK support:**
   - Composer install/update via terminal
   - Artisan commands
   - Queue workers
   - WebSocket/Broadcasting

2. **Solusi:**
   - Upload vendor folder lengkap (jangan dihapus)
   - Run migrations di local, export database, import ke hosting

3. **Performance:**
   - Cache config dan routes sebelum upload
   - Gunakan `APP_DEBUG=false` di production

---

## ✅ Checklist Final

- [ ] Folder `htdocs` sudah berisi semua file Laravel
- [ ] File `public/*` sudah dipindah ke root `htdocs`
- [ ] File `.env` sudah dikonfigurasi dengan benar
- [ ] Database MySQL sudah dibuat dan diimport
- [ ] Permission folder `storage` dan `bootstrap/cache` = 755
- [ ] File `index.php` path sudah disesuaikan
- [ ] File `.htaccess` sudah dibuat
- [ ] Website bisa diakses tanpa error

---

## 🎉 Selamat!

Portfolio Laravel Anda sekarang sudah LIVE di internet dan bisa diakses dari mana saja!

**Share link Anda:**
`http://naufalportfolio.rf.gd`

---

**Dibuat oleh:** Naufal Saifullah Yusuf  
**Tugas:** Pemrograman Web - Week 13  
**Universitas:** Telkom University
