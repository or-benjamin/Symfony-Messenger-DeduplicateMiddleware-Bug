### Installation
1. Run `git clone https://github.com/or-benjamin/Symfony-Messenger-DeduplicateMiddleware-Bug`
2. Set up the .env.local (DATABASE_URL and LOCK_DSN must be linked to a database)
3. Run `composer install`

### How to reproduce
1. Run `php bin/console app:test`
2. Run `php bin/console messenger:consume`
