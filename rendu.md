# Sécurisation de l’application « Bibliothèque »

## Authentification 72h

L’authentification persistante est mise en place via le mécanisme `remember_me` de Symfony avec une durée maximale de 72h (259200 secondes).

La durée de vie de la session est également limitée côté navigateur.

- Configuration dans `security.yaml` (remember_me)
- Configuration de session dans `framework.yaml`

Screenshot montrant la durée de validité du cookie :

![alt text](<Capture d'écran 2026-01-09 125836.png>)
Le cookie remember me de 72h

---

## Cookie de consentement

Un cookie simulant le consentement aux cookies est mis en place via une route dédiée.

Le cookie `cookie_consent=true` est créé lors de l’appel à l’URL `/cookie/consent`.

Screenshot montrant la présence du cookie :

![alt text](<Capture d’écran (89).png>)

---

## Page d'erreur custom

Voici un exemple de page d'erreur customisé (en l'occurence la 404)

![alt text](<Capture d’écran (51).png>)

---

## Protection CSRF

Les formulaires de suppression utilisent la protection CSRF native de Symfony.

Le token est vérifié côté serveur avant toute suppression.

Un test a été réalisé avec un token invalide, ce qui empêche la suppression de la ressource.

Screenshot montrant un token CSRF modifié dans la requête :

![alt text](<Capture d’écran (90).png>)
Token avant d'etre modifié

![alt text](<Capture d’écran (91).png>)
Token post modification

![alt text](<Capture d’écran (92).png>)
Livre toujours present apres suppresion avec un token érroné
---

## Vulnérabilités des dépendances

La vérification des dépendances est effectuée avec la commande :

composer audit

---

## Difficultés rencontrés et Solutions

En difficulté j'ai eu l'erreur du debut ou j'ai du effectuer un changement sur mysql, et la partie 2 (tp7) que je n'aurais pas le temps de finir, j'ai deja un user avec une register et login mais il ne correspond pas completement aux attentes du tp7 puisque je n'avais pas le sujet.


---

## Bilan des acquis

Ce projet m’a permis de mieux comprendre les principaux mécanismes de sécurisation d’une application Web avec Symfony.

J’ai pu mettre en œuvre :

la validation des données côté serveur et côté client,

le contrôle d’accès par rôles avec le système de sécurité Symfony,

la gestion d’une authentification persistante limitée dans le temps,

la protection contre les attaques CSRF,

la gestion des cookies et du consentement simulé,

la mise en place d’une politique de sécurité du contenu (CSP),

la personnalisation des pages d’erreurs HTTP,

la vérification des vulnérabilités des dépendances via Composer.

Ce travail m’a permis de mieux comprendre l’architecture de sécurité de Symfony et de voir comment appliquer concrètement les recommandations de l’OWASP Top 10 dans un projet réel.

Il m’a également permis de prendre en main les fichiers de configuration de Symfony et d’avoir une vision plus globale de la sécurité côté back-end.