=== ServiceFlow Core ===
Contributors: serviceflow
Requires at least: 6.6
Tested up to: 6.8
Requires PHP: 8.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Companion business data engine for ServiceFlow theme.

== Description ==

ServiceFlow Core manages all business records and conversion logic for the ServiceFlow theme system:
* Custom Post Types: `service`, `service_area`, `team_member`, `testimonial`, `faq`, `project`, and `booking_request`.
* Taxonomy: `service_category`.
* Global Business Information: Address, telephone, WhatsApp, business hours, and coordinates.
* Theme Integration: Feeds dynamic values into Gutenberg Block Bindings via `serviceflow_business_info` filter.
* WhatsApp Integration: Generates dynamic lead messages with variable interpolation.
* Schema.org: Generates LocalBusiness/AutoRepair and Service structured JSON-LD with automatic SEO plugin deduplication.
* 1-Click Demo Importer: Instantly populates 8 Services, 6 Categories, 4 Team Members, 5 Testimonials, 5 Service Areas, and 10 FAQs for AutoCare Workshop.

== Custom Post Types & Slugs ==

* Services: `/service/oil-change/` (Archive: `/services/`)
* Service Areas: `/service-area/downtown/` (Archive: `/service-areas/`)
* Team: `/team-member/robert-hansen/`
* Projects (Before/After): `/project/headlight-restoration/`
* Bookings: Private lead management in WP Admin.
