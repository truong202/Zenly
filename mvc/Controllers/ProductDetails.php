<?php
class ProductDetails extends Controller
{
    public function Index()
    {
        $this->view('Layouts/MasterLayout', [
            'page' => 'ProductDetails'
        ]);
    }
}
