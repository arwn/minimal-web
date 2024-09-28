<!DOCTYPE html>
<html>

<head>
    <title>My Site * arwn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="static/js/htmx.min.js"></script>
    <link rel="stylesheet" href="static/css/spectre.min.css">
    <link rel="stylesheet" href="static/css/spectre-exp.min.css">
    <link rel="stylesheet" href="static/css/spectre-icons.min.css">
    <link rel="stylesheet" href="static/css/my.css">
</head>

<body class="col-6 container flex-centered">
    <div class="column">
        <h1>this is a website</h1>
        <hr />
        <h2 class="">This is the main text</h2>
        <p>Zebra shark tenuis swordfish pygmy sunfish sailfish oilfish thornfish burrowing goby algae eater atka
            mackerel, molly, arrowtooth eel? Trumpeter yellowfin cutthroat trout bangus pike eel opaleye coolie loach
            ribbon sawtail fish. Handfish redside African glass catfish Alaska blackfish emperor bream bamboo shark,
            "shark nurse shark." Mullet loach orangespine unicorn fish molly catla halfbeak Manta Ray angler catfish
            Celebes rainbowfish--goatfish arrowtooth eel.</p>

        <cite>“I am a woman. Every artist is a woman and should have a taste for other women. Artists who are
            homosexual cannot be true artists because they like men, and since they themselves are women they are
            reverting to normality.” - <mark> Pablo Picasso</mark></cite>

        <p class="pt-2">
            You can click this button to get system information. You can also hit <kbd>tab</kbd> and then hit
            <kbd>return</kbd>.
            <button hx-get="/php/machine_report.php" hx-target="#machine-report">
                Get System Report
            </button>
        </p>
        <div id="machine-report"></div>
        <hr />
        <?php echo '<p>Hello ' . $_SERVER['HTTP_USER_AGENT'] . '</p>'; ?>
        <i>P.S. you are not allowed to click on this button</i>&nbsp<button class="c-not-allowed">:)</button>
</body>

</html>