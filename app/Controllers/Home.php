<?php

namespace App\Controllers;

use App\Models\BaseModel;
use PharIo\Manifest\Url;
use App\Libraries\hash;

class Home extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('pages/index');
		echo view('templates/footer');
	}
	public function product()
	{
		echo view('templates/header');
		echo view('pages/product');
		echo view('templates/footer');
	}
	public function product_details()
	{
		echo view('templates/header');
		echo view('pages/product_details');
		echo view('templates/footer');
	}
	public function contact()
	{
		echo view('templates/header');
		echo view('pages/contact');
		echo view('templates/footer');
	}
	public function my_account()
	{
		echo view('templates/header');
		echo view('pages/my_account');
		echo view('templates/footer');
	}
	public function login()
	{
		echo view('templates/header');
		echo view('pages/login');
		echo view('templates/footer');
	}
	public function post_ad()
	{
		echo view('templates/header');
		echo view('pages/post_ad');
		echo view('templates/footer');
	}
	public function faq()
	{
		echo view('templates/header');
		echo view('pages/faq');
		echo view('templates/footer');
	}
	public function favourate_ad()
	{
		echo view('templates/header');
		echo view('pages/favourate_ad');
		echo view('templates/footer');
	}
	public function about()
	{
		echo view('templates/header');
		echo view('pages/about');
		echo view('templates/footer');
	}
	public function terms()
	{
		echo view('templates/header');
		echo view('pages/terms');
		echo view('templates/footer');
	}
	public function privacy()
	{
		echo view('templates/header');
		echo view('pages/privacy');
		echo view('templates/footer');
	}
	public function careers()
	{
		echo view('templates/header');
		echo view('pages/careers');
		echo view('templates/footer');
	}
	public function support()
	{
		echo view('templates/header');
		echo view('pages/support');
		echo view('templates/footer');
	}

	public function loginControl()
	{
		// $url = "http://api.vadalli.com/api/token";
		$session = session();
		$model = new \App\Models\BaseModel();
		$email = $this->request->getVar('name');
		$password = $this->request->getVar('password');
		$data = $model->where('username', $email)->first();
		if ($data) {
			$pass = $data['password'];
			$verify_pass = password_verify($password, $pass);
			if ($verify_pass) {
				$ses_data = [
					'access_token'   => $data['access_token'],
					'token_type'     => $data['token_type'],
					'expires_in'     => $data['expires_in']
				];
				$session->set($ses_data);
				// return redirect()->to('/dashboard');
				echo "Sucess 1";
			} else {
				$session->setFlashdata('msg', 'Wrong Password');
				// return redirect()->to('/login');
				echo "Error 1";
			}
		} else {
			$session->setFlashdata('msg', 'Username not Found');
			// return redirect()->to('/login');
			echo "Error 2";
		}
	}
	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}
}
