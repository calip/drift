<?php
/**
 * Drift - Config
 * 
 * Drift is the easiest way to add free live chat to your site
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php 
global $HTMLHeader;
$script_src = CURRENT_SUBSITE_URL_PATH . '/blocks/drift/drift.admin.js';
$HTMLHeader->JAVASCRIPT($script_src);
?>
<h4><?= ___('Drift Settings') ?></h4>
<schlix-config:checkbox config-key="bool_enable_drift" label="<?= ___('Enable Drift') ?>" />
<schlix-config:textbox id="drift_id" config-key="str_drift_id" required="required" label="<?= ___('Drift ID') ?>"   />
<hr />
<strong><?= ___('Code Snippet') ?></strong>
<schlix-config:textarea id="code_snippet" config-key="str_code_snippet" style="min-height:100px" placeholder="{...}" />
<p><?= ___('Enter your Drift code snippet. you can find <a href="https://app.drift.com/settings2/widget" target="_blank">drift</a> here.') ?></p>