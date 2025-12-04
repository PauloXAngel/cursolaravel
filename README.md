# 📘 Curso de Laravel – Projeto de Estudos

Repositório dedicado ao meu aprendizado no **Curso de Laravel**, onde pratico conceitos fundamentais do framework, incluindo migrations, models, rotas e manipulação de banco de dados.

---

## 🚀 Sobre o Projeto

Objetivos principais:

- Aprender a estruturar um projeto Laravel (versão 12.x)
- Criar e manipular banco de dados via migrations
- Entender o fluxo de models, controllers e rotas
- Usar Laragon + MySQL/MariaDB no ambiente de desenvolvimento
- Versionar o projeto com Git e GitHub

---

## 🛠 Tecnologias Utilizadas

- PHP **8.4.x**
- Laravel **12.x**
- Composer
- MySQL / MariaDB
- Laragon
- Git + GitHub

---

## 📚 Aprendizados

### 🔹 Migrations e Banco de Dados

Criação de migrations:

```bash
php artisan make:migration create_nome_da_tabela_table
Modificação de colunas:

bash
Copiar código
php artisan make:migration add_campo_to_tabela_table
php artisan make:migration modify_coluna_in_tabela_table
Comandos úteis:

bash
Copiar código
php artisan migrate
php artisan migrate:fresh
php artisan migrate:rollback
php artisan migrate:status
🔹 Models
Criação de models:

bash
Copiar código
php artisan make:model Nome
Uso do trait HasFactory (mesmo no Laravel 9 ou 12):

php
Copiar código
use Illuminate\Database\Eloquent\Factories\HasFactory;
Factories e Seeders serão adicionados futuramente — ainda não fazem parte deste módulo do curso.

📁 Estrutura Geral do Projeto
pgsql
Copiar código
app/
database/
  └── migrations/
routes/
.env
composer.json
📝 Próximos Passos
Criar Controllers e rotas

Trabalhar com validação (Form Request)

Aprender relacionamentos Eloquent

Criar uma API simples

Blade templates

Seeders e Factories (em módulo futuro)

💡 Observação
Este repositório será atualizado conforme avanço no curso.
O foco é aprender boas práticas e desenvolvimento moderno com Laravel.