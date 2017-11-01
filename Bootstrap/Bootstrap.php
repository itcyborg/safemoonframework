<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/27/2017
 * Time: 9:27 AM
 */

/**
 * @param $viewName : Enter the name of the view without the .php extension
 * @param null $data
 * @return mixed
 */
function view($viewName, $data = null)
{
    return Views::view($viewName, $data);
}

/**
 * @param $partialName : Enter the name of the partial without the .php extension
 * @return mixed
 */
function partial($partialName)
{
    return Views::partial($partialName);
}

/**
 * @param $sectionName : Enter the name of the section
 */
function section($sectionName)
{
    return Views::section($sectionName);
}

/**
 * dump the data and exit. same as var_dump() then die();
 * displays the dump data beautifully for easier debugging.
 * @param $data
 */
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit;
}

/**
 * Better reference your assets in any view.
 * @param $asset
 * @return string
 */
function asset($asset)
{
    return AssetLoader::load($asset);
}

