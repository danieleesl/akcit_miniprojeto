PHP = C:/xampp/php/php.exe

.PHONY: help lint test test-conf test-gerador

help:
	@echo "Comandos disponiveis:"
	@echo "  make lint          Valida a sintaxe dos arquivos PHP"
	@echo "  make test          Executa todos os testes"
	@echo "  make test-conf     Executa o teste de configuracao"
	@echo "  make test-gerador  Executa o teste do gerador de senhas"
	@echo "  make serve-info    Mostra a URL para acessar pelo XAMPP"

lint:
	$(PHP) -l projeto_akcit/index.php
	$(PHP) -l projeto_akcit/gerador.php
	$(PHP) -l tests/test_conf.php
	$(PHP) -l tests/test_gerador.php

test: test-conf test-gerador

test-conf:
	$(PHP) tests/test_conf.php

test-gerador:
	$(PHP) tests/test_gerador.php

serve-info:
	@echo "Inicie o Apache no XAMPP e acesse:"
	@echo "http://localhost/projeto/projeto_akcit/"
