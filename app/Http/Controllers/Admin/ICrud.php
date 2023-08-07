<?php

namespace App\Http\Controllers\Admin;

interface ICrud
{
    public function index();

    public function create();

    public function store();

    public function edit($id);

    public function update($id);

    public function destroy($id);
}
