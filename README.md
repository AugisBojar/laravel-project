---
First launch
---
1. `docker-compose up` - App will launch and install all dependencies, it may take from 5 to 15 min. depending on you PC speed.
2. `docker-compose exec php bash` - login to docker container
3. `php artisan migrate` - create database tables
4. `php artisan db:seed` - create default database values
5. `exit`

---
Next launches
---
For next launches type `docker-compose up -d` to run App in background. Full launch should take about 1-2 min.
