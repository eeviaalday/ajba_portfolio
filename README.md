# Aivee Joy Bañez Alday — Personal Portfolio

A personal portfolio website built with **Laravel 8** to showcase the profile, educational background, projects, and certifications of **Aivee Joy Bañez Alday**, a fourth-year Bachelor of Science in Information Technology (BSIT) student.

This project is a lightweight, **database-free** single-page application. All portfolio content is defined in a single PHP data array and rendered through Blade templates, making it simple to update and maintain.

---

## Table of Contents

- [About the Project](#about-the-project)
- [Sections & Features](#sections--features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [How to Run Locally](#how-to-run-locally)
- [Customizing Content](#customizing-content)

---

## About the Project

This portfolio presents a professional, aesthetically themed overview of Aivee Joy Bañez Alday's academic journey and career profile. It includes a cosmic, digital-universe visual theme with selectable accent colors, an autobiographical section, school and work history, a tools/technology wall, downloadable certificates, and a collection of academic and personal projects — with interactive image galleries for each.

The site is **fully client-rendered from static data** — there is no database, login system, or admin panel. Everything on screen comes from the hardcoded array in `routes/web.php`.

---

## Sections & Features

| Section | What it contains |
| ------- | ---------------- |
| **Home (Hero)** | Name, title, tagline, profile picture, CTA and social media links |
| **About** | Bio, profile photo, downloadable **Resume (PDF/JPG)**, and a **"My Gallery"** photo lightbox with 10 personal photos |
| **Journey** | Tabbed **Experience** (3 entries) and **Education** (2 entries) timelines |
| **Tools I've Used** | Technology wall with 19 tools across 4 categories (Programming & Scripting, Databases, Development & Version Control, Multimedia & UI/UX Design) |
| **Certificates** | Carousel of 5 certificates with a full-view modal and links to downloadable PDFs |
| **Featured Projects** | 3 management-system projects, each with a screenshot gallery |
| **Additional Projects & Activities** | 4 Java console applications plus a Microsoft Access database system, each with a lightbox gallery |
| **GitHub** | Link to the profile's GitHub repository |
| **Contact** | Copy-to-clipboard **Email** and **Phone** buttons, location, and social media links |

### Interactive features
- **Accent color themes** — 5 selectable colors (Lavender, Neon Purple, Rose, Blue, Mint), persisted in `localStorage`.
- **Scroll-reveal animations** on section content (with a fallback so content is never hidden).
- **Image lightboxes / modals** for project screenshots, certificates, and the personal gallery.
- **Certificate carousel** with swipe, arrow-key, and dot navigation.
- **Copy buttons** for email and phone using the Clipboard API (with a textarea fallback).
- **Cosmic animated background** rendered on a fixed canvas.
- Responsive layout with a mobile hamburger navigation menu.

---

## Technologies Used

Based on the actual files in the project:

- **Laravel 8** (PHP 8) — backend framework, routing, and Blade templating
- **Blade** — view templating engine
- **CSS3** — custom styles in `public/css/style.css`
- **JavaScript (vanilla)** — interactivity in `public/js/main.js`
- **Canvas API** — animated cosmic background in `public/js/constellation.js`
- **Font Awesome 6.5.1** — icons (loaded via CDN)
- **Google Fonts** — Cormorant Garamond & Manrope
- **XAMPP (Apache + MySQL/PHP)** — recommended local server environment

> **Note:** Although the default Laravel scaffolding includes MySQL configuration and `User` model, this project uses **no database**. All content is static data rendered by Blade.

---

## Project Structure

Relevant Laravel/Blade files explained:

```
routes/web.php                     # Single GET / route; holds the entire $portfolio data array
resources/views/portfolio.blade.php # Main page: includes all section components in order
resources/views/layouts/app.blade.php # HTML shell: nav, theme controls, fonts, script includes
resources/views/components/        # One Blade partial per section
    hero.blade.php                  # Home/Hero section
    about.blade.php                 # Bio, resume link, My Gallery modal
    education.blade.php             # Journey (Experience/Education tabs)
    tools.blade.php                 # Tools I've Used wall
    certificates.blade.php          # Certificate carousel + viewer
    projects.blade.php              # 3 featured projects with galleries
    additional-projects.blade.php   # Java + MS Access lightbox galleries
    github.blade.php                # GitHub link
    contact.blade.php               # Contact info + copy buttons + social links
    footer.blade.php                # Footer
public/css/style.css                # All custom styling
public/js/main.js                   # All interactivity (modals, carousel, theme, copy, reveal)
public/js/constellation.js          # Animated cosmic background
public/images/                      # Profile, gallery, and project screenshots
public/certificates/                # Certificate images (.png) and PDFs
public/files/                       # Resume (Alday Resume.pdf / .jpg)
```

The `portfolio.blade.php` includes the components in this order:

```blade
hero, about, education, tools, certificates, projects,
additional-projects, github, contact
```

---

## How to Run Locally

### Prerequisites
- **PHP 8** (recommended — for XAMPP use PHP 8.0+)
- **Composer**
- A web server such as **XAMPP (Apache)** or Laravel's built-in server

### Setup
1. **Clone or copy** the project into your XAMPP web root (`C:\xamppp\htdocs\e_portfolio` for example).

2. **Install PHP dependencies** with Composer:
   ```bash
   composer install
   ```

3. **Configure environment**: copy the example environment file (if `.env` is not present):
   ```bash
   cp .env.example .env
   ```
   Then generate an application key:
   ```bash
   php artisan key:generate
   ```

4. **Serve the site** using one of the following options.

#### Option A — XAMPP Apache
Place the project in the `htdocs` folder and open:
```
http://localhost/e_portfolio/public
```
`public` is the web root, so the app is served from there.

#### Option B — Laravel's built-in server
From the project root, run:
```bash
php artisan serve
```
Then open `http://127.0.0.1:8000`.

> **No database setup or migrations are required** — the site runs entirely on static data.

---

## Customizing Content

All content lives in the `$portfolio` array at the top of `routes/web.php`. To update the portfolio, edit that array and save — no code changes needed:

- **Personal info** — `name`, `title`, `tagline`, `email`, `phone`, `location`, `bio`
- **Social links** — `social` (GitHub, Facebook, TikTok, Instagram, Discord)
- **Gallery** — `gallery` (title + image path pairs)
- **Experience / Education** — `experience`, `education`
- **Projects** — `projects` (featured) and `additional_projects` (Java + MS Access)
- **Certificates** — `certificates` (with image and optional PDF)
- **Tools** — `tools` (organized by category)

Image files referenced in the array should be placed in `public/images`, certificate files in `public/certificates`, and the resume in `public/files`.

---

## About the Author

**Aivee Joy Bañez Alday** is a fourth-year BSIT student and aspiring IT professional, with experience as an Instructor/Trainer (OCTA Information Technology Services) and a Computer Systems Servicing (CSS) NC II trainer. She has hands-on experience with video editing, computer troubleshooting, network configuration, and developing simple applications.

- **Email:** aiveejoyba@gmail.com
- **Phone:** +639350552647
- **Location:** Sta. Rosa, Bangued, Abra, Philippines
- **GitHub:** [github.com/eeviaalday](https://github.com/eeviaalday)
