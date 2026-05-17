<!DOCTYPE html>
<html lang="it">
<head>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
ini_set("display_errors", 1);



$sport = [
    ["immagine" => "https://media-assets.wired.it/photos/687ff308828be1bbe261a0c9/16:9/w_1920,c_limit/ea-sports-fc-26-Cover.jpg",
     "nome" => "FC 26",
     "casa di sviluppo" => "EA",
     "pegi" => "3+"],
    ["immagine" => "https://hb.imgix.net/1bcfb53c0d044741c257f226498cf1610c024ba2.png?auto=compress,format&fit=crop&h=353&w=616&s=32e791b5ab92391c51805e911fe4de8f",
     "nome" => "NBA 2K26",
     "casa di sviluppo" => "2K Games",
     "pegi" => "3+"],
    ["immagine" => "https://cdn1.epicgames.com/spt-assets/4c57275be6f1469b9ae10006f7429a81/f1-25-1f43p.jpg",
     "nome" => "F1 26",
     "casa di sviluppo" => "Codemasters",
     "pegi" => "3+"],
];

$fps = [
    ["immagine" => "https://multiplayer.net-cdn.it/thumbs/images/2023/11/14/mwiii_keyart_jpeg_1600x900_crop_q85.jpg",
     "nome" => "Call of Duty: Modern Warfare 3",
     "casa di sviluppo" => "Infinity Ward",
     "pegi" => "18+"],
    ["immagine" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1517290/capsule_616x353.jpg?t=1761752400",
     "nome" => "Battlefield 2042",
     "casa di sviluppo" => "DICE",
     "pegi" => "16+"],
    ["immagine" => "https://sm.ign.com/ign_it/screenshot/default/23b6f32d-f359-43f3-a595-399cb019c603_y12s.jpg",
     "nome" => "DOOM Eternal",
     "casa di sviluppo" => "id Software",
     "pegi" => "18+"],
];

$idle = [
    ["immagine" => "https://www.nintendo.com/eu/media/images/assets/nintendo_switch_games/cookieclicker/2x1_CookieClicker.jpg",
     "nome" => "Cookie Clicker",
     "casa di sviluppo" => "Orteil",
     "pegi" => "3+"],
    ["immagine" => "https://upload.wikimedia.org/wikipedia/en/1/13/AdVenture_Capitalist_%282014_video_game%29.png",
     "nome" => "Adventure Capitalist",
     "casa di sviluppo" => "Hyper Hippo Games",
     "pegi" => "3+"],
    ["immagine" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/363970/1ab2c7ea7bca7bf51ac54949b00fd8b7619ce023/header.jpg?t=1762210083",
     "nome" => "Clicker Heroes",
     "casa di sviluppo" => "Playsaurus",
     "pegi" => "7+"],
];

$multiplayer = [
    ["immagine" => "https://i.ytimg.com/vi/adGdyCdvKz4/maxresdefault.jpg",
     "nome" => "Fortnite",
     "casa di sviluppo" => "Epic Games",
     "pegi" => "12+"],
    ["immagine" => "https://www.nintendo.com/eu/media/images/assets/nintendo_switch_2_games/apexlegends_1/16x9_ApexLegends.jpg",
     "nome" => "Apex Legends",
     "casa di sviluppo" => "Respawn Entertainment",
     "pegi" => "16+"],
    ["immagine" => "https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/730/header.jpg?t=1749053861",
     "nome" => "Counter-Strike 2",
     "casa di sviluppo" => "Valve Corporation",
     "pegi" => "18+"],
];

$indie = [
    ["immagine" => "https://www.nintendo.com/eu/media/images/10_share_images/games_15/wiiu_download_software_5/H2x1_WiiUDS_HollowKnight_image1600w.jpg",
     "nome" => "Hollow Knight",
     "casa di sviluppo" => "Team Cherry",
     "pegi" => "7+"],
    ["immagine" => "https://gaming-cdn.com/images/products/1767/orig/stardew-valley-pc-mac-gioco-steam-cover.jpg?v=1704800467",
     "nome" => "Stardew Valley",
     "casa di sviluppo" => "ConcernedApe",
     "pegi" => "7+"],
    ["immagine" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Celeste_box_art_full.png/250px-Celeste_box_art_full.png",
     "nome" => "Celeste",
     "casa di sviluppo" => "Maddy Makes Games",
     "pegi" => "3+"],
];

$avventura = [
    ["immagine" => "https://www.nintendo.com/eu/media/images/10_share_images/games_15/nintendo_switch_4/2x1_NSwitch_TloZTearsOfTheKingdom_Gamepage_image1600w.jpg",
     "nome" => "The Legend of Zelda: Tears of the Kingdom",
     "casa di sviluppo" => "Nintendo",
     "pegi" => "12+"],
    ["immagine" => "https://upload.wikimedia.org/wikipedia/en/1/1a/Uncharted_4_box_artwork.jpg",
     "nome" => "Uncharted 4: Fine di un Ladro",
     "casa di sviluppo" => "Naughty Dog",
     "pegi" => "16+"],
    ["immagine" => "https://image.api.playstation.com/vulcan/ap/rnd/202105/1412/bJYCCmymxvgviuuolfOx8srg.png",
     "nome" => "Life is Strange",
     "casa di sviluppo" => "Dontnod Entertainment",
     "pegi" => "16+"],
];



$categoria = $_POST['categoria'];


switch ($categoria) {
    case 'sport':
        $giochi = $sport;
        break;
    case 'fps':
        $giochi = $fps;
        break;
    case 'idle':
        $giochi = $idle;
        break;
    case 'multiplayer':
        $giochi = $multiplayer;
        break;
    case 'indie':
        $giochi = $indie;
        break;
    case 'avventura':
        $giochi = $avventura;
        break;
    default:
        $giochi = [];
        break;
}



    echo "<table>";
echo "<tr><th>Immagine</th><th>Nome</th><th>Casa di sviluppo</th><th>PEGI</th></tr>";

foreach ($giochi as $g) {
    $img = $g['immagine'];
    $nome = $g['nome'];
    $casa = $g['casa di sviluppo'];
    $pegi = $g['pegi'];

    echo "<tr>";
    echo "<td><img src='$img' alt='$nome' style='width:100px; height:auto; border-radius:8px;'></td>";
    echo "<td>$nome</td>";
    echo "<td>$casa</td>";
    echo "<td>$pegi</td>";
    echo "</tr>";
}

echo "</table>";
echo "<br><button onclick=\"window.location.href='index.html'\">Torna alla Home</button>";
?>
</body>
</html>