# YouCommunity 🎉 - Community Event Planner

## 🚀 Contexte du Projet

**YouCommunity** est une plateforme web destinée à faciliter la gestion des événements communautaires locaux. L'objectif est de permettre aux utilisateurs de découvrir, créer et gérer des événements dans leur région, d'interagir avec d'autres participants, et de recevoir des notifications sur les événements à venir.

### Objectifs :
1. **Découvrir les événements locaux** 📅
2. **Créer, gérer et modifier des événements** 🛠️
3. **RSVP et gérer les participants** 🧑‍🤝‍🧑
4. **Géolocalisation pour filtrer les événements par proximité** 📍
5. **Ajouter des commentaires sous chaque événement** 💬
6. **Utiliser des outils Artisan pour le développement et les tests** ⚙️

Le projet sera développé en **Laravel 11** en suivant les bonnes pratiques du framework, avec des fonctionnalités telles que l'authentification sécurisée, la gestion des événements, et la géolocalisation.

---

## 🛠️ Fonctionnalités Clés

### 1. **Gestion des Utilisateurs (users)** 👤
- **Authentification sécurisée** avec Laravel Breeze, Jetstream ou Laravel UI 🔐
- **Profils utilisateurs** 🖼️
- **Rôles et permissions** (optionnel) 🔑
  - Modèle : `id`, `name`, `email`, `password`, `role`

### 2. **Gestion des Événements (events)** 📅
- **CRUD** des événements (Création, lecture, mise à jour, suppression) 📝
- **Géolocalisation** pour filtrer les événements par proximité 📍
- **Gestion des participants** 🧑‍🤝‍🧑
  - Modèle : `id`, `titre`, `description`, `lieu`, `date_heure`, `catégorie`, `user_id`, `max_participants`

### 3. **Gestion des RSVP (rsvps)** ✅
- **Inscription/désinscription** des participants aux événements
- **Suivi des participants** et notifications 📧

### 4. **Gestion des Commentaires (comments)** 💬
- **Ajout, suppression et validation des commentaires** avant soumission
  - Modèle : `id`, `contenu`, `user_id`, `event_id`

---

## 💻 Architecture et Outils

### Framework
- **Laravel** : Dernière version stable 🌟

### Base de Données
- **MySQL / PostgreSQL** 🔒

### Frontend
- **Blade** + **Tailwind CSS** 🎨

### Authentification
- **Laravel Breeze / Jetstream / UI** 🔐

### Outils de Développement
- `php artisan make:model -mcr` ⚙️
- `php artisan make:seeder` & `make:factory` 🧪
- **Tinker** pour le REPL et tests 🧑‍💻

---

## 📝 Critères d'Évaluation

### 1. **Implémentation des Bonnes Pratiques pour CRUD dans Laravel** 🔧
- Utilisez les migrations, modèles et requêtes Eloquent pour une structure de base de données propre et optimisée.

### 2. **Validation des Formulaires en Laravel** ✅
- Intégrer des règles de validation pour assurer la qualité des données entrantes.

### 3. **Utilisation des Middlewares pour la Validation** 🔒
- Appliquez des middlewares pour valider les données avant qu'elles n'atteignent les contrôleurs.

### 4. **Implémentation des Seeders et Factories pour le Modèle "Annonce"** 🧪
- Créez des seeders et factories pour générer des données de test.

### 5. **Optimisation des Requêtes Eloquent** ⚡
- Veillez à la performance des requêtes avec des méthodes comme `select`, `where`, et `eager loading` pour les relations.

### 6. **Gestion des Relations Eloquent** 🔗
- Utilisez **Eloquent Relationships** pour les relations entre utilisateurs, événements et commentaires.

### 7. **Soft Deletes** 🗑️
- Implémentez des **soft deletes** pour la suppression en douceur des événements.

### 8. **Cache des Requêtes Fréquemment Utilisées** 🧠
- Mettez en cache les résultats des requêtes pour améliorer les performances.

### 9. **Tests de Performance** 🚀
- Effectuez des tests pour mesurer la performance sous charge.

### 10. **Optimisation des Vues** 🔍
- Utilisez la mise en cache des vues pour améliorer la vitesse de rendu des pages complexes.

---

## 🧑‍🏫 Modalités Pédagogiques

- **Travail individuel** : Réalisation complète du projet par l'étudiant.
- **Durée** : 5 jours ⏳
- **Date de lancement** : 17/02/2025 📅
- **Date limite de soumission** : 21/02/2025 avant 17h30 ⏰

### **Modalités d'Évaluation**
1. **Simulation de l'application web** (5 minutes) 💻
2. **Code Review + Questions Techniques** (5 minutes) 🧐
3. **Mise en situation individuelle** (10 minutes) 🎤

### **Livrables**
- Code source propre sur GitHub 📁
- Conception UML 📝

---

## 🛠️ Commandes Artisan Recommandées

- `php artisan make:model -mcr Event` pour générer le modèle, la migration, le contrôleur et les ressources liées.
- `php artisan make:seeder EventSeeder` pour insérer des données de test.
- `php artisan make:factory EventFactory` pour créer des usines de données aléatoires.
- `php artisan tinker` pour tester vos modèles et données.

---

## 🔑 Bonnes Pratiques

1. **Validation des Entrées** : Utilisez des **Form Requests** pour valider les données avant qu'elles n'atteignent les contrôleurs.
2. **Middleware de sécurité** : Appliquez des middlewares pour sécuriser vos routes et données.
3. **Soft Deletes** : Utilisez les soft deletes pour ne pas perdre définitivement les données supprimées.
4. **Optimisation des requêtes** : Mettez en cache les résultats fréquents et optimisez les relations dans Eloquent.

---

## 🌐 Lien GitHub
Retrouvez le repository du projet ici : [GitHub Repository](https://github.com/B4drEddine0/YouCommunity)

---

Bonne chance pour le développement de **YouCommunity** ! 🎉 Créez une plateforme dynamique et conviviale pour tous les utilisateurs cherchant à participer à des événements communautaires locaux. 🙌
