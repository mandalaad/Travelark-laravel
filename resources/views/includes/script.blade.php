 <!-- Font Awesome Script -->
 <script src="https://kit.fontawesome.com/8a9d142db2.js" crossorigin="anonymous"></script>

 <!-- Bootstrap Script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

 {{-- javascript --}}
 <script>
    const ChangeImage = src => {
      document.getElementById('imgFluid').src = src;
    };

    const button1 = document.getElementById('btn1');
    const button2 = document.getElementById('btn2');
    const text1 = document.getElementById('collapseExample');
    const text2 = document.getElementById('collapseExample2');

    button1.onclick = function () {
      text1.style.display = 'block';
      text2.style.display = 'none';
    };
    button2.onclick = function () {
      text2.style.display = 'block';
      text1.style.display = 'none';
    };
  </script>
