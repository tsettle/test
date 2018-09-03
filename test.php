<?php
require_once __DIR__.'/bootstrap.php';

use Scanner\Device;
use Scanner\CIDR;

print_r(CIDR::cidrToRange("192.168.24.0/27"));

// print_r(get_declared_classes());
