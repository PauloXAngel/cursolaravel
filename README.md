📘 Curso de Laravel – Projeto de Estudos

Este repositório contém meu projeto de estudos do Curso de Laravel, onde estou desenvolvendo passo a passo os principais conceitos do framework. Aqui documento meu progresso, comandos utilizados, anotações e novos aprendizados.

🚀 Sobre o Projeto

Este projeto foi criado com o objetivo de:

Aprender a estruturar um projeto Laravel moderno (Laravel 12.x)

Praticar criação e administração de banco de dados

Configurar ambiente de desenvolvimento (Laragon)

Entender como funciona o fluxo de migrations, models e controllers

Criar uma base sólida de backend em PHP com Laravel

🛠️ Tecnologias Utilizadas

PHP 8.4.x

Laravel 12.x

Composer

MySQL / MariaDB

Laragon

Git + GitHub

📚 Aprendizados até agora
✅ Configuração de ambiente

Instalação e uso do Laragon

Configuração da versão correta de PHP

Conexão do Laravel com MySQL (.env)

📦 Migrations e Banco de Dados
✔ Criação de tabelas

Aprendi a usar:

php artisan make:migration create_nome_da_tabela_table

✔ Modificação de colunas

Para adicionar/remover/alterar campos utilizamos novas migrations, mantendo histórico:

php artisan make:migration add_campo_to_tabela_table
php artisan make:migration modify_coluna_in_tabela_table

✔ Exclusão de tabelas
Schema::dropIfExists('tabela');

✔ Controle de versão com up() e down()

Uso correto para criar e reverter mudanças no banco.

✔ Artisan Commands importantes
Comando	Função
php artisan migrate	Executa migrations
php artisan migrate:fresh	Reseta e recria todas as tabelas
php artisan migrate:rollback	Desfaz a última migration
php artisan migrate:status	Lista migrations aplicadas
🧩 Eloquent Models

Criação de modelos com make:model

Relacionamentos (serão aprofundados mais adiante)

Observação: Factories e Seeders serão aprendidos futuramente, mas ainda não fazem parte deste módulo.

📁 Estrutura do Projeto
app/
database/
  └── migrations/
routes/
.env
composer.json

📝 Objetivos Próximos

Criar Controllers e rotas

Trabalhar com Requests e validações

Aprender Eloquent avançado (relacionamentos)

Criar API básica

Aplicar Blade templates

Inserir Seeders e Factories futuramente

💡 Observações

Este repositório é atualizado conforme avanço no curso.
O foco principal é aprender boas práticas e construir uma base sólida em Laravel.