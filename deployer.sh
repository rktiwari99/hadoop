set -e

echo "Deploying Hadoop ...."

# Enter Maintenence Mode
(php artisan down --message 'The App is being (quickly!) update. Please try in a little bit.') || true
    #Update code
    gitpull origin master
# Exit Maintenence Mode
php artisan up


echo "Application is Deployed Successfully!"