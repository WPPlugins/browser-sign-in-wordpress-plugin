=== Browser Sign In Wordpress Plugin ===
Contributors: stomlinson
Tags: signin, browserid, sessions api, mozilla
Requires at least: 3.2
Tested up to: 3.2.1
Stable tag: 0.0.1

Allows users to Sign In and Sign Out from in the browser using Mozilla's Session API.

== Description ==
This implements the experimental [Sessions API](https://wiki.mozilla.org/Identity/Verified_Email_Protocol/Session_API) being developed at Mozilla Labs.

The purpose of this plugin is to work with the [Browser Sign In Firefox Add-on](https://addons.mozilla.org/en-US/firefox/addon/browser-sign-in/) - [GitHub](https://github.com/mozilla/browserid_addon).  The Browser Sign In plugin looks for navigator.id.sessions.  If set to `[]`, the site signifies that it supports Sign In and Sign Out from within the browser.  If set to `[ {email: <username>} ]`, that user's name will be displayed in the URL bar.  

More information about Browser Sign In can be found at [Mozilla's Identity Site](http://identity.mozilla.com/post/8841090082/sign-into-websites-directly-from-your-browser-toolbar) and [Shane's Tutorial](http://www.shanetomlinson.com/2011/mozilla-session-api-tutorial/)

If you see any problems with this code, please contact me!

== Installation ==
1. Get `browser_sign_in.php`
2. Copy `browser_sign_in.php` to your Wordpress installation's `wp-content/plugins` directory.
3. Activate the plugin from the administrator control panel.

== Licensing ==
Licensed under MPL 1.1, GPL 2.0, LGPL 2.1.

== Author Info ==
* Written by Shane Tomlinson
* set117@yahoo.com
* stomlinson@mozilla.com
* @shane_tomlinson
* http://www.shanetomlinson.com

