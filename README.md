datas e horarios
================
Funções para manipulação de datas e horarios

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist dirs/yii2-dirs-dataehora "*"
```

or add

```
"dirs/yii2-dirs-dataehora": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

Função converte integer em horas.
<?= \dirs\dataehora\Ajustahora::m2h($minutos); ?>