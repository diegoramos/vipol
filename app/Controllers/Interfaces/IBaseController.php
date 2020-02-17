<?php
namespace App\Controllers\Interfaces;

interface IBaseController
{
    function index();
    function create();
    function edit($id);
    function show($id);
    function update($id);
    function delete($id);
}
