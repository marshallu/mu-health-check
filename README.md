# MU Health Check

Exposes a `/_health` endpoint for uptime monitoring on Marshall University's WordPress sites.

- **Package:** `marshallu/mu-health-check`
- **Type:** WordPress plugin

---

## Installation

### Composer Installation

```bash
composer require marshallu/mu-health-check
```

Composer will install the plugin to `wp-content/plugins/mu-health-check/`. Activate it from the WordPress admin or via WP-CLI:

```bash
wp plugin activate mu-health-check
```

---

## Usage

Once activated, the plugin exposes a health check endpoint at:

```
https://yoursite.com/_health
```

### Response

**Success (HTTP 200):**
```json
{"status": "ok", "db": true}
```

**Failure (HTTP 500):**
```json
{"status": "error", "db": false}
```

The endpoint performs a simple database connectivity check by executing `SELECT 1`.

---

## Development

```bash
# Install dev dependencies
composer install

# Check coding standards
composer run lint

# Auto-fix coding standards violations
composer run format

# Run static analysis
composer run analyse
```

All code follows [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards).

---

## File Structure

```
mu-health-check/
├── mu-health-check.php    # Plugin entry point
├── composer.json          # Package definition & dev dependencies
├── phpcs.xml              # PHP CodeSniffer configuration
├── phpstan.neon           # PHPStan configuration
└── README.md              # Documentation
```
