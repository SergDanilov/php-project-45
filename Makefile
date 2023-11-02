#Makefile
install:
	composer install
brain-games:#launching the game brain-games
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even: #launching the game brain-even
	./bin/brain-even
	
