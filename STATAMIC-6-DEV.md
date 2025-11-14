# Statamic 6 Development Branch

This branch contains the **Statamic 6 compatible version** of Statamic Asset Sync Pro.

## ⚠️ Alpha/Testing Status

- **Statamic 6 is currently in alpha** - this version is for early testing only
- **Not published on Statamic Marketplace yet** - will be released as v2.0.0 when Statamic 6 is stable
- **Use at your own risk** in development environments only

## Installation for Testing

### Option 1: Install from GitHub (Recommended)

Add to your Statamic 6 site's `composer.json`:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mikomagni/statamic-asset-sync-pro"
        }
    ],
    "require": {
        "mikomagni/statamic-asset-sync-pro": "dev-dev"
    }
}
```

Then run:
```bash
composer update mikomagni/statamic-asset-sync-pro
```

### Option 2: Path Repository (Local Development)

If you're working on the addon locally:

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "../statamic-rsync-tools",
            "options": {
                "symlink": true
            }
        }
    ],
    "require": {
        "mikomagni/statamic-asset-sync-pro": "@dev"
    }
}
```

## Requirements

- **PHP 8.2+** (increased from 8.1)
- **Statamic 6.x** (alpha)
- **Laravel 11.x**
- rsync installed on your system

## What's Changed from v1.x (Statamic 5)

### Breaking Changes

1. **Minimum PHP version**: 8.1 → 8.2
2. **ServiceProvider method**: `boot()` → `bootAddon()` (Statamic 6 requirement)
3. **Dependencies updated**:
   - `statamic/cms`: ^5.0 → ^6.0
   - `symfony/process`: ^6.0|^7.0 → ^7.0

### New Features

- PHPUnit test suite with Orchestra Testbench
- Proper addon testing infrastructure
- Updated for Statamic 6 addon architecture

### What Stayed the Same

✅ All commands work identically (`assets:pull`, `assets:push`)
✅ All configuration options unchanged
✅ All features and functionality preserved
✅ No changes to usage or workflows

## Testing

Run the test suite:

```bash
# Install dev dependencies
composer install

# Run tests
./vendor/bin/phpunit

# Test commands
php please assets:pull --dry-run
php please assets:push --dry-run
```

## Reporting Issues

If you encounter issues while testing with Statamic 6:

1. Make sure you're using Statamic 6 alpha/beta
2. Verify PHP 8.2+ is installed
3. Check that all dependencies are updated: `composer update`
4. Report issues on GitHub: https://github.com/mikomagni/statamic-asset-sync-pro/issues

Please mention:
- Statamic version (6.x)
- PHP version
- Laravel version
- Full error message/stack trace

## Migration Guide

### From Statamic 5 (v1.x) to Statamic 6 (v2.x)

1. **Update your Statamic site to version 6**
2. **Update PHP to 8.2+** if needed
3. **Update the addon**:
   ```bash
   composer require mikomagni/statamic-asset-sync-pro:dev-dev
   ```
4. **Clear caches**:
   ```bash
   php please config:clear
   composer dump-autoload
   ```
5. **Test your workflows** with `--dry-run` first

No configuration changes needed - your `.env` settings remain the same!

## When Will This Be Stable?

This version will be released to the Statamic Marketplace as **v2.0.0** when:

1. Statamic 6 is officially released (out of alpha/beta)
2. Testing is complete and stable
3. All features are verified working

## For Statamic 5 Users

**Stay on the main branch / v1.x releases**

```bash
composer require mikomagni/statamic-asset-sync-pro:^1.0
```

The 1.x branch will continue to receive updates and support for Statamic 5.

---

**Questions?** Open an issue on GitHub or contact support.
