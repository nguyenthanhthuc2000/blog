# My Blog

This is a personal blog built to share knowledge, experience and personal thoughts about programming, technology and favorite topics. The blog is designed simply, optimizes the reading experience and is easily expandable with features such as comments, search and article classification.

## Installation

Install this package with composer

```bash
  git clone https://github.com/nguyenthanhthuc2000/blog.git
```

Configure your model

```bash
  Run composer install on your cmd or terminal
  Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
  Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
  Run php artisan key:generate
  Run php artisan migrate
  Run php artisan serve
```