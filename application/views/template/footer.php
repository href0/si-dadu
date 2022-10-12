  <!-- /.card-body -->
  <!-- <div class="card-footer">
      Footer
  </div> -->
  <!-- /.card-footer-->
  <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; <?= date('Y') ?> <a href="https://adminlte.io">Padaidi Initiative</a>.</strong> Kami tidak pernah meragukan client meskipun permintaannya aneh-aneh.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <p id="columnDatatable" data-value="<?= $title ?>" hidden></p>
  </div>
  <!-- ./wrapper -->

  <!-- AdminLTE for demo purposes -->
  <!-- jQuery -->
  <!-- jQuery -->

  <script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/select2/js/select2.full.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('assets') ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/jquery-validation/additional-methods.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('assets') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets') ?>/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets') ?>/dist/js/demo.js"></script>

  <!-- DATEPICKER -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


  <?php if (($page == 'Kejuruan' && ($sub_page == 'Tambah' || $sub_page == 'Edit') || ($page == 'Satuan Kerja' && ($sub_page == 'Tambah' || $sub_page == 'Edit')))) : ?>
      <script>
          $(function() {
              //   $.validator.setDefaults({
              //       submitHandler: function() {
              //           return true
              //       }
              //   });
              let kej = false;
              let satker = false;
              <?php if ($page == "Kejuruan") : ?>
                  kej = true
              <?php endif ?>
              <?php if ($page == "Satuan Kerja") : ?>
                  satker = true
              <?php endif ?>
              $('#form').validate({
                  rules: {
                      kejuruan: {
                          required: kej,
                      },
                      satuan_kerja: {
                          required: satker,
                      },
                  },
                  messages: {
                      kejuruan: {
                          required: "Silahkan masukkan nama kejuruan",
                      },
                      satuan_kerja: {
                          required: "Silahkan masukkan nama satuan kerja",
                      },
                  },
                  errorElement: 'span',
                  errorPlacement: function(error, element) {
                      error.addClass('invalid-feedback');
                      element.closest('.form-group').append(error);
                  },
                  highlight: function(element, errorClass, validClass) {
                      $(element).addClass('is-invalid');
                  },
                  unhighlight: function(element, errorClass, validClass) {
                      $(element).removeClass('is-invalid');
                  }
              });
          });
      </script>

  <?php elseif (($page == 'Peserta' && $sub_page == 'Tambah') || ($page == 'Peserta' && $sub_page == 'Edit')) : ?>
      <script>
          $(function() {
              $('#form').validate({
                  rules: {
                      satuan_kerja: {
                          required: true,
                      },
                      //   kejuruan: {
                      //       required: kej,
                      //   },
                      pelatihan: {
                          required: true,
                      },
                      nik: {
                          required: true,
                      },
                      nama: {
                          required: true,
                      },
                      email: {
                          required: true,
                      },
                      no_hp: {
                          required: true,
                      },
                      jenis_kelamin: {
                          required: true,
                      },
                      kecamatan: {
                          required: true,
                      },
                      kelurahan: {
                          required: true,
                      },
                      rwdusun: {
                          required: true,
                      },
                      rt: {
                          required: true,
                      },
                      detail_alamat: {
                          required: true,
                      },
                      tgl_lahir: {
                          required: true,
                      },
                      pendidikan_terakhir: {
                          required: true,
                      },
                      tempat_lahir: {
                          required: true,
                      },
                  },
                  messages: {
                      nik: {
                          required: "Silahkan masukkan nik",
                      },
                      pelatihan: {
                          required: "Silahkan pilih pelatihan",
                      },
                      nama: {
                          required: "Silahkan masukkan nama lengkap",
                      },
                      email: {
                          required: "Silahkan masukkan email",
                      },
                      no_hp: {
                          required: "Silahkan masukkan nama no handphone / whatsapp",
                      },
                      jenis_kelamin: {
                          required: "Silahkan pilih jenis kelamin",
                      },
                      kecamatan: {
                          required: "Silahkan masukkan kecamatan",
                      },
                      kelurahan: {
                          required: "Silahkan masukkan kelurahan",
                      },
                      rwdusun: {
                          required: "Silahkan masukkan RW/Dusun",
                      },
                      rt: {
                          required: "Silahkan masukkan RT",
                      },
                      detail_alamat: {
                          required: "Silahkan masukkan alamat lengkap",
                      },
                  },
                  errorElement: 'span',
                  errorPlacement: function(error, element) {
                      error.addClass('invalid-feedback');
                      element.closest('.form-group').append(error);
                  },
                  highlight: function(element, errorClass, validClass) {
                      $(element).addClass('is-invalid');
                  },
                  unhighlight: function(element, errorClass, validClass) {
                      $(element).removeClass('is-invalid');
                  }
              });
          });
          $(document).ready(function() {

              checkPicture()

              function checkPicture() {
                  $(document).on('change', '#foto', function() {
                      // menghapus invalid-feedback saat upload file sudah benar
                      var value = document.getElementById('foto').val;
                      if (value != '') {
                          $('#foto').removeClass('is-invalid')
                      }
                      // check tipe file dan size
                      var property = document.getElementById('foto').files[0]
                      var image_name = property.name;
                      var image_extension = image_name.split('.').pop().toLowerCase();
                      // console.log(jQuery.inArray(image_extension, ['jpg'])) // cek value file ext yang di upload 0 / -1
                      var image_size = property.size;
                      if (jQuery.inArray(image_extension, ['jpg', 'jpeg', 'png']) == -1) {
                          alert('format foto hanya boleh jpg, jpeg, png')
                      } else if (image_size > 3670016) {
                          // 3.5MB
                          alert('Size foto maksimal 3MB')
                      } else {
                          // tampilkan gambar
                          // console.log('tampil')
                          var image = URL.createObjectURL(property)
                          // console.log(image)
                          var target = document.getElementById('preview_foto')
                          target.src = image
                      }
                  })
              }

              $("select#satker").change(function() {
                  //   alert($(this).children("option:selected").val())

                  //   $('.sub-category-i').attr('disabled', 'disabled')
                  const selectedSatuanKerja = $(this).children("option:selected").val();
                  if (selectedSatuanKerja == '1') {
                      $('.kejuruan').show()
                      $('.pelatihan').hide()

                  } else if (selectedSatuanKerja == 2) {
                      $('.pelatihan').show()
                      $('.kejuruan').hide()

                  }
                  //   // console.log(selectedCategory)
                  const action = 'satker'
                  $.ajax({
                      url: '<?= base_url('peserta/pilihpelatihan') ?>',
                      data: {
                          satuan_kerja_id: selectedSatuanKerja,
                          action
                      },
                      type: 'post',
                      success: function(result) {
                          // console.log(result)
                          if (selectedSatuanKerja == '1') {
                              $('#kej').html(result)
                          } else if (selectedSatuanKerja == '2') {
                              $('#pelatihan').html(result)
                          }
                      }
                  })
              });

              $("select#kej").change(function() {
                  const selectedKejuruan = $(this).children("option:selected").val();
                  const action = 'kejuruan'
                  $.ajax({
                      url: '<?= base_url('peserta/pilihpelatihan') ?>',
                      data: {
                          kejuruan_id: selectedKejuruan,
                          action
                      },
                      type: 'post',
                      success: function(result) {
                          // console.log(result)
                          $('.pelatihan').show()
                          $('#pelatihan').html(result)

                      }
                  })
              })

              $("select#kecamatan").change(function() {
                  //   return console.log($(this).children("option:selected").val())
                  const selected = $(this).children("option:selected").val();
                  const action = 'kelurahan'
                  $.ajax({
                      url: '<?= base_url('peserta/pilihkelurahan') ?>',
                      data: {
                          id_kecamatan: selected,
                          action
                      },
                      type: 'post',
                      success: function(result) {
                          //   return console.log(result)
                          //   $('.pelatihan').show()
                          $('#kelurahan').html(result)

                      }
                  })
              })

          })
      </script>

  <?php elseif ($page == 'Jenis Pelatihan' && $sub_page == 'Tambah') : ?>
      <script>
          $(document).ready(function() {
              $("select#satker").change(function() {
                  //   alert($(this).children("option:selected").val())

                  //   $('.sub-category-i').attr('disabled', 'disabled')
                  const selectedSatuanKerja = $(this).children("option:selected").val();
                  if (selectedSatuanKerja == '1') {
                      $('.kejuruan').show()
                  } else if (selectedSatuanKerja == '2') {
                      $('.kejuruan').hide()
                      $('#kej').val('')
                  }
                  // console.log(selectedCategory)
                  const action = 'satker'
                  $.ajax({
                      url: '<?= base_url('peserta/pilihpelatihan') ?>',
                      data: {
                          satuan_kerja_id: selectedSatuanKerja,
                          action
                      },
                      type: 'post',
                      success: function(result) {
                          $('#kej').html(result)
                      }
                  })
              });
          })
      </script>

  <?php elseif ($page == 'User' && $sub_page == 'Tambah') : ?>
      <script>
          $(function() {

              $('#form').validate({
                  rules: {
                      username: {
                          required: true,
                      },
                      password: {
                          required: true,
                      },
                      retype_password: {
                          equalTo: "#password",
                      },
                      nama: {
                          required: true,
                      },
                      email: {
                          required: true,
                          email: true,
                      },
                  },
                  messages: {
                      username: {
                          required: "Silahkan masukkan username",
                      },
                      password: {
                          required: "Silahkan masukkan password",
                      },
                      retype_password: {
                          equalTo: "Password tidak cocok",
                      },
                      email: {
                          required: "Silahkan pilih pelatihan",
                      },
                      nama: {
                          required: "Silahkan masukkan nama lengkap",
                      },
                      email: {
                          required: "Silahkan masukkan email",
                          email: "Silahkan masukkan format email yang benar",
                      },

                  },
                  errorElement: 'span',
                  errorPlacement: function(error, element) {
                      error.addClass('invalid-feedback');
                      element.closest('.form-group').append(error);
                  },
                  highlight: function(element, errorClass, validClass) {
                      $(element).addClass('is-invalid');
                  },
                  unhighlight: function(element, errorClass, validClass) {
                      $(element).removeClass('is-invalid');
                  }
              });
          });
      </script>
  <?php endif ?>
  <script>
      $(function() {
          $("#table").DataTable({
              "responsive": true,
              "lengthChange": false,
              "autoWidth": false,
              //   "buttons": ["excel", "pdf", "print"]
              "buttons": [{
                      extend: 'print',
                      title: 'SI Dadu | ' + '<?= $title   ?>',
                      //   exportOptions: {
                      //       columns: columns
                      //   }
                  },
                  {
                      extend: 'pdf',
                      title: '<?= $title   ?>',
                  },
                  {
                      extend: 'excel',
                      title: '<?= $title   ?>',
                  },
              ]
          }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');

      });
      $(document).ready(function() {
          $(function() {
              let currentDate = new Date();
              $("#datepicker").datepicker({
                  dateFormat: 'yy-mm-dd',
                  minDate: -7,
                  maxDate: currentDate
              });
              $('#datepicker').keyup(function() {
                  if (this.value.match(/[^0-9]/g)) {
                      this.value = this.value.replace(/[^0-9^-]/g, '');
                  }
              });
          });

          $(function() {
              let currentDate = new Date();
              //   console.log(currentDate)
              $("#tanggal_masuk").datepicker({
                  dateFormat: 'yy-mm-dd',
                  minDate: "2022-01-15",
                  maxDate: "2022-03-15",
              });
              $('#tanggal_masuk').keyup(function() {
                  if (this.value.match(/[^0-9]/g)) {
                      this.value = this.value.replace(/[^0-9^-]/g, '');
                  }
              });
          });
      })
  </script>
  </body>

  </html>