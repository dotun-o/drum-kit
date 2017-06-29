<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <script src="scripts/main.js"></script>

    <link id="main-stylesheet" href="styles/main.css" rel="stylesheet">

    <title>Drum Pads</title>
</head>

<body>
<h1>DRUM PAD</h1>
<p>
    Press matching keys on keyboard<br>
    (or click/tap buttons)
</p>

<div id="console">
    <button data-name="clap" data-key="65">
        <span class="key">A</span>
        <span class="name">CLAP</span>
    </button>
    <button data-name="hihat" data-key="83">
        <span class="key">S</span>
        <span class="name">HIHAT</span>
    </button>
    <button data-name="kick" data-key="68">
        <span class="key">D</span>
        <span class="name">KICK</span>
    </button>
    <button data-name="openhat" data-key="70">
        <span class="key">F</span>
        <span class="name">OPENHAT</span>
    </button>
    <button data-name="boom" data-key="71">
        <span class="key">G</span>
        <span class="name">BOOM</span>
    </button>
    <button data-name="ride" data-key="72">
        <span class="key">H</span>
        <span class="name">RIDE</span>
    </button>
    <button data-name="snare" data-key="74">
        <span class="key">J</span>
        <span class="name">SNARE</span>
    </button>
    <button data-name="tom" data-key="75">
        <span class="key">K</span>
        <span class="name">TOM</span>
    </button>
    <button data-name="tink" data-key="76">
        <span class="key">L</span>
        <span class="name">TINK</span>
    </button>
</div>

<audio src="audio/clap.wav"></audio>
<audio src="audio/hihat.wav"></audio>
<audio src="audio/kick.wav"></audio>
<audio src="audio/openhat.wav"></audio>
<audio src="audio/boom.wav"></audio>
<audio src="audio/ride.wav"></audio>
<audio src="audio/snare.wav"></audio>
<audio src="audio/tom.wav"></audio>
<audio src="audio/tink.wav"></audio>

<p>by <a href='http://code.dotun.me/' target='_blank'>Dotun</a></p>
</body>
</html>