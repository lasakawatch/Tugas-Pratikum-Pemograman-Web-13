# 🚀 Deploy Portfolio Laravel ke Railway - Step by Step

## ✅ File Konfigurasi Sudah Siap!

File berikut sudah dibuat dan di-push ke GitHub:
- ✅ `Procfile` - Command untuk start web server
- ✅ `nixpacks.toml` - Build configuration untuk Railway
- ✅ `.railwayignore` - File yang tidak perlu di-deploy

---

## 📋 Langkah Deploy ke Railway

### **STEP 1: Setup Project di Railway**

1. **Buka Dashboard Railway** yang sudah Anda buka
2. Klik project **"Tugas-Pratikum-Pemograman-Web-13"** (yang sudah online)
3. Klik **"Settings"** (tab di kanan)

### **STEP 2: Configure Root Directory**

Railway sudah detect repository, tapi kita perlu set root directory ke folder Laravel:

1. Di tab **"Settings"**, scroll ke **"Service Settings"**
2. Cari **"Root Directory"**
3. Isi dengan: `portofolio-naufal`
4. Klik **"Save"** atau Railway auto-save

### **STEP 3: Tambah MySQL Database**

1. Kembali ke dashboard project
2. Klik tombol **"+ New"** (pojok kanan atas)
3. Pilih **"Database"**
4. Pilih **"Add MySQL"**
5. Tunggu beberapa detik, database akan terbuat otomatis!

### **STEP 4: Set Environment Variables**

1. Klik service **"Tugas-Pratikum-Pemograman-Web-13"** (bukan database)
2. Klik tab **"Variables"**
3. Klik **"RAW Editor"** (toggle di pojok kanan)
4. **HAPUS semua** yang ada, lalu paste kode ini:

```env
APP_NAME=Portfolio Naufal
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:GENERATE_THIS_KEY
APP_URL=https://${{RAILWAY_PUBLIC_DOMAIN}}

DB_CONNECTION=mysql
DB_HOST=${{MYSQL_HOST}}
DB_PORT=${{MYSQL_PORT}}
DB_DATABASE=${{MYSQL_DATABASE}}
DB_USERNAME=${{MYSQL_USER}}
DB_PASSWORD=${{MYSQL_PASSWORD}}

SESSION_DRIVER=file
CACHE_DRIVER=file
QUEUE_CONNECTION=sync

LOG_CHANNEL=stack
LOG_LEVEL=error
```

5. Klik **"Add"** atau save

**PENTING:** Untuk `APP_KEY`, generate dulu:
- Buka: https://generate-random.org/laravel-key-generator
- Copy key yang dihasilkan (format: `base64:xxxxx...`)
- Paste ke `APP_KEY=` di Variables Railway

### **STEP 5: Connect Database ke Service**

Railway biasanya otomatis connect, tapi pastikan:

1. Klik MySQL database yang sudah dibuat
2. Klik tab **"Connect"**
3. Lihat variabel yang tersedia: `MYSQL_HOST`, `MYSQL_PORT`, dll
4. Variabel ini otomatis inject ke service Laravel kita (sudah kita set di STEP 4)

### **STEP 6: Deploy!**

Railway akan **otomatis deploy** setelah Anda save environment variables. Lihat di tab **"Deployments"**:

1. Klik tab **"Deployments"**
2. Tunggu proses build (2-5 menit)
3. Status akan berubah dari "Building" → "Deploying" → "Success" ✅

### **STEP 7: Get Public URL**

1. Klik tab **"Settings"**
2. Scroll ke **"Networking"**
3. Klik **"Generate Domain"**
4. Railway akan generate URL seperti: `https://tugas-pratikum-pemograman-web-13-production.up.railway.app`
5. **Copy URL ini!**

### **STEP 8: Update APP_URL**

1. Kembali ke tab **"Variables"**
2. Edit `APP_URL` dari `https://${{RAILWAY_PUBLIC_DOMAIN}}` ke URL yang baru di-generate
3. Atau biarkan `https://${{RAILWAY_PUBLIC_DOMAIN}}` (Railway auto-inject)

### **STEP 9: Import Database**

Karena Railway tidak ada phpMyAdmin, kita import via Railway CLI atau skip jika database kosong:

