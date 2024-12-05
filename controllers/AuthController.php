<?php
class AuthController
{




    // đăng kí
    public function register()
    {

        $error = '';
        $message='';


        $categories = (new Category)->all();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = $_POST;
                // dd($data);
                $fullname = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        // mã hoá
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);

        

        // Kiểm tra các trường không được để trống
    if (empty($fullname) || empty($email) || empty($password) || empty($phone) || empty($address)) {
        $error = 'Tất cả các trường đều bắt buộc!';
    } else {

                     // đưa vào data
         $data['password'] = $password;


           // cho vào db
           (new User)->create($data);
                   // thoogn báo 
                   $message = "Đăng kí thành công";
                   header("Location: " . ROOT_URL . "?ctl=login");
                   die;
    }
        };

        return view('clients.users.register', compact('categories','error','message'));
    }

    // đăng nhập
    public function login()
    {

        $categories = (new Category)->all();

        // kiểm tra ngườ dùng đăngnhập chưa
        if (isset($_SESSION['user'])) {
            header("Location: " . ROOT_URL);
            die;
        }

        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = (new User)->findUserOfEmail($email);

            // kiểm tra 
            if ($user) {
                if (password_verify($password, $user['password'])) {

                    // đăng nhập thành công
                    $_SESSION['user'] = $user;


                    // nếu role= admin vào trang admin  , role =  user vào trang người dùng

                    if ($user['role'] == 'admin') {
                        header("Location: " . ADMIN_URL);
                        die;
                    } else {
                        header("Location: " . ROOT_URL);
                        die;
                    }
                } else {
                    $error = "Email hoặc mật khẩu không đúng";
                }
            } else {
                $error = "Email hoặc mật khẩu không đúng";
            }
        }


        $message = session_flash('message');


        return view('clients.users.login', compact('message', 'error', 'categories'));
    }


    // đăng xuất 
    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: ' . ROOT_URL . '?ctl=login');
        die;
    }





    public function index()
    {
        $users = (new User)->all();
        return view('admin.users.list', compact('users'));
    }

    public function updateActive()
    {
        $data = $_POST;

        $data['active'] = $data['active'] ? 0 : 1;

        (new User)->updateActive($data['id'], $data['active']);

        return header("Location: " . ADMIN_URL . '?ctl=listuser');
    }
}
