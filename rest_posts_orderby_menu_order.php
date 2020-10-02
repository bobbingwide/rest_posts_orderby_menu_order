<?php
/**
Plugin Name: REST posts orderby menu order
Depends:
Plugin URI: https://www.oik-plugins.com/oik-plugins/rest_posts_orderby_menu_order
Description: Workaround for Gutenberg issue #12795 PR #23647
Version: 0.0.1
Author: bobbingwide
Author URI: https://bobbingwide.com/about-bobbing-wide
Text domain: rest-posts-orderby-menu-order
Domain Path: /languages/
License: GPL2v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2020 Bobbing Wide (email : herb@bobbingwide.com )

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License version 2,
as published by the Free Software Foundation.

You may NOT assume that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

The license for this software can likely be found here:
http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Filters a REST query ordered by menu_order to ensure a repeatable sequence over multiple pages.
 *
 * This can be removed when WordPress core supports pagination of requests ordering on menu_order.
 *
 * @see https://core.trac.wordpress.org/ticket/46294
 *
 * @param string   $orderby Current orderby value.
 * @param WP_Query $query Query object.
 */
function rest_posts_orderby_menu_order( $orderby, $query ) {
    global $wpdb;
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
        if ( 'menu_order' === $query->query['orderby'] ) {
            $orderby = "$wpdb->posts.menu_order,$wpdb->posts.post_title,$wpdb->posts.id " . $query->query['order'];
        }
    }
    return $orderby;
}
add_filter( 'posts_orderby', 'rest_posts_orderby_menu_order', 10, 2 );


