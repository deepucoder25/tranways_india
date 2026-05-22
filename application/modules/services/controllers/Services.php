<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{

 function index()
    {
        $data['title'] = "Best Packers and Movers Services | Comprehensive Relocation Solutions";
        $data['description'] = "Explore our wide range of professional packing and moving services. We offer household shifting, office relocation, vehicle transport, and secure storage solutions.";
        $data['module'] = "services";
        $data['view_file'] = "service";
        echo Modules::run('template/layout2', $data);
    }
function household_shifting()
{
    $data['title'] = "Best Household Shifting Services | Safe Home Relocation";
    $data['description'] = "Looking for secure household shifting? We offer top-rated, hassle-free home relocation services with professional packing, loading, and safe transit.";
    $data['module'] = "services";
    $data['view_file'] = "household_shifting";
    echo Modules::run('template/layout2', $data);
}

function office_relocation()
{
    $data['title'] = "Corporate Office Relocation Services | Secure Commercial Shifting";
    $data['description'] = "Expert office relocation services designed for zero downtime. Fast, secure, and professional commercial moving solutions for businesses of all sizes.";
    $data['module'] = "services";
    $data['view_file'] = "office_relocation";
    echo Modules::run('template/layout2', $data);
}

function vehicle_transport()
{
    $data['title'] = "Safe Vehicle Transport Services | Car & Bike Carrier Solutions";
    $data['description'] = "Reliable vehicle transport services across India. We ensure secure, damage-free car and bike transportation with our specialized enclosed carriers.";
    $data['module'] = "services";
    $data['view_file'] = "vehicle_transport";
    echo Modules::run('template/layout2', $data);
}

function packing_unpacking()
{
    $data['title'] = "Professional Packing and Unpacking Services | Safe Moving";
    $data['description'] = "Hire experts for packing and unpacking services. We use premium packaging materials to ensure your fragile and valuable items are completely safe.";
    $data['module'] = "services";
    $data['view_file'] = "packing_unpacking";
    echo Modules::run('template/layout2', $data);
}

function loading_unloading()
{
    $data['title'] = "Expert Loading and Unloading Services | Safe Handling";
    $data['description'] = "Fast and secure loading and unloading services by trained professionals. We handle your heavy furniture and delicate items with extreme care.";
    $data['module'] = "services";
    $data['view_file'] = "loading_unloading";
    echo Modules::run('template/layout2', $data);
}

function storage_solutions()
{
    $data['title'] = "Secure Storage & Warehousing Solutions | Safe Goods Storage";
    $data['description'] = "Need temporary or long-term storage? Our secure, climate-controlled warehousing solutions offer 24/7 CCTV surveillance for your valuable goods.";
    $data['module'] = "services";
    $data['view_file'] = "storage_solutions";
    echo Modules::run('template/layout2', $data);
}

function local_shifting()
{
    $data['title'] = "Fast Local Shifting Services | Trusted Movers in Your City";
    $data['description'] = "Looking for quick local shifting? Get affordable, same-day local packers and movers services for a smooth and hassle-free relocation within your city.";
    $data['module'] = "services";
    $data['view_file'] = "local_shifting";
    echo Modules::run('template/layout2', $data);
}

function domestic_shifting()
{
    $data['title'] = "Nationwide Domestic Shifting | Trusted Interstate Movers";
    $data['description'] = "Premium domestic shifting services across India. We provide safe, door-to-door interstate relocation with real-time tracking and zero-damage guarantees.";
    $data['module'] = "services";
    $data['view_file'] = "domestic_shifting";
    echo Modules::run('template/layout2', $data);
}

}