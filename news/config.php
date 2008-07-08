<?php
//  ------------------------------------------------------------------------ //
//                  Copyright (c) 2005-2006 Instant Zero                     //
//                     <http://xoops.instant-zero.com/>                      //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
$cfg = array();
/**
 * How many items do you want to display in the Summary table visible in the article's page ?
 */
$cfg['article_summary_items_count'] = isset($xoopsModuleConfig['storyhome']) ? $xoopsModuleConfig['storyhome'] : 10;

/**
 * Auto generate meta keywords ?
 */
$cfg['meta_keywords_auto_generate'] = true;

/**
 * Number of meta keywords generated by the module (it's just a default value)
 */
$cfg['meta_keywords_count'] = 200;

/**
 * Default's order of keywords (it's just a default value)
 */
$cfg['meta_keywords_order'] = 0;


/**
 * Does the module searches inside its own comments ?
 */
 $cfg['config_search_comments'] = true;

/**
 * Only enable registred users to rate news ?
 */
$cfg['config_rating_registred_only'] = false;

/**
 * Maximum number of users before to replace the users list with a simple text box where you have to type the author's ID ?
 */
$cfg['config_max_users_list'] = 300;

/**
 * Use the "fun" menu for the module's administration ?
 */
$cfg['use_fun_menu'] = true;

/**
 * Create a clickable path from the root to the current topic (if we are viewing a topic) ?
 */
$cfg['create_clickable_path'] = false; 

?>
