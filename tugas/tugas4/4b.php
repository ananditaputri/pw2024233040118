<!DOCTYPE html>
<head>
    <title>Tugas 4b</title>
</head>

<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller","VGA Card", "SSD"];
?>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach($hardware as $newhardware) { ?>
        <li><?= $newhardware; ?></li>
        <?php } ?>
    </ol>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php 
        array_push($hardware, "Card Reader", "Modem");
        sort($hardware)
        ?>
        <?php foreach($hardware as $newhardware) { ?>
        <li><?= $newhardware?></li>
        <?php } ?>
    </ol>
</body>
</html>