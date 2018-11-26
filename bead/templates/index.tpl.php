<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
		<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
        <img id="szeles" src="./images/<?=$fejlec['kepforras2']?>" alt="<?=$fejlec['kepalt2']?>">
		<h1><?= $fejlec['cim'] ?></h1>
		<!-- <?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?> -->
        <nav id="felso">
        <ul>
            <?php foreach ($oldalak as $url => $oldal) {
                if($oldal['menu']) { ?>
                    <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                        <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                            <?= $oldal['szoveg'] ?></a>
                    </li>
                <?php }
            } ?>
            <div class="search">
                <form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
                    <input name="sitesearch" type="hidden" value=csipero.eu>
                    <input autocomplete="on" class="form-control search" name="q" placeholder="Keressen oldalunkon: " required="required"  type="text">
                    <input class="keresoikon" type="image" src="./images/kereso.png" width="32"></input>
                </form>
            </div>

        </ul>

        </nav>
	</header>
    <div id="wrapper">
        <aside id="nav">
            <nav>
                <img src="./images/oldalkep.jpg" class="oldalkep">
            </nav>
        </aside>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
        <span class="jobbb"> <a href="csipero.eu">Eredeti oldalra mutató link</a>    </span>


    </footer>
</body>
</html>
