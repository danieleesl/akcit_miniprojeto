PHP = C:/xampp/php/php.exe
.PHONY: help lint test test-conf test-eventos
help:
	@echo "Comandos: make lint, make test, make test-conf, make test-eventos"
lint:
	$(PHP) -l projeto_akcit/index.php
	$(PHP) -l projeto_akcit/eventos.php
	$(PHP) -l tests/test_conf.php
	$(PHP) -l tests/test_eventos.php
test: test-conf test-eventos
test-conf:
	$(PHP) tests/test_conf.php
test-eventos:
	$(PHP) tests/test_eventos.php
serve-info:
	@echo "http://localhost/projeto/projeto_akcit/"