**OPSI A: Database Kosong (Fresh Install)**
- Tidak perlu import, Laravel akan create tables otomatis

**OPSI B: Ada Data (Import dari Local)**
1. Export database local ke file `.sql`
2. Di Railway dashboard, klik MySQL database
3. Klik tab **"Data"** atau **"Query"**
4. Copy-paste isi file SQL
5. Execute

**OPSI C: Via Railway CLI (Advanced)**
```bash
railway login
railway link
railway run mysql -u root -p < database.sql
```

---

## ✅ Testing Website

1. **Buka URL** yang di-generate Railway
2. Website Laravel Anda seharusnya **LIVE!** 🎉

Contoh URL:
```
https://tugas-pratikum-pemograman-web-13-production.up.railway.app
```

---

## 🔧 Troubleshooting

### ❌ Build Failed
**Solusi:**
- Cek **Logs** di tab "Deployments"
- Pastikan `composer.json` dan `composer.lock` ada di folder `portofolio-naufal`
- Pastikan Root Directory = `portofolio-naufal`

### ❌ 500 Error
**Solusi:**
- Set `APP_DEBUG=true` sementara di Variables
- Cek logs di Railway dashboard
- Pastikan `APP_KEY` sudah di-generate
- Cek database connection

### ❌ Database Connection Error
**Solusi:**
- Pastikan MySQL database sudah dibuat
- Cek Variables: `DB_HOST`, `DB_DATABASE`, dll sudah terisi
- Railway auto-inject variables dari MySQL service

### ❌ CSS/JS Tidak Load
**Solusi:**
- Check `APP_URL` di Variables sudah benar
- Run build commands di Railway (sudah ada di `nixpacks.toml`)

---

## 🎯 Konfigurasi Tambahan (Optional)

### Custom Domain
1. Tab "Settings" → "Networking"
2. Klik "Custom Domain"
3. Masukkan domain Anda (misalnya: `naufal.com`)
4. Set DNS A record ke IP yang diberikan Railway

### Auto-Deploy
✅ Sudah aktif! Setiap push ke GitHub = otomatis deploy

### Scale Up (Jika Perlu)
1. Tab "Settings"
2. Adjust resources (default sudah cukup)

---

## 📊 Monitoring

### Lihat Logs Real-time
1. Klik service Laravel
2. Klik tab **"Logs"**
3. Logs akan stream real-time

### Check Resource Usage
1. Tab **"Metrics"**
2. Lihat CPU, Memory, Network usage

---

## 💰 Pricing Info

Railway Free Tier:
- ✅ **$5 credit per bulan** (gratis)
- ✅ Cukup untuk 1-2 project kecil
- ✅ Auto-sleep jika tidak ada traffic (hemat credit)

**Estimasi Usage:**
- Laravel app: ~$2-3/bulan
- MySQL database: ~$1-2/bulan
- **Total: ~$3-5/bulan** (masih dalam free tier!)

---

## ✨ Keuntungan Railway

✅ **Auto-Deploy** dari GitHub  
✅ **Zero Configuration** untuk PHP/Laravel  
✅ **Built-in MySQL** database  
✅ **SSL Certificate** otomatis (HTTPS)  
✅ **Environment Variables** management  
✅ **Real-time Logs**  
✅ **Metrics & Monitoring**  
✅ **Scaling** mudah  
✅ **Custom Domain** support  

---

## 🎉 Selesai!

Website Anda sekarang **LIVE** di Railway! 

**Share URL Anda:**
```
https://tugas-pratikum-pemograman-web-13-production.up.railway.app
```

Setiap kali Anda **push ke GitHub**, Railway akan **otomatis deploy** update terbaru! 🚀

---

## 📝 Checklist Deploy

- [x] File konfigurasi Railway sudah dibuat (Procfile, nixpacks.toml)
- [x] Push ke GitHub
- [ ] Set Root Directory = `portofolio-naufal`
- [ ] Tambah MySQL database
- [ ] Set Environment Variables
- [ ] Generate Domain
- [ ] Import database (jika perlu)
- [ ] Test website
- [ ] Website LIVE! 🎉

---

**Dibuat oleh:** Naufal Saifullah Yusuf  
**Tugas:** Pemrograman Web - Week 13  
**Universitas:** Telkom University  
**Hosting:** Railway.app
