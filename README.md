<p align="center">
  <a href="https://roots.io/sage/"><img alt="Sage" src="https://cdn.roots.io/app/uploads/logo-sage.svg" height="100"></a>
</p>

<p align="center">
  <a href="https://packagist.org/packages/roots/sage"><img alt="Packagist Installs" src="https://img.shields.io/packagist/dt/roots/sage?label=projects%20created&colorB=2b3072&colorA=525ddc&style=flat-square"></a>
  <a href="https://github.com/roots/sage/actions/workflows/main.yml"><img alt="Build Status" src="https://img.shields.io/github/actions/workflow/status/roots/sage/main.yml?branch=main&logo=github&label=CI&style=flat-square"></a>
  <a href="https://twitter.com/rootswp"><img alt="Follow Roots" src="https://img.shields.io/badge/follow%20@rootswp-1da1f2?logo=twitter&logoColor=ffffff&message=&style=flat-square"></a>
  <a href="https://github.com/sponsors/roots"><img src="https://img.shields.io/badge/sponsor%20roots-525ddc?logo=github&style=flat-square&logoColor=ffffff&message=" alt="Sponsor Roots"></a>
</p>

# Webmaster Theme

**Custom WordPress theme built on Sage 11 — Laravel Blade, Tailwind CSS v4, and Vite**

- 🔧 Clean, efficient theme templating with Laravel Blade
- ⚡️ Modern front-end development workflow powered by Vite
- 🎨 Out of the box support for Tailwind CSS
- 🚀 Harness the power of Laravel with [Acorn integration](https://github.com/roots/acorn)
- 📦 Block editor support built-in

Sage brings proper PHP templating and modern JavaScript tooling to WordPress themes. Write organized, component-based code using Laravel Blade, enjoy instant builds and CSS hot-reloading with Vite, and leverage Laravel's robust feature set through Acorn.

[Read the docs to get started](https://roots.io/sage/docs/installation/)

## Support us

Roots is an independent open source org, supported only by developers like you. Your sponsorship funds [WP Packages](https://wp-packages.org/) and the entire Roots ecosystem, and keeps them independent. Support us by purchasing [Radicle](https://roots.io/radicle/) or [sponsoring us on GitHub](https://github.com/sponsors/roots) — sponsors get access to our private Discord.

### Sponsors

<a href="https://carrot.com/"><img src="https://cdn.roots.io/app/uploads/carrot.svg" alt="Carrot" height="90"></a> <a href="https://wordpress.com/"><img src="https://cdn.roots.io/app/uploads/wordpress.svg" alt="WordPress.com" height="90"></a> <a href="https://www.itineris.co.uk/"><img src="https://cdn.roots.io/app/uploads/itineris.svg" alt="Itineris" height="90"></a> <a href="https://kinsta.com/?kaid=OFDHAJIXUDIV"><img src="https://cdn.roots.io/app/uploads/kinsta.svg" alt="Kinsta" height="90"></a> <a href="https://40q.agency/"><img src="https://cdn.roots.io/app/uploads/40q.svg" alt="40Q" height="90"></a>

## Community

Keep track of development and community news.

- Join us on Discord by [sponsoring us on GitHub](https://github.com/sponsors/roots)
- Join us on [Roots Discourse](https://discourse.roots.io/)
- Follow [@rootswp on Twitter](https://twitter.com/rootswp)
- Follow the [Roots Blog](https://roots.io/blog/)
- Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)

---

## Deployment — Shared Hosting via SSH

### SSH access

```bash
ssh -p 65002 u778166192@145.79.14.110
```

### Install WP-CLI on the server

WP-CLI is not pre-installed on most shared hosts. Install it once in your home directory:

```bash
cd ~
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# Verify
php ~/wp-cli.phar --info
```

All WP-CLI commands must be run from the WordPress root with the full phar path:

```bash
cd ~/domains/demo.libradigital.id/public_html
php ~/wp-cli.phar <command>
```

### Build and deploy assets

Assets are compiled locally (the server has no Node.js):

```bash
# 1. Build locally
npm run build

# 2. Sync built assets to server
rsync -avz -e "ssh -p 65002" \
  /path/to/webmaster-theme/public/ \
  u778166192@145.79.14.110:~/domains/demo.libradigital.id/public_html/wp-content/themes/webmaster-theme/public/

# Full theme sync (excluding dev files)
rsync -avz --progress \
  --exclude='node_modules' \
  --exclude='.git' \
  --exclude='.env' \
  -e "ssh -p 65002" \
  /path/to/webmaster-theme/ \
  u778166192@145.79.14.110:~/domains/demo.libradigital.id/public_html/wp-content/themes/webmaster-theme/
```

### Navigation menu setup

After activating the theme, create and assign the primary menu:

```bash
cd ~/domains/demo.libradigital.id/public_html

# Assign an existing menu to the Primary Navigation location
php ~/wp-cli.phar menu location assign "Main Menu" primary_navigation

# Verify assignment
php ~/wp-cli.phar menu location list
```

The `Appearance → Menus` screen can also be accessed directly at:
`/wp-admin/nav-menus.php`

> Note: Sage disables block-template support (`remove_theme_support('block-templates')`), but some WordPress/Gutenberg versions still hide the Menus link in the sidebar. The theme registers an `admin_menu` hook to restore it.
