# PHP Integration Guide

This guide explains how to run the Verona Project website locally with PHP support.

## Overview

The website has been converted to use PHP for the navbar component. The navbar is now a reusable component located in `/components/navbar.php`.

## File Structure

```
verona-project/
├── components/
│   └── navbar.php          # Reusable navbar component
├── pages/
│   ├── what-to-do.php
│   ├── what-to-see.php
│   ├── what-to-know.php
│   ├── grading.php
│   ├── sources.php
│   ├── what-to-do/
│   │   ├── walks-and-outdoors.php
│   │   ├── cultural-experiences.php
│   │   └── one-day-trips.php
│   └── what-to-see/
│       ├── museums-art-collections.php
│       ├── historic-landmarks.php
│       └── religious-heritage.php
├── assets/
│   ├── css/
│   ├── js/
│   └── fonts/
└── index.html              # Homepage (no navbar, remains HTML)
```

## How the Navbar Component Works

Each PHP page includes the navbar by:

1. Defining a `$basePath` variable that points to the project root
2. Including the navbar component with `include`

Example for pages in `/pages/`:
```php
<?php $basePath = '..'; ?>
<!DOCTYPE html>
<html lang="en">
<head>...</head>
<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>
    <!-- rest of the page -->
</body>
</html>
```

Example for pages in `/pages/what-to-do/` or `/pages/what-to-see/`:
```php
<?php $basePath = '../..'; ?>
<!DOCTYPE html>
<html lang="en">
<head>...</head>
<body>
    <?php include __DIR__ . '/../../components/navbar.php'; ?>
    <!-- rest of the page -->
</body>
</html>
```

## Running Locally

### Option 1: PHP Built-in Server (Recommended)

PHP has a built-in development server that's perfect for local testing.

1. **Install PHP** (if not already installed):
   - **Windows**: Download from [php.net](https://www.php.net/downloads) or use [XAMPP](https://www.apachefriends.org/)
   - **macOS**: PHP comes pre-installed, or use `brew install php`
   - **Linux**: `sudo apt install php` (Ubuntu/Debian) or `sudo dnf install php` (Fedora)

2. **Navigate to the project root** in your terminal:
   ```bash
   cd /path/to/verona-project
   ```

3. **Start the PHP development server**:
   ```bash
   php -S localhost:8000
   ```

4. **Open your browser** and visit:
   - Homepage: `http://localhost:8000/index.html`
   - What to Do: `http://localhost:8000/pages/what-to-do.php`
   - What to See: `http://localhost:8000/pages/what-to-see.php`
   - What to Know: `http://localhost:8000/pages/what-to-know.php`

### Option 2: XAMPP/WAMP/MAMP

If you prefer a full Apache + PHP stack:

1. Install [XAMPP](https://www.apachefriends.org/) (Windows/Linux/macOS), [WAMP](https://www.wampserver.com/) (Windows), or [MAMP](https://www.mamp.info/) (macOS)

2. Copy the project folder to the web server's document root:
   - **XAMPP**: `C:\xampp\htdocs\verona-project` (Windows) or `/opt/lampp/htdocs/verona-project` (Linux)
   - **WAMP**: `C:\wamp64\www\verona-project`
   - **MAMP**: `/Applications/MAMP/htdocs/verona-project`

3. Start the Apache server through the control panel

4. Open your browser and visit:
   - `http://localhost/verona-project/index.html`

### Option 3: Visual Studio Code with PHP Server Extension

1. Install the [PHP Server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver) extension in VS Code

2. Right-click on any PHP file and select "PHP Server: Serve Project"

3. The browser will open automatically

## Modifying the Navbar

To change the navbar across all pages, simply edit `/components/navbar.php`. The changes will automatically apply to all pages that include this component.

## HTML Files

The original `.html` files are still present in the repository. If you need to switch back to static HTML, those files remain available. The `.php` files are the new versions with the componentized navbar.

## Troubleshooting

### "PHP is not recognized" error
Make sure PHP is installed and added to your system PATH.

### White page or no output
Check that PHP is properly parsing the files. Try adding `<?php phpinfo(); ?>` to a test file to verify PHP is working.

### Include path errors
Make sure you're running the server from the project root directory, not a subdirectory.
