<?php
/**
 * Created by PhpStorm.
 * User: rhutterer
 * Date: 23.07.14
 * Time: 14:16
 */

$installer = $this;
$installer->startSetup();
//this SQL-Statement will delete all things from RicoNeitzel Paymentfilters
$installer->run("
  DELETE FROM `eav_attribute` WHERE attribute_code = 'product_payment_methods';
  DELETE FROM `core_resource` WHERE code = 'payfilter_setup';
  ALTER TABLE `customer_group` DROP COLUMN `allowed_payment_methods`;
  ");

$installer->endSetup();