<?php
class Register extends Controller
{
    public function Index()
    {
        $this->view('/Layouts/MasterLayout', [
            'page' => 'Register'
        ]);
    }
}
