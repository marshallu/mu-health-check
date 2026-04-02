# MU Health Check

A lean health check plugin for Marshall University's WordPress network.

- **Package**: `marshallu/mu-health-check`
- **Type**: WordPress plugin
- **Author**: Christopher McComas

## Development Commands

```bash
# Install dependencies
composer install

# Run PHP CodeSniffer (lint)
composer run lint

# Auto-fix coding standards violations
composer run format

# Run static analysis
composer run analyse
```

## WordPress Coding Standards

This project uses [WordPress Coding Standards (WPCS)](https://github.com/WordPress/WordPress-Coding-Standards) enforced via PHP_CodeSniffer. All code must pass WPCS linting.

### Key rules

- Use tabs for indentation
- Use single quotes for strings unless interpolation is needed
- Prefix all functions, hooks, and globals appropriately
- Use `snake_case` for functions and variables
- Always sanitize input and escape output
- Hook into WordPress actions/filters rather than executing logic at the top level
- Never use `extract()`, `eval()`, or short PHP open tags (`<?`)
