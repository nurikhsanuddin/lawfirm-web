<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //load model
    $this->load->model('M_berita');
    $this->load->model('M_kategori');
    $this->load->model('M_layanan');
    $this->load->model('M_setting');
    $this->load->model('M_staff');
    $this->load->model('M_portfolio');
    $this->load->model('M_client');
    $this->load->model('M_dashboard');
    require_once FCPATH . 'vendor/autoload.php';
  }
  public function kirimemail()
  {
    header('Content-Type: application/json');

    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('subject', 'Subject', 'required|trim');
    $this->form_validation->set_rules('message', 'Message', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      echo json_encode([
        'status' => false,
        'message' => validation_errors()
      ]);
      return;
    }

    $mail = new PHPMailer(true);
    try {
      $this->load->config('mailconfig');

      $mail->isSMTP();
      $mail->Host = $this->config->item('smtp_host');
      $mail->SMTPAuth = true;
      $mail->Username = $this->config->item('smtp_user');
      $mail->Password = $this->config->item('smtp_pass');
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port = $this->config->item('smtp_port');

      // Get form data
      $senderName = htmlspecialchars($this->input->post('name'));
      $senderEmail = $this->input->post('email');
      $subject = htmlspecialchars($this->input->post('subject'));
      $message = nl2br(htmlspecialchars($this->input->post('message')));

      // Email template for admin
      $adminMessageBody = "
  <!DOCTYPE html>
  <html>
  <head>
      <style>
          body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
          .header { background: #003366; color: white; padding: 15px; text-align: center; border-radius: 5px 5px 0 0; }
          .content { padding: 20px; }
          .footer { background: #f5f5f5; padding: 15px; text-align: center; font-size: 12px; }
      </style>
  </head>
  <body>
      <div class='container'>
          <div class='header'>
              <h2>Pesan Baru dari Form Kontak</h2>
          </div>
          <div class='content'>
              <p><strong>Nama:</strong> {$senderName}</p>
              <p><strong>Email:</strong> {$senderEmail}</p>
              <p><strong>Subjek:</strong> {$subject}</p>
              <p><strong>Pesan:</strong></p>
              <p>{$message}</p>
          </div>
          <div class='footer'>
              <p>Email ini dikirim dari form kontak di website Anda</p>
          </div>
      </div>
  </body>
  </html>";

      // Send to admin
      $mail->clearAddresses();
      $mail->setFrom($senderEmail, $senderName);
      // Add these lines:
      $mail->addAddress('admin@mtplawfirm.com'); // Replace with actual admin email
      $mail->isHTML(true);
      $mail->Subject = 'Pesan Baru dari Form Kontak: ' . $subject;
      $mail->Body = $adminMessageBody;

      if (!$mail->send()) {
        log_message('error', 'Mailer Error: ' . $mail->ErrorInfo);
        throw new Exception('Email could not be sent to admin');
      }

      // Email template for sender
      $userMessageBody = "
  <!DOCTYPE html>
  <html>
  <head>
      <style>
          body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
          .header { background: #003366; color: white; padding: 15px; text-align: center; border-radius: 5px 5px 0 0; }
          .content { padding: 20px; }
          .footer { background: #f5f5f5; padding: 15px; text-align: center; font-size: 12px; }
          .contact-info { background: #e9ecef; padding: 15px; margin: 15px 0; border-radius: 5px; }
          .whatsapp-button { display: inline-block; padding: 10px 20px; color: white; background-color: #25D366; border-radius: 5px; text-decoration: none; }
      </style>
  </head>
  <body>
      <div class='container'>
          <div class='header'>
              <h2>Terima Kasih Telah Menghubungi MT&P Law Firm</h2>
          </div>
          <div class='content'>
              <p>Yth. {$senderName},</p>
              <p>Terima kasih telah menghubungi MT&P Law Firm. Kami telah menerima pesan Anda dan akan segera merespon pertanyaan Anda.</p>
              
              <div class='contact-info'>
                  <p><strong>Butuh bantuan segera?</strong></p>
                  <p>Silakan hubungi kami melalui WhatsApp dengan mengklik tombol di bawah ini:</p>
                  <a href='https://wa.me/628122961011' class='whatsapp-button'>Hubungi via WhatsApp</a>
              </div>

              <p><strong>Detail pesan Anda:</strong></p>
              <p><strong>Subjek:</strong> {$subject}</p>
              <p><strong>Pesan:</strong></p>
              <p>{$message}</p>
          </div>
          <div class='footer'>
              <p>Salam hormat,<br>Tim MT&P Law Firm</p>
          </div>
      </div>
  </body>
  </html>";

      // Send to user
      $mail->clearAddresses();
      $mail->setFrom('mtp@projectmaster.id', 'MT&P Law Firm');
      $mail->addAddress($senderEmail);
      $mail->Subject = "Terima Kasih Telah Menghubungi MT&P Law Firm";
      $mail->Body = $userMessageBody;
      $mail->send();

      echo json_encode([
        'status' => true,
        'message' => 'Pesan Anda telah berhasil dikirim!'
      ]);
    } catch (Exception $e) {
      echo json_encode([
        'status' => false,
        'message' => "Pesan tidak dapat dikirim. Error: {$mail->ErrorInfo}"
      ]);
    }
  }
  public function index()
  {
    // LOAD FUNCTION DARI MODEL
    $berita = $this->M_berita->recent_berita();
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_setting->daftar();
    $staff = $this->M_staff->daftar();
    $portfolio = $this->M_portfolio->daftar();
    $client = $this->M_client->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title' => $title,
      'isi' => 'front-end/v_home',
      'layanan' => $layanan,
      'setting' => $setting,
      'berita' => $berita,
      'staff' => $staff,
      'portfolio' => $portfolio,
      'client' => $client,
      'image' => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function blog()
  {

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    // LOAD FUNCTION DARI MODEL
    $berita = $this->M_berita->daftar();
    $lastst_berita = $this->M_berita->lastst_berita();
    $kategori = $this->M_kategori->daftarKategoriBerita();
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title' => $title,
      'subtitle' => 'Blog',
      'isi' => 'front-end/v_blog',
      'berita' => $berita,
      'kategori' => $kategori,
      'lastst_berita' => $lastst_berita,
      'layanan' => $layanan,
      'setting' => $setting,
      'image' => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function detail($slug_berita)
  {
    // LOAD FUNCTION DARI MODEL
    $lastst_berita = $this->M_berita->lastst_berita();
    $berita = $this->M_berita->read($slug_berita);
    $layanan = $this->M_layanan->daftar();
    $kategori = $this->M_kategori->daftarKategoriBerita();
    $setting = $this->M_setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title' => $berita->judul_berita,
      'isi' => 'front-end/v_blog_detail',
      'layanan' => $layanan,
      'berita' => $berita,
      'kategori' => $kategori,
      'lastst_berita' => $lastst_berita,
      'setting' => $setting,
      'image' => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function detailLayanan($slug_layanan)
  {

    // LOAD FUNCTION DARI MODEL
    $detail = $this->M_layanan->read($slug_layanan);
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title' => $detail->judul_layanan,
      'isi' => 'front-end/v_layanan_detail',
      'layanan' => $layanan,
      'detail' => $detail,
      'setting' => $setting,
      'image' => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function portfolioDetail($slug_portfolio)
  {

    // LOAD FUNCTION DARI MODEL
    $berita = $this->M_berita->recent_berita();
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $staff = $this->M_staff->daftar();
    $portfolio = $this->M_portfolio->read($slug_portfolio);

    $data = array(
      'title' => $portfolio->judul_portfolio,
      'isi' => 'front-end/v_portfolio_detail',
      'layanan' => $layanan,
      'setting' => $setting,
      'berita' => $berita,
      'staff' => $staff,
      'portfolio' => $portfolio,
      'image' => $image,

    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }





}
