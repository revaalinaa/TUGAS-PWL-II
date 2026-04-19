<h1>Halaman Kontak</h1>

<form action="/kontak" method="POST">
    @csrf

    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Pesan:</label><br>
    <textarea name="pesan" rows="5" required></textarea><br><br>

    <button type="submit">Kirim</button>
</form>