<?php
namespace Block;
/**
 * Drift - Main Class
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
class Drift extends \SCHLIX\cmsBlock
{
    public function Run() {
        global $__drift_loaded;
        if ($__drift_loaded !== 'loaded') { // prevent the built-in duplicate blocks feature 
            $enable_drift = $this->config['bool_enable_drift'];
            $drift_id = $this->config['str_drift_id'];

            $__drift_loaded = 'loaded';
            $this->loadTemplateFile('view.block', compact(array_keys(get_defined_vars())));
        }
    }
}
