=== ServiceFlow ===
Contributors: serviceflow
Requires at least: 6.6
Tested up to: 6.8
Requires PHP: 8.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Conversion-focused WordPress block theme for local service businesses.

== Description ==

ServiceFlow is a performance-first WordPress block theme engineered specifically for local service businesses (auto workshops, HVAC, plumbing, cleaning, detailing, and technical repairs).

Unlike multipurpose themes cluttered with bloated page builders, heavy sliders, and unnecessary scripts, ServiceFlow is designed around one goal: conversion. It helps prospective customers find services, view transparent price estimates, trust your expertise, and immediately reach out via Booking or WhatsApp.

ServiceFlow handles presentation and design tokens exclusively. Business records (services, bookings, custom price calculation, testimonials, team members, and service areas) are managed by the companion ServiceFlow Core plugin.

== Features ==

* Pure WordPress Full Site Editing (FSE) block theme with theme.json v3.
* 0 KB Front-End JavaScript footprint in v0.1: native browser features and accessible core blocks.
* Mobile Sticky Conversion Bar: quick Call, WhatsApp, and Booking CTAs anchored to mobile screens.
* Block Bindings Integration: dynamic telephone, WhatsApp, booking, and address links that automatically degrade or hide when business data is missing.
* 20+ Conversion-focused Block Patterns: Hero, Trust Metrics, Service Finder, Instant Calculator, Services Grid, Why Choose Us, How It Works, Before/After, Testimonials, Team, FAQ Accordion, Pricing Packages, Service Areas, and Contact Forms.
* Style Variations: AutoCare (Default Dark Industrial), HomeCare (Blue), CleanPro (Teal), Industrial (Slate & Yellow), and Professional (Navy & Royal).
* Breadcrumbs Block: Accessible breadcrumb navigation with automatic delegation to Yoast SEO and Rank Math when active.
* Fully accessible & RTL ready using modern CSS logical properties.

== Developer Hooks & Filters ==

Actions:
* `serviceflow_before_header` - Fired directly before the header template part.
* `serviceflow_after_header` - Fired directly after the header template part.
* `serviceflow_before_footer` - Fired directly before the footer template part.
* `serviceflow_after_footer` - Fired directly after the footer template part.

Filters:
* `serviceflow_business_info` - Supplies business name, phone, WhatsApp, hours, and addresses to the theme.
* `serviceflow_link_url` - Filters resolved dynamic URLs for buttons and bindings.
* `serviceflow_whatsapp_message` - Filters pre-filled WhatsApp lead messages.
* `serviceflow_breadcrumb_items` - Filters breadcrumb trail items array.
* `serviceflow_seo_plugin_active` - Filters whether an SEO plugin is detected to avoid duplicated structured data.
