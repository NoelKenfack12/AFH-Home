<?php return unserialize('a:7:{i:0;O:26:"Doctrine\\ORM\\Mapping\\Table":5:{s:4:"name";s:4:"pays";s:6:"schema";N;s:7:"indexes";N;s:17:"uniqueConstraints";N;s:7:"options";a:0:{}}i:1;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";s:50:"Users\\LocalisationuserBundle\\Entity\\PaysRepository";s:8:"readOnly";b:0;}i:2;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":8:{s:7:"message";s:31:"Ce site est déjà enregistré.";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:7:"siteweb";s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:3;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":8:{s:7:"message";s:31:"Ce pays est déjà enregistré.";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:3:"nom";s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:4;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":8:{s:7:"message";s:22:"Ce code existe déjà.";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:4:"code";s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:5;O:42:"Doctrine\\ORM\\Mapping\\HasLifecycleCallbacks":0:{}i:6;O:48:"Symfony\\Component\\Validator\\Constraints\\Callback":3:{s:8:"callback";N;s:7:"methods";a:1:{i:0;s:9:"nomValide";}s:6:"groups";a:1:{i:0;s:7:"Default";}}}');