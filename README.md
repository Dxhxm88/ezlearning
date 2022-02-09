# EZ Learning System

EZ Learning is a system that has been developed for a secondary school, Sekolah Menengah Kebangsaan Zainab 2 (SMK Z2). This system developed will help the school to manage submission of assignment between teachers and students.

## This is Ez learning erd
![ERD](https://github.com/Dxhxm88/ezlearning/blob/master/public/Images/erd.PNG)

## How to install

- Clone the repository with __git clone__ or download zip file
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has initial data)
- Run __php artisan serve__
- That's it: launch the main URL
