#!/bin/bash

# Step 1: Install composer dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Step 2: Clear config cache (opsional, tapi penting di Railway)
php artisan config:clear

# Step 3: Jalankan Laravel di port Railway (default port 8000 kalau gak ada $PORT)
php -d variables_order=EGPCS artisan serve --host=0.0.0.0 --port=${PORT:-8000}
