<div id="contact" class="col-lg-12">
  <div class="alert alert-success" style="display: none;"></div>
  <div class="alert alert-danger" style="display: none;"></div>

  <form id="contactForm" class="php-email-form">
    <div class="row gy-4">
      <div class="col-md-6">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
      </div>

      <div class="col-md-6 ">
        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
      </div>

      <div class="col-md-12">
        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
      </div>

      <div class="col-md-12">
        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
      </div>

      <div class="col-md-12 text-center">
        <div class="loading" style="display: none;">Loading</div>
        <button type="submit">Kirim Pesan</button>
      </div>
    </div>
  </form>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const loading = document.querySelector('.loading');
    const successAlert = document.querySelector('.alert-success');
    const errorAlert = document.querySelector('.alert-danger');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Reset alerts
      successAlert.style.display = 'none';
      errorAlert.style.display = 'none';
      loading.style.display = 'block';

      // Collect form data
      const formData = new FormData(form);

      fetch('<?= base_url('home/kirimemail') ?>', {
        method: 'POST',
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          loading.style.display = 'none';

          if (data.status) {
            successAlert.textContent = data.message;
            successAlert.style.display = 'block';
            form.reset();
          } else {
            errorAlert.textContent = data.message;
            errorAlert.style.display = 'block';
          }
        })
        .catch(error => {
          loading.style.display = 'none';
          errorAlert.textContent = 'An error occurred. Please try again later.';
          errorAlert.style.display = 'block';
        });
    });
  });
</script>