<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{

    function index()
    {
        $data['title'] = "About Us | Tranways India Packers and Movers";
        $data['description'] = "Learn about Tranways India, the most reliable and trusted name in domestic and home relocation services across India with IBA approval.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | Tranways India Packers and Movers";
        $data['description'] = "Discover why thousands of customers trust Tranways India for their moving needs. 100% safe, certified packing, and on-time shifting care.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }
    
    function testimonials()
    {
        $data['title'] = "Customer Testimonials & Reviews | Tranways India";
        $data['description'] = "Read honest reviews and ratings from our happy customers who experienced stress-free relocation services with Tranways India.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions | Tranways India";
        $data['description'] = "Find answers to all your questions about packing, shifting, vehicle transport, and home relocation with Tranways India Packers and Movers.";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function moving_tips()
    {
        $data['title'] = "Expert Shifting & Moving Tips | Tranways India";
        $data['description'] = "Get expert moving guides and step-by-step checklists to make your relocation process smooth, safe, and stress-free.";
        $data['module'] = "about";
        $data['view_file'] = "moving_tips";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | Tranways India";
        $data['description'] = "Review the terms and conditions, shifting policies, carrier liabilities, and payment guidelines for Tranways India Packers and Movers.";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | Tranways India";
        $data['description'] = "Read about how we collect, protect, and handle your personal data when using relocation services with Tranways India Packers and Movers.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }
}
