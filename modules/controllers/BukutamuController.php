<?php
/**
 * @Author  : David Naista<davidnaista83@gmail.com>
 * @Date    : 12/15/15 - 12:58 AM
 */

use \modules\controllers\MainController;

class BukutamuController extends MainController {

    public function index() {

        $error      = array();
        $success    = null;

        $this->model('bukutamu');  // memanggil model bukutamu

        if($_SERVER["REQUEST_METHOD"] == 'POST') { // apabila ada form submit dengan method post, maka jalankan code ini

            $name       = isset($_POST["name"])     ? $this->validate($_POST["name"])    : "";
            $email      = isset($_POST["email"])    ? $this->validate($_POST["email"])   : "";
            $website    = isset($_POST["website"])  ? $this->validate($_POST["website"]) : "";
            $comment    = isset($_POST["comment"])  ? $this->validate($_POST["comment"]) : "";

            if(empty($name) || $name == "") {

                array_push($error, "Nama harus di isi.");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                array_push($error, "Format e-mail salah.");
            }
            if(empty($comment) || $comment == "") {

                array_push($error, "Komentar harus di isi.");
            }

            if(count($error) == 0) {

                $insert = $this->bukutamu->insert(array(
                    'full_name'      => $name,
                    'email'     => $email,
                    'website'   => $website,
                    'comment'  => $comment
                ));

                $success = "Data Berhasil di simpan";
            }
        }

        $bukutamu = $this->bukutamu->get();

        $total    = $this->bukutamu->rows();

        $this->template('bukutamu', array('error' => $error, 'success' => $success, 'bukutamu' => $bukutamu, 'total' => $total));
    }
}
?>