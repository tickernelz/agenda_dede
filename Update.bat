@ECHO OFF
:BEGIN
SETLOCAL
ECHO --------------------------------
ECHO ## Sedang Memperbarui Project ##
ECHO --------------------------------
set BRANCH = "master"
git pull %BRANCH%
git reset --hard %BRANCH%
php artisan migrate:fresh --seed
php artisan optimize:clear
composer update
ECHO --------------------
ECHO ## Update Selesai ##
ECHO --------------------
pause
:END
