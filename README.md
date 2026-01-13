# WP USA SVG Map

Simple plugin to display a responsive inline SVG map of the United States via a shortcode.

Installation
- Copy the `wp-usa-svg-map` folder into your WordPress `wp-content/plugins/` directory.
- Activate the plugin from the WordPress admin Plugins page.

Usage
- Add the shortcode `[usa_svg_map]` to any post, page, or an Elementor Shortcode widget to render the map.

Notes for Elementor
- Use the `Shortcode` widget (or Text Editor set to shortcode) to place the map. The plugin outputs an inline SVG inside a container with class `usa-svg-map` so Elementor styling should not reposition individual SVG elements.
- If you see unexpected layout changes, ensure no custom CSS is targeting `.usa-svg-map svg *` in your theme or Elementor global CSS.

Next steps (planned)
- Replace the included simplified SVG with a precise state-outline SVG (including Alaska, Hawaii, territories).
- Add JS handlers for hover color changes and modal popups bound to each state's `id` or `data-state` attribute.
