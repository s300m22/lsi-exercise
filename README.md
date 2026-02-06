# LSi Coding Exercise

This is my solution for the LSi coding exercise.

## What was implemented

- Added a CSS library (Bootstrap)
- Added URL slugs for products
- Support for multiple images per product
- Carousel when a product has multiple images
- Product enquiry form (shows email preview)

## How to run

```bash
git clone https://github.com/s300m22/lsi-exercise.git
cd lsi-exercise

composer install
cp .env.example .env
php artisan key:generate

touch database/database.sqlite

php artisan migrate --seed
php artisan storage:link

npm install
npm run dev
php artisan serve
