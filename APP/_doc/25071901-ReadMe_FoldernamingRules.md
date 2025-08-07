# Flat Web App Template

This project provides a structured, flat-root PHP/HTML web application layout using single-level folders prefixed with underscores for modular clarity.

## 📁 Folder Structure

All folders reside at the root level and are prefixed with `_` to indicate their role. This structure is suited for modular, scalable development with clearly separated logic.

| Folder       | Purpose |
|--------------|---------|
| `_css/`      | Custom stylesheets (e.g., `_css_login_screen.css`) |
| `_js/`       | JavaScript files (e.g., `_js_dashboard_widgets.js`) |
| `_inc/`      | Reusable includes like headers and footers |
| `_fnc/`      | PHP function libraries (authentication, utilities, database access) |
| `_mod/`      | Modular business logic (e.g., customer, report views) |
| `_ajx/`      | AJAX endpoint scripts for async client-server communication |
| `_tpl/`      | Layout and page templates |
| `_upl/`      | Uploaded user files (PDFs, images, etc.) |
| `_log/`      | System or activity logs |
| `_cfg/`      | Configuration files |
| `_tst/`      | Test scripts and diagnostic tools |
| `_bak/`      | Backup and versioned data exports |
| `pub/`       | Public entry point folder (index.php lives here) |

## 🔤 File Naming Convention

All files are prefixed to match their parent folder to maintain traceability, even when viewed or deployed out of context.

Examples:
- `_mod_cus_view.php` → Customer view logic in `_mod/`
- `_css_login_screen.css` → Login screen styling in `_css/`
- `_fnc_db_connect.php` → DB helper in `_fnc/`
- `_ajx_save_customer.php` → AJAX handler in `_ajx/`

## 🚀 Setup Instructions

1. Deploy all contents to your web server root.
2. Configure your application in `_cfg/_cfg_config.php`.
3. Point your web server to `pub/index.php` as the main entry.
4. Use `.htaccess` to restrict direct access to all `_xxx/` folders if on Apache.

## 🔐 Security Tips

- Use `.htaccess` or NGINX rules to restrict access to all folders starting with `_`.
- Ensure `pub/` is the only folder exposed to the public web.

## 🧰 Maintenance & Collaboration

- Keep naming consistent with prefix structure.
- Update this `README.md` as the project evolves.
- Use separate folders (`_mod/`, `_fnc/`, `_tpl/`) to isolate logic for clarity and easier onboarding.

---

Created for modular PHP web apps like CBA or MyWorkStream, but adaptable to other structured apps.
