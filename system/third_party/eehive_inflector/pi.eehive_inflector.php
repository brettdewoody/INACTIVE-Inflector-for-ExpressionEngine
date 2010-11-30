<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
  'pi_name' => 'EE Hive - Inflector',
  'pi_version' => '1.0',
  'pi_author' => 'Brett DeWoody - EE Hive',
  'pi_author_url' => 'http://www.ee-hive.com/inflector',
  'pi_description' => 'Allows you to change words to plural, singular, camel case, etc',
  'pi_usage' => Eehive_inflector::usage()
  );

/**
 * Inflecto Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			Brett DeWoody - EE Hive
 * @copyright		Copyright (c) 2010, Brett DeWoody
 * @link			http://www.ee-hive.com/inflector
 */

class Eehive_inflector
{

	// --------------------------------------------------------------------

	/**
	 * Inflector
	 *
	 * This function returns a list of members
	 *
	 * @access	public
	 * @return	string
	 */

  function singular() {
    $this->EE =& get_instance();
	
	$this->EE->load->helper('inflector');
    
	return singular($this->EE->TMPL->tagdata);
  }
  
  
  
  function plural() {
    $this->EE =& get_instance();
	
	$this->EE->load->helper('inflector');
    
	return plural($this->EE->TMPL->tagdata);
  }
  
  
  function camelize() {
    $this->EE =& get_instance();
	
	$this->EE->load->helper('inflector');
    
	return camelize($this->EE->TMPL->tagdata);
  }
  
  
  function underscore() {
    $this->EE =& get_instance();
	
	$this->EE->load->helper('inflector');
    
	return underscore($this->EE->TMPL->tagdata);
  }
  
  
  function humanize() {
    $this->EE =& get_instance();
	
	$this->EE->load->helper('inflector');
    
	return humanize($this->EE->TMPL->tagdata);
  }

	// --------------------------------------------------------------------

	/**
	 * Usage
	 *
	 * This function describes how the plugin is used.
	 *
	 * @access	public
	 * @return	string
	 */
	
  //  Make sure and use output buffering

  function usage()
  {
  ob_start(); 
  ?>
Provides several function so change words to plural, singular, camel case, etc.
This plugin is based on CodeIgniter's Inflector helper.
(http://codeigniter.com/user_guide/helpers/inflector_helper.html)

There are 5 functions:

{exp:eehive_inflector:singular}
Changes a plural word to singular.

{exp:eehive_inflector:plural}
Changes a singular word to plural.

{exp:eehive_inflector:camelize}
Changes a string of words separated by spaces or underscores to camel case.

{exp:eehive_inflector:underscore}
Takes multiple words separated by spaces and underscores them.

{exp:eehive_inflector:humanize}
Takes multiple words separated by underscores and adds spaces between them.

To use the functions above simply wrap your text in the appropriate
tag. Like this:

{exp:eehive_inflector:singular}Your contents{/exp:eehive_inflector:singular}

The above would singularize "Your contents" and return "your content". 

  <?php
  $buffer = ob_get_contents();
	
  ob_end_clean(); 

  return $buffer;
  }
  // END

}
/* End of file pi.eehive_inflector.php */ 
/* Location: ./system/expressionengine/third_party/eehive_inflector/pi.eehive_inflector.php */ 