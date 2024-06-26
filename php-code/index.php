<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Home pagina van HETE saus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HETE saus - Home</title>
    
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="Assets/Icons/iconforhetesaus.png" type="image/x-icon">

    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin="" defer></script>
    <script src="JS/map.JS" defer></script>
    <script src="JS/shoppingCartScript.js" defer></script>
    <script src="JS/wishinglist.js" defer></script>
    <script src="logVisits.php" defer></script>
</head>
<body>
   
    <section class="topliner"><span>Snelle levering doorheen heel Europa!</span> <span>Geniet van 20% kerstkorting.</span></section>
    <header>
        <section class="logo">
           <a href="index.html"> <img src="Assets/Icons/iconforhetesaus.png" alt="foto van hete saus" width="90px" height="90px"></a>
            <a href="index.html"><h1>HETE SAUS</h1></a>
        </section>
    <form action="" id="headerSearch">
        <label for="headerSearchField" class="hiddenO">Zoekt u iets?</label>
        <input type="search" name="headerSearchField" id="headerSearchField" placeholder="Zoeken...">
        <button type="submit"><img src="Assets/Icons/searchwhite.jpg" alt="Zoeken" width="32px" height="32px"></button>
    </form>
        <button id="popupShoppingCart"><img src="Assets/Icons/Shopcartbasic.jpg" alt="shoppingcart" width="64px" height="64px"><section id="cartCounter">0</section></button>
    </header>
    <section id="shopCartPopup"> <button id="closeShopCart">X</button>
        <table>
            <thead><tr>
                <th colspan="2">Product</th>
                <th>Aantal</th>
                <th>Prijs</th>
                <th colspan="1">Verwijderen</th>
            </tr></thead>
            <tbody id="myShoppingCartPopup">
                <tr><td colspan="5">
                  <p>Hier kan nog wel een koopje bij in toch?</p> 
                </td></tr>
            </tbody>
            <tfoot><tr>
                <th>Prijs zonder btw:</th>
                <th></th>
                <th colspan="1" id="popupPrice1"></th>
                <th></th>
                <th>+20% BTW</th>
            </tr></tfoot>
        </table>
        <section class="popupText">
            <p>Totaal aantal items -> <span id="totalCountPopup" class="important"></span></p>
            <p>Totale prijs met btw -> <span id="totalWithVATPopup" class="important"></span></p>
        </section>
        <button class="checkoutButton">Bestellen die handel!</button>
    </section>
    <nav>
        <a href="index.html" class="activeSideButton">Home</a>
        <a href="productpagina.html">Producten</a>
        <a href="klanten.html">Klanten</a>
        <a href="contact.html">Contact</a>
    </nav>
    <section class="banner"><img src="Assets/Images/Banners/BannerApprox9-3.webp" alt="bannerhetesaus" width="auto" height="auto"></section>
    <main>
        <h2>Hete saus, een avontuur vol smaken en pit!</h2>
        <section class="intro">

            <article class="introart1">
                <h3>Waarom hotsauce?</h3>
                <p>
                    Bij Hete Saus is kwaliteit altijd van het hoogste belang. We streven naar perfectie!
Alsook onze verse pepers en gedroogde pepers worden steeds gecontroleerd zodat enkel de beste exemplaren bij jou thuis terecht komen. Dankzij onze goede samenwerking met leveranciers en lokale kwekerijen kunnen wij U dan ook steeds van topkwaliteit en soms ook van uniekheid voorzien

Hier vind je enkele van onze bestverkopende sauzen. Meer kan je vinden op onze productpagina.

