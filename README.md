# Semaine intensive 4 (PHP)

Semaine intensive 4 @HETIC

## Orga'tic

Agenda collaboratif réservé au étudiants d'HETIC. Les étudiants peuvent poster dans un fil d'actualité reservé à leur filière et leur promotion.

Chaque membre doit s'inscrire avec son adresse HETIC.net.

## Installation

1. Cloner le git

```bash
$ git clone https://github.com/SundownDEV/si4
```

2. Créer le fichier de configuration db.php et le remplir

```bash
$ cd app/config
$ cp db.php.dev db.php
```

```php
$db = [
    'host' => '127.0.0.1',
    'dbname' => 'si4',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf8'
];
```

3. Importer la base de donnée via le fichier references/database.sql

```bash
$ mysql -u root -p database_name < references/database.sql
```
