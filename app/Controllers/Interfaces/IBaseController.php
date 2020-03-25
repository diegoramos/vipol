<?php
namespace App\Controllers\Interfaces;

interface IBaseController
{
    function index();
    function create();
    function list();
    function new();
    function edit($id);
    function show($id);
    function update($id);
    function delete($id);
}
