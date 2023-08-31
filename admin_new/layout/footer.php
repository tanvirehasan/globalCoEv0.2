        </div>
      </div>
    </div>
        <!-- ============= FOOTER ================= -->
        <footer class="footer">

          <script src="../assets/js/jquery.min.js"></script>
          <script src="../assets/js/bootstrap.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

          <script>
            $(document).ready(function() {
              $('#summernote').summernote({
                height: 600,
                codemirror: {
                  theme: 'monokai'
                }
              });
            });
          </script>


          <script>
            tinymce.init({
              selector: 'textarea#texteditro',
              height: 800,
              plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
              toolbar: 'insertfile blocks fontfamily fontsize forecolor backcolor | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
          </script>

        </footer>
        </body>
      </html>