# 🚀 Production Deployment Guide for Arfan Express

## 🔧 The Issue You're Facing

The `net::ERR_CONNECTION_REFUSED` errors occur because Laravel is trying to load assets from the Vite development server instead of the built production assets.

## ✅ Immediate Fixes Applied

1. **Deleted the `hot` file** - This file was telling Laravel to look for assets at `http://[::1]:5173` (Vite dev server)
2. **Rebuilt production assets** - Ensured all assets are properly compiled for production

## 🌐 Environment Configuration for Production

### 1. Update Your `.env` File

Make sure your production `.env` file has these critical settings:

```env
# Application Environment
APP_NAME="Arfan Express LTD"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com  # ⚠️ CRITICAL: Replace with your actual domain

# Security
APP_KEY=base64:YourGeneratedAppKey  # Generate with: php artisan key:generate

# Database (Update with your production database)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_production_database
DB_USERNAME=your_db_username
DB_PASSWORD=your_secure_password

# Mail Configuration (for contact forms)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="Arfan Express Limited"

# Contact Form Recipient
CONTACT_MAIL_TO=motiur@arfanexpressbd.com

# Caching & Sessions
CACHE_STORE=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync

# File Storage
FILESYSTEM_DISK=local
```

### 2. Critical: Set the Correct APP_URL

⚠️ **Most Important**: Update `APP_URL` in your `.env` file to match your production domain:

```env
# Replace with your actual production domain
APP_URL=https://arfanexpressbd.com
# or
APP_URL=https://www.arfanexpressbd.com
```

## 🏗️ Production Deployment Commands

Run these commands on your production server:

```bash
# 1. Install PHP dependencies (production optimized)
composer install --optimize-autoloader --no-dev

# 2. Install Node.js dependencies
npm ci --only=production

# 3. Build production assets
npm run build

# 4. Generate application key (if not set)
php artisan key:generate

# 5. Clear and cache configuration
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 6. Run database migrations (if needed)
php artisan migrate --force

# 7. Create storage link (for file uploads)
php artisan storage:link

# 8. Set proper permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

## 🔍 Troubleshooting Steps

### If you still get connection refused errors:

1. **Check for leftover hot file:**
   ```bash
   rm -f public/build/hot
   rm -f public/hot
   ```

2. **Verify assets exist:**
   ```bash
   ls -la public/build/assets/
   ```
   You should see CSS and JS files like `app-*.css` and `app-*.js`

3. **Check APP_URL matches your domain:**
   ```bash
   php artisan config:show app.url
   ```

4. **Clear all caches:**
   ```bash
   php artisan optimize:clear
   php artisan config:clear
   php artisan route:clear
   php artisan view:clear
   ```

5. **Check Laravel logs:**
   ```bash
   tail -f storage/logs/laravel.log
   ```

## 🌐 Web Server Configuration

### Apache (.htaccess already configured)
Your `.htaccess` file is already properly configured for Laravel.

### Nginx Configuration (if using Nginx)
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/your/laravel/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## 🚨 Common Production Issues & Solutions

### 1. White Screen/500 Error
- Check `storage/logs/laravel.log`
- Ensure proper file permissions: `chmod -R 755 storage bootstrap/cache`
- Verify `.env` file exists and has correct APP_KEY

### 2. CSS/JS Not Loading
- Ensure `npm run build` was executed
- Check that `public/build/hot` file doesn't exist
- Verify APP_URL matches your domain exactly

### 3. Contact Form Not Working
- Check email configuration in `.env`
- Verify SMTP credentials
- Check `storage/logs/laravel.log` for email errors

### 4. Database Connection Issues
- Verify database credentials in `.env`
- Ensure database exists and user has proper permissions
- Run migrations: `php artisan migrate --force`

## 📋 Pre-Deployment Checklist

- [ ] Production `.env` file configured with correct APP_URL
- [ ] `composer install --optimize-autoloader --no-dev` executed
- [ ] `npm run build` executed successfully
- [ ] No `hot` file exists in `public/build/`
- [ ] Database configured and migrated
- [ ] File permissions set correctly (755 for storage and bootstrap/cache)
- [ ] HTTPS configured (recommended)
- [ ] Email configuration tested

## 🔄 Quick Fix Commands

If you're still experiencing issues, run this sequence:

```bash
# Delete any hot files
rm -f public/build/hot public/hot

# Rebuild everything
npm run build
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check permissions
chmod -R 755 storage bootstrap/cache
```

## 📞 Support

If issues persist after following this guide:
1. Check your web server error logs
2. Review `storage/logs/laravel.log`
3. Verify your domain's DNS settings
4. Ensure your hosting provider supports PHP 8.2+ and Node.js 