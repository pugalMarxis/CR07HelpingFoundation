# CR07 Helping Foundation Website

A WordPress website project for **CR07 Helping Foundation**, built using WordPress, the Astra theme, Elementor, and donation-related plugins.

## Table of Contents

- [Project Overview](#project-overview)
- [Technology Stack](#technology-stack)
- [Themes and Plugins](#themes-and-plugins)
- [Key Features and Components](#key-features-and-components)
- [Donation and Payment System](#donation-and-payment-system)
- [Project Structure](#project-structure)
- [Local Development Setup](#local-development-setup)
- [Security Notes](#security-notes)
- [Verification Status](#verification-status)
- [Future Improvements](#future-improvements)

## Project Overview

CR07 Helping Foundation is a website project built on WordPress. It uses a visual page-building system and a collection of plugins to support website design, forms, and donation-related functionality.

The project includes GiveWP for donation management, an Elementor integration for donation widgets, and Forminator for form-related functionality.

> **Note:** Specific pages, organizational workflows, and payment processing capabilities should be documented as implemented only after they have been verified on the website.

## Technology Stack

| Technology | Purpose |
|---|---|
| WordPress | Content management system (CMS) |
| PHP | Server-side language used by WordPress and its plugins |
| MySQL / MariaDB | Database technology supported by WordPress |
| HTML5 | Web page structure |
| CSS3 | Styling and layout |
| JavaScript | Interactive website functionality |
| Astra | Active WordPress theme |
| Elementor | Visual page builder |
| Git and GitHub | Source code version control and project hosting |

## Themes and Plugins

### Active Theme

**Astra**

Astra is the active WordPress theme. It provides the base website layout and appearance.

Other theme directories found in the project include Twenty Twenty-Four and Twenty Twenty-Five. Their presence does not mean they are active.

### Active Plugins

| Plugin | Main purpose |
|---|---|
| Elementor | Visual website and page building |
| ElementsKit Lite | Additional Elementor widgets and layout components |
| Essential Addons for Elementor Lite | Extra widgets and design components for Elementor |
| Forminator | Form creation and form-related functionality |
| GiveWP | Donation management |
| GiveWP Donation Widgets for Elementor | Donation widgets and Elementor integration |
| LiteSpeed Cache | Caching and website optimization features |
| Sticky Header Effects for Elementor | Sticky-header visual effects |

These plugins were confirmed in the local WordPress active-plugin list. The availability of a plugin does not prove that every feature it offers is configured or used on the live website.

## Key Features and Components

### 1. WordPress Content Management

- Manage website content through the WordPress administration dashboard.
- Use the active Astra theme for the website's base design.
- Extend website functionality through WordPress plugins.

### 2. Visual Website Design

Elementor is installed and active, supported by ElementsKit Lite and Essential Addons for Elementor Lite.

These tools provide visual page-building capabilities and additional design components.

### 3. Donation Management

GiveWP is installed and active. It provides donation-management functionality, including support for donation forms and payment gateway integrations.

The GiveWP Donation Widgets for Elementor plugin is also active, providing integration between GiveWP and Elementor.

The actual donation forms, available donation amounts, donor workflow, and payment configuration should be confirmed on the website before being described as completed features.

### 4. Forms

Forminator is installed and active. It can be used to build website forms.

The specific forms configured for this project, and whether they are used for contact, registration, or another purpose, have not yet been verified.

### 5. Caching and Optimization

LiteSpeed Cache is installed and active. It provides caching and optimization capabilities.

Actual caching settings, server compatibility, and measured performance improvements have not yet been verified.

### 6. Header Design

Sticky Header Effects for Elementor is installed and active. It provides functionality for creating sticky-header effects when configured.

## Donation and Payment System

GiveWP is the project's confirmed donation-related plugin.

The local GiveWP plugin files contain implementations for several gateway types, including:

- **PayPal** — standard and commerce gateway code.
- **Stripe** — payment element gateway code.
- **Offline donations** — support for recording donations made outside online payment processing.

The presence of this code does **not** confirm that PayPal or Stripe is enabled, that the foundation's account is connected, or that a real donation has been successfully processed.

### Current Payment Verification

| Item | Status |
|---|---|
| GiveWP installed and active | Confirmed |
| GiveWP Elementor integration installed and active | Confirmed |
| PayPal gateway code present | Confirmed |
| Stripe gateway code present | Confirmed |
| Offline gateway code present | Confirmed |
| PayPal or Stripe configured for this website | Not yet verified |
| Successful payment transaction | Not yet verified |
| Donation forms and donor workflow | Not yet verified |

To verify payment configuration, open the WordPress dashboard and navigate to **Donations → Settings → Payment Gateways** (the menu labels may vary by GiveWP version). Check which methods are enabled. Do not publish API keys, secret keys, passwords, or other credentials in this README.

## Project Structure

A typical structure for this WordPress project includes:

```text
ngo/
├── wp-admin/                  # WordPress administration
├── wp-content/
│   ├── plugins/
│   │   ├── elementor/
│   │   ├── elementskit-lite/
│   │   ├── essential-addons-for-elementor-lite/
│   │   ├── forminator/
│   │   ├── give/
│   │   ├── givewp-donation-widgets-for-elementor/
│   │   ├── litespeed-cache/
│   │   └── sticky-header-effects-for-elementor/
│   ├── themes/
│   │   ├── astra/
│   │   ├── twentytwentyfour/
│   │   └── twentytwentyfive/
│   └── uploads/               # Uploaded media, if present
├── wp-includes/               # WordPress core libraries
├── wp-config.php              # WordPress configuration; keep private
└── README.md                  # Project documentation
```

This is an overview of the WordPress structure and the plugins and themes identified in the project. The presence of a directory depends on the local installation; not every item necessarily needs to be committed to Git.

## Local Development Setup

The following instructions are for a local development environment using XAMPP on Linux.

### Prerequisites

- XAMPP with Apache, PHP, and MariaDB/MySQL
- A copy of the project files
- The matching WordPress database, if you are restoring an existing installation

### 1. Start XAMPP

```bash
sudo /opt/lampp/lampp start
```

### 2. Place the project in the web directory

For this local setup, the project directory is:

```text
/opt/lampp/htdocs/ngo
```

### 3. Configure the database

For an existing installation, import its database into the local MariaDB/MySQL server and configure the local WordPress database connection.

**Important:** Never put database passwords or other secrets in this README or commit them to a public repository.

### 4. Open the website

Visit:

```text
http://localhost/ngo/
```

To access the administration dashboard, visit:

```text
http://localhost/ngo/wp-admin/
```

These URLs assume Apache is serving the project from `/opt/lampp/htdocs/ngo` and that the WordPress installation and database have been configured correctly.

## Security Notes

- Never commit passwords, database credentials, API keys, payment gateway secrets, or private login details.
- Keep `wp-config.php` out of a public repository when it contains environment-specific credentials.
- If credentials have already been exposed in GitHub, removing the file from the latest commit is not enough to remove it from previous Git history.
- Rotate any exposed passwords, database credentials, and payment gateway secrets.
- Review `.gitignore` before pushing the project.
- Do not commit database dumps containing personal information, donor records, user accounts, or other confidential data unless there is a deliberate, secure reason to do so.
- Use test or sandbox payment credentials during development.

## Verification Status

The following items were verified from the local WordPress installation:

- Astra is the active theme.
- Elementor, ElementsKit Lite, Essential Addons for Elementor Lite, Forminator, GiveWP, GiveWP Donation Widgets for Elementor, LiteSpeed Cache, and Sticky Header Effects for Elementor are active plugins.
- GiveWP's local plugin code includes PayPal, Stripe, and offline gateway implementations.

The following items still require checking in the WordPress dashboard or through a safe test:

- Which payment gateways are enabled and configured.
- Whether donation forms are published and working.
- Whether a test donation can be completed successfully.
- Which Forminator forms are in use.
- Whether caching and optimization settings are correctly configured.

## Future Improvements

Potential improvements, depending on the foundation's actual requirements, include:

- Verify and document the published donation forms.
- Configure and test the intended payment methods using sandbox mode first.
- Document the donor experience and donation confirmation process.
- Verify contact forms and their submission handling.
- Review website performance and caching configuration.
- Document deployment steps and required environment variables.
- Add screenshots of the website and its key pages, after confirming that the screenshots contain no sensitive information.
- Add a clear contribution and maintenance process if the project will be developed by a team.

## License and Usage

Add the project's intended license and usage terms before distributing or reusing the source code. Do not assume that all bundled themes and plugins use the same license as this project.

---

**Project:** CR07 Helping Foundation  
**Platform:** WordPress  
**Active theme:** Astra  
**Primary page builder:** Elementor  
**Donation plugin:** GiveWP  
**Repository:** https://github.com/pugalMarxis/CR07HelpingFoundation