Hieronder vind je meer info over ons.
                </p>
            </article>

            <article class="introimg">
                <h3>De nieuwe heetse pepper ter wereld: "pepper X"</h3>
                <iframe src="https://www.youtube.com/embed/4bwcZKAfDX0?si=k7z4k3NO9HLSLq4Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <h3>Bekijk de video</h3>
            </article>

            <article class="introwide" >
                <h3>BINNENKORT VERKRIJGBAAR: NIEUWE PRODUCTEN!</h3>
                <figure>
                <img src="Assets/Images/newspictures/Nieuwe merklijn.jpg" alt="foto nieuwe productlijn" width="auto"
                height="auto">
                <figcaption>HotSensation coming soon!</figcaption>
               
                </figure> <p>Een van de meest geantcipeerde sauzen op het moment, binnenkort exclusief bij ons verkrijgbaar! Meer info volgt later!</p>
            </article>
        
        </section>


        <h2 id="bestseller_Anchor">Enkele van onze bestsellers</h2>
        <section class="productcontainer">
            
            <section class="bestseller">

                <article class="product">
                    <figure><img src="Assets/Images/ProductPictures/Tropical Heatwave.webp" alt="Foto van Tropical Heatwave" max-width="auto" height="auto">
                    </figure>
                    <a href="Tropical Heatwave.html"><h3>Tropical Heatwave</h3></a>
                    
                    <section class="shorttext">
                        Een tropische hittegolf van fruitige tinten met doordringende hitte!
                    </section>
                    
                    <section class="price"> <p>Prijs: <span>&euro;14,50</span></p> <p>Size: <span>350ml</span></p>
                    </section> 

                    <section class="buttonboxproduct">
                        <button class="moreinfo"><a href="Tropical Heatwave.html">Meer weten?</a></button>
                    </section>
                </article>
                <span>
                    B <br>
                    E <br>
                    S <br>
                    T <br>
                    - <br>
                    S <br>
                    E <br>
                    L <br>
                    L <br>
                    E <br>
                    R 
                </span>
            </section>

            <section class="bestseller">
                <article class="product">
                   <figure> <img src="Assets/Images/ProductPictures/ElToroLoco.webp" alt="Foto van Minotaurs secret" max-width="auto" height="auto">
                   </figure>
                    <a href="Minotaurs Secret.html"><h3>Minotaurs Secret</h3></a>

                    <section class="shorttext">
                        Verdwaal in een doolhof van Cretaanse tradities en smaken die euwen teruggaan!
                    </section>

                    <section class="price"> <p>Prijs: <span>&euro;12,50</span></p> <p>Size: <span>350ml</span></p>
                    </section> 
                    
                    <section class="buttonboxproduct">
                        <button class="moreinfo"><a href="Minotaurs Secret.html">Meer info?</a></button>
                    </section>
                </article>
                <span>
                    B <br>
                    E <br>
                    S <br>
                    T <br>
                    - <br>
                    S <br>
                    E <br>
                    L <br>
                    L <br>
                    E <br>
                    R 
                </span>
            </section>

            <section class="bestseller">
                <article class="product">
                  <figure><img src="Assets/Images/ProductPictures/Habanero nomad.webp" alt="Foto van product" max-width="auto" height="auto">
                  </figure>
                    <a href="HabaneroNomad.html"><h3>Habanero Nomad</h3></a>
                    
                    <section class="shorttext">
                        Gebaseerd op een Nomadisch recept.
                        Hitte en smaak gegarandeerd! 
                    </section>

                    <section class="price"> <p>Prijs: <span>&euro;10,50</span></p> <p>Size: <span>350ml</span></p>
                    </section> 
                    
                    <section class="buttonboxproduct">
                        <button class="moreinfo"><a href="HabaneroNomad.html">Meer weten?</a></button>
                    </section>
                </article>
                <span>
                    B <br>
                    E <br>
                    S <br>
                    T <br>
                    - <br>
                    S <br>
                    E <br>
                    L <br>
                    L <br>
                    E <br>
                    R 
                </span>
            </section>

        </section>


        <h2>Over ons</h2>
        <section class="about">
            <article class="artabout">
                
                <h3>Wie ben ik, wat biedt ik, wat is HETE SAUS</h3>
                    <p>Bij HETE SAUS delen we een ontembare passie voor alles wat heet, pittig en vol smaak is. Onze reis begon met een eenvoudige liefde voor pepers en is uitgegroeid tot een ware culinaire obsessie. Zelf groeien we al jaren mijn eigen peppers, Wij zijn geen gewone verkopers van hotsauzen en pepers, maar eerder smaakartiesten die geloven dat elke maaltijd een avontuur moet zijn.Gedaan zijn de dagen dat je tientallen site's moet bezoeken om te vinden wat jij het lekkerste vind! Wij staan altjd open voor nieuwe suggesties voor onze eigen sauzen, en werken nauw samen met erkende internationale hotsauce leveranciers. Elk van onze pepers wordt met de grootste zorg gekweekt, zonder concessies te doen aan de smaak of het milieu. We koesteren elke plant als een kunstwerk en oogsten alleen de allerbeste vruchten voor onze producten. Hierdoor kunnen we jou de meest levendige en intense smaken bieden die de natuur te bieden heeft. Onze hotsauzen worden met dezelfde passie en toewijding gecreëerd. We combineren traditionele recepten met moderne culinaire innovaties om sauzen te maken die je smaakpapillen prikkelen en je zintuigen laten ontwaken. Of je nu een doorgewinterde vuurvreter bent of gewoon op zoek bent naar een vleugje pit, bij HETE SAUS vind je altijd iets speciaals.
                    Laat je verleiden door ons assortiment en ontdek de wereld van smaak die we te bieden hebben.
                <img src="Assets/Images/Photos/LarsL.jpg" alt="fotovaneigenaar" width="400px">
                    </p>
            </article>

            <article class="aboutReview">
                <h4>Review van een klant</h4>
                <blockquote>
                    "Ik zocht al een tijdje naar een speciale hotsauce maar vond nergens de smaak die ik wou hebben, na een korte vraag aan Hete Saus heb ik nu een nieuwe favoriete saus!! Een echte aanrader, heet en lekker!!"
                </blockquote>
                <p>Jan de Nul, 2017/08</p>
            </article>

            <article class="aboutFact">
                <h4>fun facts</h4>
                <p> Pepers in de ruimte: Pepers zijn zelfs naar de ruimte gereisd! Astronauten hebben ze geteeld op ruimtestations zoals het International Space Station (ISS) als onderdeel van experimenten om te begrijpen hoe planten groeien in de ruimte en hoe voedselproductie kan worden verbeterd voor langdurige missies in de ruimte. </p>
            </article>
        </section>
    </main>
    <aside>
        <h2>submenu</h2>
        <section class="asidedropdown">
           
            <section class="dropdownbuttons">
                <button id="openCart" class="buttonaside">Winkelwagen</button>  
                <section id="hiddenCart">
                    <table id="shopCartTable">
                        <thead>
                            <tr>
                                
                                <th colspan="2">Saus</th>
                                <th>Hvl.</th>
                                <th>Prijs</th>
                                <th colspan="2">Remove</th>
                                
                            </tr>
                        </thead>
                        <tbody id="myShoppingCart"></tbody>
                        <tfoot id="totalCart">
                            <tr>
                                <th colspan="2">Subtotaal</th>
                                <th colspan="2" id="totalCartPrice"></th>
                                <th colspan="2">+20%VAT</th>
                            </tr>
                            <tr>
                                <th colspan="2">Totaalprijs</th>
                                <th></th>
                                <th colspan="2" id="totalWithVAT"></th>
                                <th></th>
                                
                            </tr>
                        </tfoot>
                        
                    </table>
                    <button class="checkoutButton">Bestellen</button>
                </section>   
                </section>

            <section class="dropdownbuttons">
                <button class="buttonaside" id="openSearch">! Zoeken !</button>
                 <form action="" id="hiddenSearch">
                <input type="search" class="searchAside">
                <input type="submit" class="asideSearchSubmit" value="Zoeken">
            </form>
            </section>

        </section>
       
        <h2>Plaats hier uw advertentie!</h2>

    </aside>
    <footer>
        <section class="backlink"><a href="">Terug naar boven!</a></section>
        
            <section class="footcontact">
                <h4>Contact</h4>
                <ul>
                    <li>Telefoon: +32488226260</li>
                    <li>E-mail: Info@HETEsaus.com</li>
                    <li>Adrress: Smalleweg 7, 2940 HOEVENEN</li>
                </ul>
            </section>

            <article>
                <h3>Wij streven altijd naar de beste kwaliteit!</h3>
                    <h4>vind ons op:</h4>
                    <a href=""><img src="Assets/Icons/Instalogo.jpg" alt="instagram" width="32px" height="32px"></a>
                    <a href=""><img src="Assets/Icons/Xlogo.jpg" alt="twitter" width="32px" height="32px"></a>
                    <a href=""><img src="Assets/Icons/FBlogo.jpg" alt="facebook" width="32px" height="32px"></a>
            </article>

            <section class="footmap">
                <h4 class="footmapheader">Onze Locatie:</h4>
                <div id="footmap"></div>
            </section>

        
        <section class="copyfoot"> &copy;Lars Lauryssens & &copy;AP-Hogeschool</section>
        <section class="backlink2"><a href="">Terug naar boven!</a></section>           
    </footer>

</body>
</html>