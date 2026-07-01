# Simple PHP Posts API

This project is a lightweight PHP API that serves posts data (JSON) and static assets such as images and media files.

The API is still under development and may change frequently.

---

# Status

This project is currently in development (not production-ready).

Features may be added, changed, or removed without notice.

---

# How to run locally

You can run this API using PHP's built-in server:

```bash
php -S 127.0.0.1:8080 router.php
```

## Environment setup

Create a .env file in the root directory based on .env.example:

```bash
BASE_URL=http://127.0.0.1:8080
```

## How it works

* router.php acts as a custom front controller
* Handles:
    * API requests (posts.php)
    * Static files (/img, JSON, media files)
* Adds global CORS support
* Serves correct Content-Type automatically

# Notes

* Images and media are served directly by the PHP router
* CORS is enabled globally for development purposes
* This project is intended for learning and experimentation

# Requirements

* PHP 8+
* No external dependencies required
