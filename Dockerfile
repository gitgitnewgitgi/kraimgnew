# Use PHP with Apache
FROM php:8.2-apache

# Copy your app to the web root
COPY . /var/www/html/

# Enable Apache rewrite if needed
RUN a2enmod rewrite

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Apache)
EXPOSE 80
