# Use official PHP + Apache image
FROM php:8.2-apache

# Copy all project files into Apache web root
COPY . /var/www/html/

# Expose port 80 (Render routes web traffic to this)
EXPOSE 80

# Start Apache when container runs
CMD ["apache2-foreground"]
