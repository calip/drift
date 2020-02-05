<?php
/**
 * Drift - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * Drift is the easiest way to add free live chat to your site
 * 
 * @copyright 2020 Beplas Studio
 *
 * @license MIT
 *
 * @package drift
 * @version 1.0.2
 * @author  Beplas Studio <alip@beplasstudio.com>
 * @link    https://beplasstudio.com/
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($enable_drift): ?>
    <?php if ($drift_id): ?>
        <!-- Start of Async Drift Code -->
        <script>
        "use strict";
        !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
                t.factory = function(e) {
                return function() {
                                    var n = Array.prototype.slice.call(arguments);
                                    return n.unshift(e), t.push(n), t;
                                };
                            }, t.methods.forEach(function (e) {
                        t[e] = t.factory(e);
                    }), t.load = function (t) {
                        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                        var i = document.getElementsByTagName("script")[0];
                        i.parentNode.insertBefore(o, i);
                    };
                }
            }();
            drift.SNIPPET_VERSION = '0.3.1';
            drift.load('<?= ___h($drift_id) ?>');
        </script>
        <!-- End of Async Drift Code -->
    <?php else: ?>
        <!-- NOTE - drift was not set up correctly - please add code snippet -->
        <script>console.error("Drift has not been set from configuration");</script>
    <?php endif ?>
<?php endif ?>