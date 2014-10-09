php artisan serve --port=8081 >log 2>&1 &
echo '' > log
xdg-open http://localhost:8081 &
rm log
