FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libsqlite3-dev \
    && docker-php-ext-install zip pdo pdo_sqlite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js & npm (for frontend assets)
RUN apt-get update && apt-get install -y nodejs npm

# Set working directory
WORKDIR /app

# Copy the application code
COPY . .

# Install dependencies and build assets
RUN composer install --optimize-autoloader --no-dev
RUN npm install
RUN npm run build

# Setup Laravel environment and SQLite database
RUN cp .env.example .env
RUN php artisan key:generate
RUN touch database/database.sqlite
RUN php artisan migrate --force

# Expose port (Render sets the PORT environment variable, defaults to 10000)
EXPOSE 10000

# Start the Laravel application
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
