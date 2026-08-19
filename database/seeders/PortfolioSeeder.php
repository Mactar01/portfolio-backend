<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // === SKILLS ===
        $skills = [
            // Frontend
            ['name' => 'Angular', 'category' => 'Frontend', 'level' => 90, 'icon' => 'angular', 'order' => 1],
            ['name' => 'TypeScript', 'category' => 'Frontend', 'level' => 85, 'icon' => 'typescript', 'order' => 2],
            ['name' => 'HTML / CSS', 'category' => 'Frontend', 'level' => 92, 'icon' => 'html5', 'order' => 3],
            ['name' => 'TailwindCSS', 'category' => 'Frontend', 'level' => 80, 'icon' => 'tailwind', 'order' => 4],
            ['name' => 'RxJS', 'category' => 'Frontend', 'level' => 75, 'icon' => 'rxjs', 'order' => 5],
            // Backend
            ['name' => 'Laravel', 'category' => 'Backend', 'level' => 85, 'icon' => 'laravel', 'order' => 1],
            ['name' => 'PHP', 'category' => 'Backend', 'level' => 80, 'icon' => 'php', 'order' => 2],
            ['name' => 'MySQL', 'category' => 'Backend', 'level' => 78, 'icon' => 'mysql', 'order' => 3],
            ['name' => 'REST API', 'category' => 'Backend', 'level' => 88, 'icon' => 'api', 'order' => 4],
            ['name' => 'Node.js', 'category' => 'Backend', 'level' => 65, 'icon' => 'nodejs', 'order' => 5],
            // Tools
            ['name' => 'Git / GitHub', 'category' => 'Outils', 'level' => 88, 'icon' => 'git', 'order' => 1],
            ['name' => 'Docker', 'category' => 'Outils', 'level' => 60, 'icon' => 'docker', 'order' => 2],
            ['name' => 'Figma', 'category' => 'Outils', 'level' => 70, 'icon' => 'figma', 'order' => 3],
            ['name' => 'VS Code', 'category' => 'Outils', 'level' => 95, 'icon' => 'vscode', 'order' => 4],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // === PROJECTS ===
        $projects = [
            [
                'title' => 'Portfolio Personnel',
                'description' => 'Mon portfolio fullstack développé avec Angular 17+ et Laravel 12. Design futuriste dark mode avec animations GSAP et interface réactive.',
                'short_description' => 'Portfolio fullstack Angular + Laravel avec design néon.',
                'technologies' => ['Angular', 'Laravel', 'TailwindCSS', 'GSAP'],
                'category' => 'web',
                'featured' => true,
                'github_url' => 'https://github.com',
                'live_url' => null,
                'order' => 1,
            ],
            [
                'title' => 'E-Commerce Platform',
                'description' => 'Plateforme e-commerce complète avec gestion des produits, panier, paiement Stripe, et tableau de bord admin.',
                'short_description' => 'Plateforme e-commerce avec Laravel & Angular.',
                'technologies' => ['Angular', 'Laravel', 'MySQL', 'Stripe'],
                'category' => 'web',
                'featured' => true,
                'github_url' => 'https://github.com',
                'live_url' => null,
                'order' => 2,
            ],
            [
                'title' => 'API REST Gestion RH',
                'description' => 'API REST pour la gestion des ressources humaines : employés, congés, paie, départements. Authentification JWT et documentation Swagger.',
                'short_description' => 'API REST complète pour la gestion RH.',
                'technologies' => ['Laravel', 'MySQL', 'JWT', 'Swagger'],
                'category' => 'api',
                'featured' => false,
                'github_url' => 'https://github.com',
                'live_url' => null,
                'order' => 3,
            ],
            [
                'title' => 'Dashboard Analytics',
                'description' => 'Tableau de bord analytics avec graphiques interactifs, rapports exportables en PDF, et données en temps réel via WebSockets.',
                'short_description' => 'Dashboard analytics avec graphiques et rapports.',
                'technologies' => ['Angular', 'Chart.js', 'Laravel', 'WebSocket'],
                'category' => 'web',
                'featured' => true,
                'github_url' => 'https://github.com',
                'live_url' => null,
                'order' => 4,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // === EXPERIENCES ===
        $experiences = [
            [
                'company' => 'Entreprise Actuelle',
                'position' => 'Développeur Fullstack Angular / Laravel',
                'location' => 'Dakar, Sénégal',
                'description' => 'Développement et maintenance d\'applications web fullstack.',
                'tasks' => [
                    'Développement de SPA Angular avec architecture modulaire',
                    'Conception et développement d\'APIs REST avec Laravel',
                    'Revue de code et mentorat des développeurs juniors',
                    'Optimisation des performances et de l\'UX',
                ],
                'start_date' => '2023-01-01',
                'end_date' => null,
                'is_current' => true,
                'type' => 'work',
                'order' => 1,
            ],
            [
                'company' => 'Agence Web',
                'position' => 'Développeur Frontend Angular',
                'location' => 'Dakar, Sénégal',
                'description' => 'Développement d\'interfaces web modernes et responsives.',
                'tasks' => [
                    'Intégration de maquettes Figma en Angular',
                    'Développement de composants réutilisables',
                    'Collaboration avec l\'équipe backend sur l\'intégration API',
                ],
                'start_date' => '2021-06-01',
                'end_date' => '2022-12-31',
                'is_current' => false,
                'type' => 'work',
                'order' => 2,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }

        // === TESTIMONIALS ===
        $testimonials = [
            [
                'name' => 'Marie Dupont',
                'position' => 'CTO',
                'company' => 'TechCorp',
                'content' => 'Un développeur exceptionnel ! Son maîtrise d\'Angular et Laravel est remarquable. Les projets sont livrés dans les délais avec une qualité de code irréprochable.',
                'rating' => 5,
                'order' => 1,
            ],
            [
                'name' => 'Jean Martin',
                'position' => 'Product Manager',
                'company' => 'StartupXYZ',
                'content' => 'Très professionnel et créatif. Il a su transformer notre vision en une application web magnifique et performante. Je recommande vivement !',
                'rating' => 5,
                'order' => 2,
            ],
            [
                'name' => 'Sophie Bernard',
                'position' => 'CEO',
                'company' => 'DigitalAgency',
                'content' => 'Excellent travail sur notre plateforme e-commerce. Très réactif, force de proposition et les résultats dépassent nos attentes.',
                'rating' => 5,
                'order' => 3,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // === BLOG POSTS ===
        $posts = [
            [
                'title' => 'Angular 17+ : Les nouveautés qui changent tout',
                'slug' => 'angular-17-nouveautes',
                'excerpt' => 'Découvrez les fonctionnalités révolutionnaires d\'Angular 17 : Signals, Defer blocks, le nouveau control flow et bien plus encore.',
                'content' => '# Angular 17+ : Les nouveautés qui changent tout

Angular 17 marque un tournant majeur dans l\'écosystème frontend. Voici un tour d\'horizon des nouveautés.

## 1. Signals — La réactivité réinventée

Les Signals remplacent progressivement Zone.js pour une détection de changements plus fine et plus performante.

```typescript
import { signal, computed } from \'@angular/core\';

const count = signal(0);
const doubled = computed(() => count() * 2);
```

## 2. Le nouveau Control Flow

La nouvelle syntaxe `@if`, `@for`, `@switch` est plus intuitive et performante.

```html
@if (user()) {
  <p>Bonjour {{ user().name }}</p>
} @else {
  <p>Non connecté</p>
}
```

## 3. Defer Blocks — Lazy loading natif

```html
@defer (on viewport) {
  <app-heavy-component />
} @placeholder {
  <p>Chargement...</p>
}
```

Ces nouveautés font d\'Angular 17 un framework plus moderne et plus performant que jamais !',
                'category' => 'Angular',
                'tags' => ['Angular', 'Frontend', 'JavaScript', 'TypeScript'],
                'published' => true,
                'published_at' => now()->subDays(10),
                'reading_time' => 5,
                'views' => 142,
            ],
            [
                'title' => 'Laravel 12 : Guide complet des API REST',
                'slug' => 'laravel-12-api-rest-guide',
                'excerpt' => 'Comment construire une API REST robuste et sécurisée avec Laravel 12, Sanctum et les meilleures pratiques.',
                'content' => '# Laravel 12 : Guide complet des API REST

Laravel 12 simplifie encore plus la création d\'APIs REST grâce à `php artisan install:api`.

## Structure recommandée

```
app/Http/Controllers/Api/
├── AuthController.php
├── UserController.php
└── ProductController.php
```

## Routes API

```php
Route::apiResource(\'products\', ProductController::class);
```

## Authentification avec Sanctum

Sanctum est maintenant intégré nativement dans Laravel 12.

```bash
php artisan install:api
```

Cette commande installe Sanctum, crée le fichier routes/api.php et effectue les migrations nécessaires.',
                'category' => 'Laravel',
                'tags' => ['Laravel', 'PHP', 'API', 'Backend'],
                'published' => true,
                'published_at' => now()->subDays(5),
                'reading_time' => 7,
                'views' => 89,
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
