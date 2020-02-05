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
class Drift
{
    constructor()
    {
        this.timeout= 1000;
        this.timer= null;
        SCHLIX.Event.onDOMReady(this.onDOMReady, this, true);
    }
    
    onDOMReady()
    {   
        SCHLIX.Event.on('code_snippet', 'input', this.onCodeSnippetChange, this, true);
    }
    
    onCodeSnippetChange(e)
    {
        clearTimeout(this.timer);
        this.timer = setTimeout(function () {
            var code_snippet = SCHLIX.Dom.get('code_snippet').value;
            var js_pattern = /drift.load\('(.*)'\)/;
            var drift_id = code_snippet.split(js_pattern)[1];
            if (drift_id !== undefined)
            {   
                SCHLIX.Dom.get('drift_id').value = drift_id;
                SCHLIX.Dom.get('code_snippet').value = "";
                SCHLIX.Alert.info('Drift ID updated'); 
            } 
            else 
            {
                SCHLIX.Alert.error('Some form field values are invalid');
            }
        }, this.timeout);
    }
    
}

var __drift = new Drift();