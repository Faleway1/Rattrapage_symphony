# Sécurisation de l’application « Bibliothèque »

## Authentification 72h

L’authentification persistante est mise en place via le mécanisme `remember_me` de Symfony avec une durée maximale de 72h (259200 secondes).

La durée de vie de la session est également limitée côté navigateur.

- Configuration dans `security.yaml` (remember_me)
- Configuration de session dans `framework.yaml`

Screenshot montrant la durée de validité du cookie :

![Auth 72h](screenshots/auth_72h.png)

---

## Cookie de consentement

Un cookie simulant le consentement aux cookies est mis en place via une route dédiée.

Le cookie `cookie_consent=true` est créé lors de l’appel à l’URL `/cookie/consent`.

Screenshot montrant la présence du cookie :

![alt text](<Capture d’écran (89).png>)

---

## Protection CSRF

Les formulaires de suppression utilisent la protection CSRF native de Symfony.

Le token est vérifié côté serveur avant toute suppression.

Un test a été réalisé avec un token invalide, ce qui empêche la suppression de la ressource.

Screenshot montrant un token CSRF modifié dans la requête :

![CSRF](screenshots/csrf.png)

---

## Vulnérabilités des dépendances

La vérification des dépendances est effectuée avec la commande :

