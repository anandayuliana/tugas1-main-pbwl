<style>
        .info {
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Dashboard</h2>

    <div class="info" id="welcome-message">Selamat datang</div><br>

    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Tambahkan nol di depan angka jika kurang dari 10
            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            var timeString = hours + ":" + minutes + ":" + seconds;

            document.getElementById("welcome-message").innerHTML = "Selamat datang <br><br> Jam: " + timeString;
        }

        // Panggil fungsi updateClock setiap detik
        setInterval(updateClock, 1000);

        // Panggil fungsi untuk pertama kali saat halaman dimuat
        updateClock();
    </script>