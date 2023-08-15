# Учебный пакет для реверса цифр

Описание проекта будет здесь. Этот тестовый пакет будет иметь функцию реверса переданных ему цифр.

## Требования

* PHP 7.4

## Установка

```bash
$ composer require DolgovAleksandr/otus-student-package
```

## Использование

```php
<?php
$reverser = new IntReverser();
echo $reverser->reverseInt(1234567); // 7654321
``` 