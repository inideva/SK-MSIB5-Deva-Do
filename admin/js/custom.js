// <!-- Script Form Validtion -->

$("#form-tambah").validate({
  rules: {
    nama: {
      minLength: 2,
    },
    detail: {
      minLength: 10,
      detail: true,
    },
    harga: {
      minlength: 3,
    },
    kategori: {
      kategori: true,
    },
  },
  messages: {
    nama: {
      required: "Masukkan nama produk!",
      minlength: "Masukkn lebih dari 2 karakter!",
    },
    detail: {
      required: "Tolong diisi!",
    },
    harga: {
      required: "Masukkan jumlah harga!",
    },
    kategori: {
      required: "Pilih kategori!",
    },
  },

  submitHandler: function (form) {
    form.submit();
  },
});


