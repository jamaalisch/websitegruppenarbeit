<header>
    <h2><?php if(!empty($title)) echo $title ?></h2>
    <div class="inHeader">
        <nav>
            <span id="homeButton"><a href="/../"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></span>
            <ul>
                <li><a class="<?php if(!empty($active)) : echo $active == "ratte" ? "active" : ""; endif ?>" href="/../ratte.php">Die Ratte</a></li>
                <li><a class="<?php if(!empty($active)) : echo $active == "gepard" ? "active" : ""; endif ?>" href="/../gepard.php">Der Gepard</a></li>
                <li><a class="<?php if(!empty($active)) : echo $active == "m1ax" ? "active" : ""; endif ?>" href="/../m1ax.php">Der M1 AbramsX</a></li>
                <li><a class="<?php if(!empty($active)) : echo $active == "puma" ? "active" : ""; endif ?>" href="/../puma.php">Der Puma IFV</a></li>
            </ul>
        </nav>
        <span id="toggle" onclick="darkModeToggle()"><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" stroke-linecap="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></span>

    </div>

</header>