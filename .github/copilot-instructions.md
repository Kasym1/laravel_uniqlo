# Copilot instructions for this repository

This file gives concise, project-specific guidance for AI coding agents working on this Laravel app.

## Purpose
- Help contributors and AI agents understand the app structure, developer workflows, and common pitfalls.

## Big picture
- Laravel 10 monolith: HTTP entry via [routes/web.php](routes/web.php) and controllers in [app/Http/Controllers](app/Http/Controllers).
- Eloquent models live in [app/Models](app/Models). DB schema is under [database/migrations](database/migrations).
- Frontend assets are built with Vite via [vite.config.js](vite.config.js) and `npm run dev` / `npm run build` (see [package.json](package.json)).
- Composer manages PHP dependencies (see [composer.json](composer.json)).

## How to run locally (commands)
- Install PHP deps: `composer install`.
- Copy env and generate key: `cp .env.example .env` then `php artisan key:generate` (composer scripts attempt this on project creation).
- Install JS deps and run dev server: `npm install` then `npm run dev` (Vite). See [vite.config.js](vite.config.js).
- Run the app: `php artisan serve` or use your local webserver.

## Tests and CI
- Run PHPUnit locally: `./vendor/bin/phpunit` or `php artisan test` (phpunit config at [phpunit.xml](phpunit.xml)).
- The repo includes PHPUnit configuration and dev packages in [composer.json](composer.json).

## Project-specific conventions & patterns
- Autoload: PSR-4 root `App\` -> `app/` (see [composer.json](composer.json)).
- Models: many models use `protected $table` and `HasFactory`. Note `Post` sets `protected $guarded = false` but also defines `protected $fillable = ['title']`—watch for inconsistent mass-assignment configuration ([app/Models/Post.php](app/Models/Post.php)).
- Controllers: simple, controller methods often use `dump()` / `dd()` for quick debugging (example: `instagram()` in [app/Http/Controllers/PostController.php](app/Http/Controllers/PostController.php)).
- Routes: primary app routes are in [routes/web.php](routes/web.php). Validate route syntax — there is a stray quote in the product update route that will cause a parse error.

## Common pitfalls found in the codebase (actionable)
- Watch for accidental trailing spaces in array keys and values used in `PostController::create()`; these will create unexpected DB column mismatches.
- Be careful with route syntax errors: check [routes/web.php](routes/web.php) for `Route::get('/product/update', [ProductsController::class,'update']');` (extra quote).
- When adding migrations or seeding, inspect existing migrations (several posts-related migrations exist) to avoid duplicate/overlapping schemas.

## Integration points
- External packages: `guzzlehttp/guzzle`, `laravel/sanctum`, `laravel/tinker` (see [composer.json](composer.json)).
- Frontend: `laravel-vite-plugin` + Vite — dev loop is `npm run dev`.

## Files to inspect first for most tasks
- Routing and controllers: [routes/web.php](routes/web.php) and [app/Http/Controllers](app/Http/Controllers)
- Models and relationships: [app/Models](app/Models)
- Database schema: [database/migrations](database/migrations)
- Frontend build: [package.json](package.json) and [vite.config.js](vite.config.js)
- Tests config: [phpunit.xml](phpunit.xml)

## How an AI agent should assist (short rules)
- Prefer minimal, targeted edits. Run static checks (lint / php -l) before proposing code patches.
- When modifying DB-related code, reference existing migrations and `protected $fillable` / `$guarded` in the model changed.
- Avoid changing global app structure (providers, Kernel) unless task explicitly requires it — these are standard Laravel scaffolding.

## Example fixes / examples
- To fix the product route syntax error, update [routes/web.php](routes/web.php) to:

- Route::get('/product/update', [ProductsController::class, 'update']);

- To fix trailing-space keys in the `create()` payload in `PostController`, normalize keys to match migration columns (e.g., `title`, `content`, `image`, `likes`, `is_published`).

## If you need more context
- Ask to open the following files: [app/Http/Controllers/PostController.php](app/Http/Controllers/PostController.php), the migrations under [database/migrations](database/migrations), and any referenced controller (ProductsController, CarsController) to audit behavior.

---
If anything here is unclear or you want a different level of detail (examples, more file links, or CI steps), tell me which sections to expand.
