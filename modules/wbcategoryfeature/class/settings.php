<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

require_once(dirname(__FILE__).'/../../../config/config.inc.php');
require_once(dirname(__FILE__).'/../wbcategoryfeature.php');
$m = new WbCategoryFeature();
$context = Context::getContext();
$root_category = $context->shop->getCategory();
$fields_form = array(
    'legend' => array(
        'title' => $m->l('Settings-Only Show Parent Category.'),
        'icon' => 'icon-cogs'
    ),
    'input' => array(
        array(
            'type'  => 'categories',
            'label' => $m->l('Check Categories'),
            'name'  => 'config[category]',
            'tree'  => array(
                'id'      => 'categories-tree',
                'selected_categories' => (array)$m->selected_category,
                'disabled_categories' => null,
                'use_checkbox' => 1,
                'root_category' => $root_category
            )
        ),
    ),
    'submit' => array(
        'title' => $m->l('Save'),
    )
);
