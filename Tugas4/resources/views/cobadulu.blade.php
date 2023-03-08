<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="test2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<body>

<!-- navigation bar dibawah ini -->
    <div id="bgnav">
        <a href="#about">About Me</a>
        <a href="#hero" class="title"><i class="bi bi-code-square"></i>&nbsp;Personal Portofolio</a>
    </div>
<!-- sampai sini codingan navigation bar -->

<!-- kartu yang dijadikan background utama -->
    <div id="hero">
        <span class="hnamebox">
            <h1 class="heroname">Hello My Name
            <br><span id="name">
                @foreach ($dataDiri as $item)
                {{ $item->nama }}
                @endforeach
            </span> </h1>
        </span>
    </div>
<!-- selesai disini -->


<!-- kartu nama -->
    <section id=hoverabout></section>
    <section id="about">
        <h1 class="sAbout">About Me</h1>
        <br>
        <table id="namecard">
            <tr>
                <td>Name</td>
                <td>:</td>
                @foreach ($dataDiri as $item)
                    <td>{{ $item->nama }}</td>
                @endforeach
                <td rowspan="3"><img class="face" src="incPhotoMhs.png"></td>
            </tr>
            <tr>
                <td>Domicile</td>
                <td>:</td>
                @foreach ($dataDiri as $item)
                    <td>{{ $item->asal }}</td>
                @endforeach

            </tr>
            <tr>
                <td>DOB</td>
                <td>:</td>
                @foreach ($dataDiri as $item)
                    <td>{{ $item->tanggalLahir }}</td>
                @endforeach
            </tr>
        </table>
    </section>
<!-- kartu nama selesai disini -->
    <footer>
        <br>
        <br>
        <p>Dibuat Oleh @foreach ($dataDiri as $item)
            {{ $item->nama }}
            @endforeach</p>
        <br>
        <br>
    </footer>
</body>
<script src="script2.js"></script>
</html>

