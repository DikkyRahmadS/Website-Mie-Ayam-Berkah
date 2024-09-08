<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		verify_session('admin');

		$this->load->model(array(
			'customer_model' => 'customer',
			'order_model' => 'order',
			'payment_model' => 'payment'
		));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$params['title'] = 'Kelola Pembayaran';

		$this->load->view('header', $params);
		$this->load->view('customers/customers');
		$this->load->view('footer');
	}

	public function view($id = 0)
	{
		if ($this->customer->is_customer_exist($id)) {
			$data = $this->customer->customer_data($id);

			$params['title'] = $data->name;

			$customer['customer'] = $data;
			$customer['flash'] = $this->session->flashdata('customer_flash');
			$customer['orders'] = $this->order->order_by($id);
			$customer['payments'] = $this->payment->payment_by($id);

			$this->load->view('header', $params);
			$this->load->view('customers/view', $customer);
			$this->load->view('footer');
		} else {
			show_404();
		}
	}

	public function add_new_customer()
	{
		$params['title'] = 'Tambah Customer Baru';

		$customer['flash'] = $this->session->flashdata('add_new_customer_flash');

		$this->load->view('header', $params);
		$this->load->view('customers/add_new_customer', $customer);
		$this->load->view('footer');
	}

	public function add_customer()
	{
		$this->form_validation->set_error_delimiters('<div class="form-error text-danger font-weight-bold">', '</div>');

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[16]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('name', 'Nama customer', 'trim|required|min_length[4]|max_length[255]');
		$this->form_validation->set_rules('phone_number', 'No Telephone', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[10]');
		$this->form_validation->set_rules('address', 'Alamat', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->add_new_customer();
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$name = $this->input->post('name');
			$phone_number = $this->input->post('phone_number');
			$email = $this->input->post('email');
			$address = $this->input->post('address');

			$password = password_hash($password, PASSWORD_BCRYPT);

			$config['upload_path'] = './assets/uploads/users/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 2048;

			$this->load->library('upload', $config);

			if (isset($_FILES['profile_picture']) && @$_FILES['profile_picture']['error'] == '0') {
				if (!$this->upload->do_upload('profile_picture')) {
					$error = array('error' => $this->upload->display_errors());

					show_error($error);
				} else {
					$upload_data = $this->upload->data();
					$file_name = $upload_data['file_name'];
				}
			}

			$user_data = array(
				'email' => $email,
				'username' => $username,
				'password' => $password,
				'role_id' => 2,
				'register_date' => date('Y-m-d H:i:s')
			);

			$user = $this->customer->add_new_user($user_data);

			$customer_data = array(
				'user_id' => $user,
				'name' => $name,
				'phone_number' => $phone_number,
				'address' => $address,
				'profile_picture' => $file_name
			);

			$this->customer->add_new_customer($customer_data);

			$this->session->set_flashdata('add_new_customer_flash', 'Costumer baru berhasil ditambahkan!');

			redirect('admin/customers/add_new_customer');
		}
	}

	public function edit($id = 0)
	{
		if ($this->customer->is_customer_exist($id)) {
			$data = $this->customer->get_profile($id);

			$params['title'] = 'Edit ' ;
			$customer['customer'] = $data;
			$customer['flash'] = $this->session->flashdata('edit_customer');

			$this->load->view('header', $params);
			$this->load->view('customers/edit_customer', $customer);
			$this->load->view('footer');
		}
	}

	public function edit_name()
	{
		$this->form_validation->set_rules('name', 'Nama lengkap', 'required|max_length[32]|min_length[4]');
		$this->form_validation->set_rules('phone_number', 'No Telephone', 'trim|required');
		$this->form_validation->set_rules('address', 'Alamat', 'required');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$this->edit($id);
		} else {
			$id = $this->input->post('id');
			$data = $this->customer->get_profile($id);
			$current_picture = $data->profile_picture;
			$data = new stdClass();

			$name = $this->input->post('name');
			$phone_number = $this->input->post('phone_number');
			$address = $this->input->post('address');

			$config['upload_path'] = './assets/uploads/users/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 2048;

			$this->load->library('upload', $config);


			if (isset($_FILES['profile_picture']) && @$_FILES['profile_picture']['error'] == '0') {
				if ($this->upload->do_upload('profile_picture')) {
					$upload_data = $this->upload->data();
					$new_file_name = $upload_data['file_name'];

					if ($this->customer->is_customer_have_image($id)) {
						$file = './assets/uploads/users/' . $current_picture;

						$file_name = $new_file_name;
						
					} else {
						$file_name = $new_file_name;
					}
				} else {
					show_error($this->upload->display_errors());
				}
			} else {
				$file_name = ($this->customer->is_customer_have_image($id)) ? $current_picture : NULL;
			}

			$customer_data = array(
				'user_id' => $id,
				'name' => $name,
				'phone_number' => $phone_number,
				'address' => $address,
				'profile_picture' => $file_name
			);

			$this->customer->update($id, $customer_data);

			$this->session->set_flashdata('edit_customer', 'Data customer berhasil diperbarui!');
			redirect('admin/customers');
			 //var_dump($customer_data);
		}
	}

	public function edit_account()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[16]|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'min_length[4]');

		if ($this->form_validation->run() === FALSE) {
			$id = $this->input->post('id');
			$this->edit($id);
		} else {
			$id = $this->input->post('id');
			$data = new stdClass();
			$customer = $this->customer->get_profile($id);

			$get_password = $this->input->post('password');

			if (empty($get_password)) {
				$password = $customer->password;
			} else {
				$password = password_hash($get_password, PASSWORD_BCRYPT);
			}

			$data->username = $this->input->post('username');
			$data->password = $password;


			$this->customer->update_account($id, $data);

			$this->session->set_flashdata('customer', $flash_message);
			$this->session->set_flashdata('show_tab', 'akun');

			redirect('admin/customers');
		}
	}

	public function edit_email()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[32]|min_length[10]');

		if ($this->form_validation->run() === FALSE) {
			$id = $this->input->post('id');
			$this->edit($id);
		} else {
			$id = $this->input->post('id');
			$data = new stdClass();

			$data->email = $this->input->post('email');

			$this->customer->update_account($id, $data);

			$this->session->set_flashdata('customer', $flash_message);
			$this->session->set_flashdata('show_tab', 'email');

			redirect('admin/customers');
		}
	}

	public function api($action = '')
	{
		switch ($action) {
			case 'customers':
				$customers = $this->customer->get_all_customers();

				$n = 0;
				foreach ($customers as $customer) {
					$customers[$n]->profile_picture = base_url('assets/uploads/users/' . $customer->profile_picture);

					$n++;
				}

				$customers['data'] = $customers;

				$response = $customers;
				break;
			case 'delete':
				$id = $this->input->post('id');

				$this->customer->delete_customer($id);

				$response = array('code' => 204);
				break;
		}

		$response = json_encode($response);
		$this->output->set_content_type('application/json')
			->set_output($response);
	}
}
