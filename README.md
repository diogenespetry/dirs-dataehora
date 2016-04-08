datas e horarios
================
Funções para manipulação de datas e horarios

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist diogenespetry/dirs-dataehora "*"
```

or add

```
"diogenespetry/dirs-dataehora": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

Função converte integer em horas.
<?= \dirs\dataehora\Ajustahora::m2h($minutos); ?>