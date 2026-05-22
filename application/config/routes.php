<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';
$route["photo-gallery"]="gallery/photo_gallery";
$route["video-gallery"]="gallery/video_gallery";
$route["(:any).htm"]="home/error";
$route["about"]="about/about";
$route["why-choose-us"]="about/choose";
$route["testimonials"]="about/testimonials";
$route["faqs"]="about/faqs";
$route["moving-tips"]="about/moving_tips";
$route["terms-conditions"]="about/terms";
$route["privacy-policy"]="about/privacy";
$route["contacts"]="contacts/contacts";

$route['location'] = 'packers_movers/state';
$route["packers-movers-(:any)-india"]="packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"]="packers_movers/city/$2/$1";
$route["bihar"]="packers_movers/state_services/bihar";
$route["maharashtra"]="packers_movers/state_services/maharashtra";
$route["delhi"]="packers_movers/state_services/delhi";
$route["uttarpradesh"]="packers_movers/state_services/uttarpradesh";
$route["punjab"]="packers_movers/state_services/punjab";
$route["services/household-shifting"] = "services/household_shifting";
$route["services/office-relocation"] = "services/office_relocation";
$route["services/vehicle-transport"] = "services/vehicle_transport";
$route["services/packing-unpacking"] = "services/packing_unpacking";
$route["services/loading-unloading"] = "services/loading_unloading";
$route["services/storage-solutions"] = "services/storage_solutions";
$route["services/local-shifting"] = "services/local_shifting";
$route["services/domestic-shifting"] = "services/domestic_shifting";

$route["gallery"] = "gallery/photo_gallery";
$route["branches"] = "packers_movers/state";
$route["blog"] = "blog/index";
$route["process"] = "process/index";

$route['translate_uri_dashes'] = TRUE;