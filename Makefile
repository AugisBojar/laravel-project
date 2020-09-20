start:
	docker-compose up -d

stop:
	docker-compose down

destroy:
	docker-compose down -v

rebuild: destroy start

bash:
	docker-compose exec php bash

migrate:
	docker-compose exec php php artisan migrate

seed:
	docker-compose exec php php artisan db:seed
