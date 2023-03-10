
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](http://www.gnu.org/licenses/gpl-3.0)


# Pléiade - Bureau Virtuel

Pléiade est un bureau virtuel développé pour les besoins des agents et des élus des collectivités territoriales.


https://user-images.githubusercontent.com/33468314/193852073-3dc6c105-fa18-478f-a81e-8336ceab7f8a.mp4


## Acteurs du projet

![alt text](banner-partners.png)

## Fonctionnement

Pléiade sert à centraliser les accès aux applications utilisées par les collectivités.
Le bureau virtuel (front) est une brique d'un écosystème global qui comprend :
* un méta-annuaire [OpenLDAP](https://www.openldap.org/)
* un système d'authentification centralisée [LemonLDAP](https://lemonldap-ng.org/)
* des connecteurs ActiveDirectory pour nourrir le méta-annuaire [Ldap Synchronisation Connector](https://lsc-project.org/)
* un gestionnaire d'annuaire [FusionDirectory](https://www.fusiondirectory.org/)

Une suite complète est disponible pour l'installation de ces composants : [FusionIam](https://fusioniam.org/components.html)

## Applications compatibles avec LemonLDAP::NG

Voir la liste des applications sur [le site de LemonLDAP::NG](https://lemonldap-ng.org/documentation/latest/applications.html)

## Installation

La procédure ci-dessous est valable pour un environnement serveur Linux Ubuntu 20.04+ / Debian 9.x
Il est conseillé de créer un utilisateur système spécifique et de l'ajouter au groupe www-data

### Composer

```
cd ~ && curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

### Rerverse proxy

Installer Apache ou Nginx en suivant [la documentation de Drupal](https://www.drupal.org/forum/support/post-installation/2019-05-16/how-to-configure-drupal8-with-apache-and-nginx-used-as-a)


### Drupal core

```
cd /var/www
sudo composer create-project drupal/recommended-project pleiade
sudo usermod -aG www-data your_user
sudo chown your_user:www-data :-R pleiade
```

### Modules communautaires (contrib)

Un ensemble de modules additionnels nécessaires au fonctionnement et à la sécurité sont installés (utiliser le fichier composer.json de ce répertoire)
```
composer install
```
## Modules Pléiade (custom)

Les modules spécifiques au bureau virtuel sont positionnés [dans ce répertoire](https://github.com/e-Collectivites/pleiade-custom-modules).

## Thème Pléiade (custom)

[Le thème](https://github.com/e-Collectivites/pleiade-custom-theme) est basé sur Bootstrap 5 et son élaboration a bénéficié d'un accompagnement par [l'Agence Nationale de la Cohésion des Territoires](https://agence-cohesion-territoires.gouv.fr/) (ANCT).


## Contacts / Développeurs

[Quentin Marchand](https://github.com/QuentinEcollectivites) et [Romain Leclerc](https://github.com/RomainLLC)
