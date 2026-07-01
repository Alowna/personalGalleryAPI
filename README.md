# Simple PHP Posts API

This project is a lightweight PHP API that serves posts data (JSON) and static assets such as images and media files.

The API is still under development and may change frequently.

## Purpose?

Meta is taking too long to release my dev account so I made my own API with a close enough structure towards the final project in [**personalGallery**](https://github.com/Alowna/PersonalGallery).

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

1. Create a .env file in the root directory based on .env.example:

```bash
BASE_URL=http://127.0.0.1:8080
```

2. Create a posts.json file in the root directory based on example.posts.json:

* I'm using post_id as integers here but you can do as you'd need.

```bash
[
    {
        "post_id": 1,
        "title": "Your title",
        "content": "Your content",
        "image": "example.webp"
    },
    {
        "post_id": 4,
        "title": "Your title",
        "content": "Your content",
        "image": "example.webp"
    }
]
```

3. Feed your img directory with your desired images (webp recommended)



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
