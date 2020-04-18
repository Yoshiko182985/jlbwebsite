#!/bin/bash
#Copies all html files to webroot
echo "Copying HTML files..."
sudo cp *.html /var/www/html/
echo "Setting file ownership to www-data..."
sudo chown -R www-data:www-data /var/www/html/*
echo "Done!"
