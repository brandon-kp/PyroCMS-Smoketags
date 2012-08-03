<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package         PyroCMS
 * @subpackage      Widgets
 * @author          PyroCMS Development Team
 *
 */

class Widget_Smoketags extends Widgets
{
    public $title       = array(
        'en' => 'Smoketags',
    );
    public $description = array(
        'en' => 'Configurable tag cloud for PyroCMS.',
    );
    public $author      = 'Brandon Probst';
    public $website     = 'http://brandonkprobst.com';
    public $version     = '1.0';
    
    public $fields = array(
        array(
            'field' => 'width',
            'label' => 'Width',
            'rules' => 'required',
        ),
        array(
            'field' => 'height',
            'label' => 'Height',
            'rules' => 'required',
        ),
        array(
            'field' => 'text_color',
            'label' => 'Text Color',
            'rules' => 'required',
        ),
        array(
            'field' => 'outline_color',
            'label' => 'Outline Color',
            'rules' => 'required',
        ),
        array(
            'field' => 'speed',
            'label' => 'Speed',
            'rules' => 'required',
        ),
        array(
            'field' => 'shape',
            'label' => 'Shape',
            'rules' => 'required',
        ),
        array(
            'field' => 'shadow',
            'label' => 'Text Shadow Color',
            'rules' => 'required',
        ),
    );

    public function run($options)
    {
        $this->load->model('keywords/keyword_m');

        $keywords   = $this->keyword_m->get_all();
        $cloud_tags = null;

        foreach($keywords as $keyword)
        {
            $keyword_slug  = str_replace(' ','-',$keyword->name);
            $cloud_tags   .= anchor('blog/tagged/'.$keyword_slug, 
                                     $keyword->name);
        }

        /* determine where smoketags is installed  so we can link to
           the .js files without relying on the user to copy them
        */
        if(is_dir(ADDONPATH.'widgets/smoketags/js'))
        {
            $js_path = base_url().ADDONPATH.'widgets/smoketags/js/';
        }
        elseif(is_dir(SHARED_ADDONPATH.'widgets/smoketags/js'))
        {
            $js_path = base_url().SHARED_ADDONPATH.'widgets/smoketags/js/';
        }
        else
        {
            $js_path = null;
        }

        return array(
            'width'         => $options['width'],
            'height'        => $options['height'],
            'text_color'    => $options['text_color'],
            'outline_color' => $options['outline_color'],
            'speed'         => $options['speed'],
            'shape'         => $options['shape'],
            'shadow'        => $options['shadow'],
            'cloud_tags'    => $cloud_tags,
            'js_path'       => $js_path,
        );
    }
}