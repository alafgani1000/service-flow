# ServiceFlow — WordPress Conversion Engine for Local Services

**ServiceFlow** is a modern, performance-first WordPress system engineered specifically for local service businesses (automotive workshops, HVAC, plumbing, cleaning, detailing, and technical trades).

Built on the WordPress Block Editor (Gutenberg) and theme.json v3, ServiceFlow is designed around one primary objective: **helping service business owners convert website visitors into booked jobs and WhatsApp leads.**

---

## 🏛️ Architecture

ServiceFlow enforces strict separation of concerns following official WordPress standards:

```text
service-flow/
├── serviceflow/          # Presentation Layer (Block Theme)
│   ├── style.css         # Theme Header (WP 6.6+, PHP 8.1+)
│   ├── theme.json        # AutoCare Design Tokens (Colors, Typography, Spacing, Shadows)
│   ├── templates/        # Full Site Editing (FSE) Templates
│   ├── parts/            # Header, Footer, Mobile Sticky CTA, Breadcrumbs
│   ├── patterns/         # 31 Conversion-focused Gutenberg Block Patterns
│   ├── styles/           # Vertical Variations (HomeCare, CleanPro, Industrial, Professional)
│   └── blocks/           # Custom presentation blocks (Breadcrumbs with SEO plugin compatibility)
│
└── serviceflow-core/     # Business Data Engine (Companion Plugin)
    ├── src/PostTypes/    # 7 CPTs: Services, Service Areas, Team, Testimonials, FAQ, Projects, Bookings
    ├── src/Taxonomies/   # Service Categories (Maintenance, Repair, AC, Engine, Detailing, etc.)
    ├── src/Meta/         # Meta boxes for pricing, duration, ratings, lead status
    ├── src/Settings/     # Global business settings & theme Block Bindings bridge
    ├── src/WhatsApp/     # WhatsApp lead generation with dynamic tag interpolation
    ├── src/Schema/       # LocalBusiness (AutoRepair) and Service Schema.org JSON-LD
    ├── src/Admin/        # Dashboard, Setup progress tracker, Business settings UI
    └── src/Seed/         # 1-Click AutoCare Demo Content Importer (8 services, 6 categories, 4 team, 5 reviews, 5 areas, 10 FAQs)
```

---

## 🚀 Key Highlights

1. **Content Independence**: If a business changes themes, all service catalog data, pricing, testimonials, team credentials, service areas, and customer booking leads remain safely preserved in `serviceflow-core`.
2. **Block Bindings Integration**: Contact details, WhatsApp links, and booking URLs are dynamically injected into Gutenberg blocks and mobile sticky CTAs. Updating your phone or address in the admin instantly updates the entire website.
3. **0 KB Theme Front-End JS**: Built with native browser features, accessible HTML5 (`<details>` accordions), and lightweight CSS logical properties for instant loading and natural RTL support.
4. **SEO & Schema Compatibility**: Automatically outputs `AutoRepair`/`LocalBusiness` and `Service` JSON-LD schemas while seamlessly detecting and yielding to Yoast SEO and Rank Math to avoid duplicate data warnings.
5. **Mobile Sticky Conversion Bar**: Anchored quick-contact bar (Call, WhatsApp, Book Now) on mobile screens for maximum lead conversion.
6. **1-Click AutoCare Demo Importer**: Populates a fully functional automotive workshop website in seconds.

---

## 📋 Requirements

* WordPress 6.6 or higher
* PHP 8.1 or higher

---

## 📄 License

GPL v2 or later.
