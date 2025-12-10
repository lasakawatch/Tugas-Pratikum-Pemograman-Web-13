# 🧪 Testing Guide - Commercial Dashboard Update

## 🌐 Server Information
- **URL:** http://127.0.0.1:8000
- **Database:** MySQL (port 3307)
- **Database Name:** portofolio_naufal

---

## 📍 Testing Steps

### ✅ 1. Test Login Page Theme
**URL:** http://127.0.0.1:8000/login

**What to Check:**
- [ ] Background has red gradient (not purple)
- [ ] Form card has white background
- [ ] Heading "Login" is red colored
- [ ] Input fields have red focus border
- [ ] Login button is red with gradient
- [ ] "Belum punya akun?" link is red
- [ ] Smooth animations on load

**Expected Result:** Matches portfolio red theme (#800000, #b30000)

---

### ✅ 2. Test Register Page Theme
**URL:** http://127.0.0.1:8000/register

**What to Check:**
- [ ] Same red theme as login page
- [ ] All input fields present (Name, Email, Password, Confirm Password)
- [ ] Register button is red
- [ ] "Sudah punya akun?" link is red
- [ ] Consistent with login design

---

### ✅ 3. Test Commercial Dashboard
**URL:** http://127.0.0.1:8000/dashboard

**Login First:** Use existing account or create new one

**What to Check:**
- [ ] Navbar is red gradient (not blue)
- [ ] Welcome card has red gradient background
- [ ] Rotating gradient animation on welcome card
- [ ] Three feature cards displayed:
  - 📦 Kelola Produk
  - 🛒 Pesanan Saya
  - 👤 Profil Portfolio
- [ ] Cards animate on hover (float up)
- [ ] Icons rotate/scale on hover
- [ ] Navigation links work:
  - [ ] Portfolio → goes to /
  - [ ] Dashboard → stays on /dashboard
  - [ ] Produk → goes to /products
  - [ ] Pesanan → goes to /orders
  - [ ] Logout → logs out

**Expected Result:** Modern red-themed dashboard with smooth animations

---

### ✅ 4. Test Products Page Enhancement
**URL:** http://127.0.0.1:8000/products

**What to Check:**
- [ ] "📋 Pesanan Saya" link in navbar
- [ ] Each product row has:
  - [ ] Quantity input field
  - [ ] 🛒 Pesan (Order) button (green)
  - [ ] ✏️ Edit button (yellow)
  - [ ] 🗑️ Hapus button (red)
- [ ] Quantity input respects max stock
- [ ] Hover effects on buttons

**Test Ordering:**
1. [ ] Set quantity (e.g., 2)
2. [ ] Click "🛒 Pesan"
3. [ ] Confirm dialog appears
4. [ ] Click OK
5. [ ] Page refreshes with success message

---

### ✅ 5. Test Orders Listing Page
**URL:** http://127.0.0.1:8000/orders

**What to Check:**

**If Orders Exist:**
- [ ] Table shows all orders
- [ ] Columns display:
  - No
  - Produk (name + description)
  - Toko (store name)
  - Jumlah (quantity)
  - Harga Satuan (unit price)
  - Total (total price)
  - Status (badge)
  - Aksi (action)
- [ ] Status badges colored correctly:
  - 🟡 Pending (yellow)
  - 🟢 Completed (green)
  - 🔴 Cancelled (red)
- [ ] Total sum shown at bottom
- [ ] Can cancel pending orders
- [ ] Row hover effect works
- [ ] Card has shadow and rounded corners

**If No Orders:**
- [ ] Empty state shows 🛍️ icon
- [ ] "Belum Ada Pesanan" message
- [ ] "Lihat Produk" button displayed

**Navigation:**
- [ ] "Kembali ke Produk" button works
- [ ] "Pesanan Saya" navbar link active

---

### ✅ 6. Test Order Flow (End-to-End)

**Complete Flow:**
1. [ ] Login → `/login`
2. [ ] Go to Dashboard → `/dashboard`
3. [ ] Click "Kelola Produk" → `/products`
4. [ ] Order a product:
   - [ ] Set quantity to 3
   - [ ] Click "🛒 Pesan"
   - [ ] Confirm
5. [ ] Click "📋 Pesanan Saya" → `/orders`
6. [ ] Verify order appears in list:
   - [ ] Correct product name
   - [ ] Correct quantity (3)
   - [ ] Correct total (price × 3)
   - [ ] Status is "Pending"
7. [ ] Cancel the order:
   - [ ] Click trash icon
   - [ ] Confirm cancellation
   - [ ] Order disappears from list

---

### ✅ 7. Test Animations

**Dashboard Animations:**
- [ ] Navbar slides down on page load
- [ ] Welcome card gradient rotates continuously
- [ ] Feature cards fade in on load
- [ ] Cards float up on hover
- [ ] Icons scale and rotate on hover
- [ ] Smooth transitions (0.3s ease)

**Orders Page Animations:**
- [ ] Page fades in on load
- [ ] Table rows highlight on hover
- [ ] Empty state fades in smoothly

---

### ✅ 8. Theme Consistency Check

**Check All Pages Use Red Theme:**
- [ ] Login page → Red gradient
- [ ] Register page → Red gradient
- [ ] Dashboard → Red navbar, red cards
- [ ] Products navbar → Has Orders link
- [ ] Orders page → Red theme, red buttons

**Color Verification:**
- Primary: #800000 (dark red)
- Secondary: #b30000 (medium red)
- Accent: #cc3333 (light red)

---

## 🐛 Common Issues & Solutions

### Issue 1: "Could not open input file: artisan"
**Solution:** Make sure you're in the correct directory
```powershell
cd "C:\Users\NAUFAL\Desktop\TugasWebW11\portofolio-naufal"
php artisan serve
```

### Issue 2: Orders not appearing
**Solution:** 
1. Check if migration ran: `php artisan migrate:status`
2. Create a test order from products page
3. Verify user_id matches session

### Issue 3: Database connection error
**Solution:** 
1. Check XAMPP MySQL is running (port 3307)
2. Verify .env settings:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3307
   DB_DATABASE=portofolio_naufal
   ```

### Issue 4: Theme not showing
**Solution:** 
1. Clear browser cache (Ctrl + Shift + R)
2. Check CSS is loading in browser dev tools
3. Verify file was saved correctly

---

## 📸 Expected Visuals

### Dashboard Should Look Like:
```
┌─────────────────────────────────────────────┐
│  🏪 Commercial Dashboard    🏠 📊 📦 🛒 🚪  │ ← Red navbar
├─────────────────────────────────────────────┤
│                                             │
│   ┌───────────────────────────────┐        │
│   │  😊 Selamat Datang!          │ ← Red gradient card
│   │  Halo, Naufal 🎉             │   (rotating animation)
│   └───────────────────────────────┘        │
│                                             │
│  ┌──────┐   ┌──────┐   ┌──────┐          │
│  │  📦  │   │  🛒  │   │  👤  │          │
│  │Produk│   │Pesan │   │Profil│          │ ← Feature cards
│  │      │   │      │   │      │          │   (hover to float)
│  └──────┘   └──────┘   └──────┘          │
│                                             │
└─────────────────────────────────────────────┘
```

### Orders Page Should Look Like:
```
┌─────────────────────────────────────────────┐
│  🛍️ Pesanan Saya    [← Kembali ke Produk]  │
├─────────────────────────────────────────────┤
│  ┌───────────────────────────────────────┐ │
│  │ No │ Produk │ Toko │ Qty │ Total │ ⚙️│ │ ← Red header
│  ├───────────────────────────────────────┤ │
│  │ 1  │ Laptop │ ABC  │ 1   │ 5jt   │🗑️│ │
│  │ 2  │ Mouse  │ XYZ  │ 2   │ 200k  │🗑️│ │
│  ├───────────────────────────────────────┤ │
│  │           Total: Rp 5.200.000         │ │
│  └───────────────────────────────────────┘ │
└─────────────────────────────────────────────┘
```

---

## ✅ Success Criteria

**All Tests Pass If:**
- ✅ Red theme consistent across all commercial pages
- ✅ Can create orders from products page
- ✅ Orders display correctly in listing
- ✅ Can cancel pending orders
- ✅ All animations work smoothly
- ✅ Navigation between pages works
- ✅ No console errors in browser
- ✅ Responsive on mobile (optional)

---

## 🎯 Next Steps After Testing

If all tests pass:
1. ✅ Mark project as complete
2. 📸 Take screenshots for documentation
3. 🎨 (Optional) Add animation assets from provided folder
4. 🚀 Deploy to production (if needed)

If issues found:
1. 🐛 Note the specific issue
2. 📝 Check relevant file
3. 🔧 Apply fix
4. ♻️ Retest

---

**Happy Testing! 🎉**

*All features should work smoothly with the red Telkom theme!*
