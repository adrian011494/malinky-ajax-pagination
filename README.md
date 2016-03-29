# Wordpress Ajax Paging

## Description

Load paged content with Ajax throughout your Wordpress site. The plugin works on posts, pages, search, custom post types and WooCommerce. Paginate MULTIPLE sets of posts in the same template.

There are 3 pagination types to choose from.

* Infinite Scroll - Automatically load new posts as the user reaches the bottom of the screen.
* Load More Button - Click to load new posts.
* Pagination - Normal pagination but load the next page with Ajax.

### Set Up

* Once the plugin is installed navigate to Settings -> Ajax Pagination Settings.
* Select an applicable theme default. If your theme isn't listed then add the correct selectors.
* There are 4 required selectors which can be found by using your browser developer tools. For additional help watch this [video](http://www.wordpress-ajax-pagination.com/set-up).
* 'Posts Selector' The selector that wraps all of the posts/products.
* 'Post Selector' The selector of an individual post/product.
* 'Navigation Selector' The selector of the post/product navigation.
* 'Next Selector' The selector of the navigation next link.
* Choose a pagination type.
* Click 'Save Changes'.

### Multiple Settings

* Click 'Add New' at the top of the screen.
* Repeat the set up steps above and click 'Save Changes'.
* At the top of the screen you can navigate between your saved settings.

### Multiple Sets of Posts

It's possible to query and display multiple sets of posts in the same template and independently paginate them. This requires a specific set up within the template files which has been outlined [here](http://www.wordpress-ajax-pagination.com/multiple-posts-set-up).

### Delete Setting

* At the top of the screen select the pagination setting you wish to delete.
* Scroll to the bottom of the screen and click 'Delete'.

### Styling Load More Button

* The load more button is wrapped in a div with the css class .malinky-load-more and the button has the css class .malinky-load-more__button.
* Style these in your themes style.css file.

### Additional

* If using infinite scroll there is an option to amend the buffer in pixels before the next set of posts are loaded.
* If using load more button there is an option to amend the button text.
* You can choose your own preloader.gif.
* When using pagination the browser back and forward button still operate as expected.

## Installation

### Using the WordPress Dashboard

1. Click 'Add New' in the plugins dashboard.
2. Search for 'Ajax Pagination and Infinite Scroll'.
3. Click 'Install Now'.
4. Activate the plugin in the plugins dashboard.

### Upload in the WordPress Dashboard

1. Click 'Upload Plugin' in the plugins dashboard.
2. Choose 'malinky-ajax-pagination.zip' from your computer.
3. Click 'Install Now'.
4. Activate the plugin in the plugins dashboard.

### Upload With FTP

1. Upload the 'malinky-ajax-pagination' folder to the '/wp-content/plugins/' directory
2. Activate the plugin in the plugins dashboard.

## Screenshots

1. Admin screen.
2. Click 'Add New' for multiple pagination settings.
3. Navigate between multiple pagination settings.
4. Delete pagination setting.

## Changelog

### 1.1.0
* Independently paginate through multiple sets of posts.
* Fix duplicate page numbers being loaded when pagination option is used and the page contains more than one set of the same navigation.
* Fix issue where infinite scroll could fire twice and load the same posts.
* Allow the pagaintion of search page templates.
* Add Twenty Sixteen theme to list of defaults.
* Updates to admin button styles.

### 1.0.0
* Ajax Pagination and Infinite Scroll