<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{

    function homeRelocation()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "home_relocation";
    echo Modules::run('template/layout2', $data);
}

function office()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "office";
    echo Modules::run('template/layout2', $data);
}

function car()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "car";
    echo Modules::run('template/layout2', $data);
}

function bike()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "bike";
    echo Modules::run('template/layout2', $data);
}

function warehousing()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "warehousing";
    echo Modules::run('template/layout2', $data);
}

function iba()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "iba";
    echo Modules::run('template/layout2', $data);
}


function bill()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "bill";
    echo Modules::run('template/layout2', $data);
}

function loading()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "loading";
    echo Modules::run('template/layout2', $data);
}


}