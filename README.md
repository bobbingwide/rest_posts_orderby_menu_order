# REST posts orderby menu order 
![banner](https://raw.githubusercontent.com/bobbingwide/rest_posts_orderby_menu_order/master/assets/rest_posts_orderby_menu_order-banner-772x250.jpg)
* Contributors:      bobbingwide
* Tags:              REST, orderby, menu_order, Gutenberg
* Requires at least: 5.5.1
* Tested up to:      5.5.1
* Stable tag:        0.0.1
* Requires PHP:      7.2.0
* License:           GPL-2.0-or-later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Improve orderby menu_order for REST requests.

## Description 
Use this plugin if the version of Gutenberg/WordPress you're using does not yet support this natively and you have more than 100 pages.

Filters a REST query ordered by menu_order to ensure a repeatable sequence over multiple pages.

It does this by adding post_title and ID to the orderby clause, to ensure a consistent sort sequence
as menu_order is not always set.

This plugins implements a workaround for [Gutenberg issue #12795](https://github.com/WordPress/gutenberg/issues/12795)
[PR #23647](https://github.com/WordPress/gutenberg/pull/23647).

This plugin can be removed when Gutenberg and/or WordPress core supports pagination of requests ordering on menu_order.

@see https://core.trac.wordpress.org/ticket/46294


## Installation 
1. Upload the plugin files to the `/wp-content/plugins/rest_posts_orderby_menu_order` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

## Screenshots 
1.

## Upgrade Notice 
# 0.0.1 
Use this plugin if the version of Gutenberg/WordPress you're using does not yet support this natively and you have more than 100 pages.

## Changelog 
# 0.0.1 
* Changed: Renamed main plugin file to more accurately reflect what it does.
* Tested: With Gutenberg 9.0.0
* Tested: With WordPress 5.5.1
* Tested: With PHP 7.4

