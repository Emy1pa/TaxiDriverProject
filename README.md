# MonGrandTaxi - Plateforme de Réservation de Grands Taxis

Bienvenue sur la plateforme de réservation de grands taxis de MonGrandTaxi, développée avec le framework Laravel.

## Fonctionnalités Requises

### Authentification et Autorisation

- Mise en place d'un système d'authentification avec des rôles (Passager standard, Chauffeur de taxi et Administrateur).
- Utilisation de politiques et de gardes pour régir l'accès aux profils et aux fonctionnalités spécifiques en fonction du rôle de l'utilisateur.
- Inscription en tant que passager ou chauffeur avec des identifiants uniques.
- Les passagers peuvent enregistrer leurs trajets fréquents pour une réservation plus rapide.

### Utilisateurs et Réservations

- Profil utilisateur avec nom, photo de profil, historique de trajets et informations de contact.
- Les passagers peuvent réserver des taxis en spécifiant le jour, le lieu de prise en charge et la destination.
- Les chauffeurs peuvent définir leurs disponibilités, afficher les réservations acceptées et indiquer leur statut actuel.
- Visualisation de l'historique des réservations et notation des chauffeurs par les passagers.
- Annulation de réservation dans un délai spécifié.
- Filtrage des taxis disponibles par localisation, type de véhicule et évaluations des chauffeurs.

### Chauffeurs et Gestion des Taxis

- Profil chauffeur avec nom, photo de profil, description, numéro de plaque d'immatriculation et type de véhicule.
- Mise à jour des disponibilités par les chauffeurs.
- Visualisation de l'historique des trajets et des évaluations reçues.
- Spécification du type de paiement accepté (espèces, carte, etc.).
- Sélection du trajet par le chauffeur.

### Administration et Gestion des Utilisateurs

- Les administrateurs peuvent gérer les passagers, les chauffeurs et les réservations (soft delete).
- Visualisation des statistiques liées aux trajets, aux réservations et aux évaluations.

## Prérequis

- PHP 8.2.4
- Composer
- Laravel Framework 10.43.0
- Base de données MySQL

