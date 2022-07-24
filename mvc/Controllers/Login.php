<?php
class Login extends Controller
{
    public function Index()
    {
        $this->view('Layouts/MasterLayout', [
            'page' => "Login"
        ]);
    }
}
