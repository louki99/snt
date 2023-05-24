<header class="main-header header-style-1 font-heading">

    <div class="header-top">
        <div class="container">
            <div class="row pt-20 pb-20">
                <div class="col-md-3 col-6">
                    <a href="https://stories.botble.com">
                        <img class="logo" src="https://stories.botble.com/storage/general/logo.png"
                            alt="Stories - Laravel Personal Blog Script" /></a>
                </div>
                <div class="col-md-9 col-6 text-right header-top-right">
                    <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                    <button class="search-icon d-inline">
                        <span class="mr-15 text-muted font-small"><i
                                class="elegant-icon icon_search mr-5"></i>Search</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="header-sticky">
        <div class="container align-self-center">
            <div class="mobile_menu d-lg-none d-block">
                <div class="slicknav_menu">
                    <div class="container">
                        <a href="#" aria-haspopup="true" role="button" tabindex="0"
                            class="slicknav_btn slicknav_collapsed" style="outline: none;">
                            <span class="slicknav_menutxt">Menu</span>
                            <span class="slicknav_icon">
                                <span class="menu-icon"><span class="menu-icon-inner"></span></span>
                                <span class="menu-text ml-5">Menu</span>
                            </span>
                        </a>
                    </div>
                    <ul class="slicknav_nav slicknav_hidden" data-label="Menu" style="display: none;" aria-hidden="true"
                        role="menu">
                        <li class="menu-item-has-children slicknav_collapsed slicknav_parent">
                            <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1"
                                class="slicknav_item slicknav_row" style="outline: none;">
                                <a href="https://stories.botble.com/" tabindex="-1"><i
                                        class="elegant-icon mr-5 elegant-icon icon_house_alt mr-5"></i> Home </a><span
                                    class="slicknav_arrow">+</span>
                            </a>
                            <ul class="sub-menu text-muted font-small slicknav_hidden" role="menu"
                                style="display: none;" aria-hidden="true">
                                <li class=" "><a href="https://stories.botble.com/" role="menuitem" tabindex="-1">
                                        Home default </a></li>
                                <li class=" "><a href="https://stories.botble.com/home-2" role="menuitem"
                                        tabindex="-1"> Home 2 </a></li>
                                <li class=" "><a href="https://stories.botble.com/home-3" role="menuitem"
                                        tabindex="-1"> Home 3 </a></li>
                            </ul>
                        </li>
                        <li class=" "><a href="https://stories.botble.com/travel" role="menuitem" tabindex="-1">
                                Travel </a></li>
                        <li class=" "><a href="https://stories.botble.com/destination" role="menuitem"
                                tabindex="-1"> Destination </a></li>
                        <li class=" "><a href="https://stories.botble.com/hotels" role="menuitem" tabindex="-1">
                                Hotels </a></li>
                        <li class=" "><a href="https://stories.botble.com/lifestyle" role="menuitem"
                                tabindex="-1"> Lifestyle </a></li>
                        <li class=" "><a href="https://stories.botble.com/blog" role="menuitem" tabindex="-1">
                                Blog </a></li>
                        <li class=" "><a href="https://stories.botble.com/galleries" role="menuitem"
                                tabindex="-1"> Galleries </a></li>
                        <li class="menu-item-has-children slicknav_collapsed slicknav_parent">
                            <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1"
                                class="slicknav_item slicknav_row" style="outline: none;">
                                <a href="https://stories.botble.com/blog" tabindex="-1"> Blog layouts </a><span
                                    class="slicknav_arrow">+</span>
                            </a>
                            <ul class="sub-menu text-muted font-small slicknav_hidden" role="menu"
                                style="display: none;" aria-hidden="true">
                                <li class=" "><a href="https://stories.botble.com/blog-grid-layout"
                                        role="menuitem" tabindex="-1"> Grid layout </a></li>
                                <li class=" "><a href="https://stories.botble.com/blog-list-layout"
                                        role="menuitem" tabindex="-1"> List layout </a></li>
                                <li class=" "><a href="https://stories.botble.com/blog-big-layout"
                                        role="menuitem" tabindex="-1"> Big layout </a></li>
                            </ul>
                        </li>
                        <li class=" "><a href="https://stories.botble.com/contact" role="menuitem"
                                tabindex="-1"> Contact </a></li>
                    </ul>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block float-left">
                <nav>
                    <ul class="main-menu d-none d-lg-inline font-small">
                        <li class="li"><a class="link" href="#">Accueil</a></li>
                        <li  class="li"><a class="link" href="#">Réglementation</a>
                            <ul class="sbm">
                                <li><a class="link" href="#">La réglementation transversale</a>
                                    <ul class="sbm">
                                        <li><a class="link" href="{{ route('pages.show',"missions-et-attributions-de-lonssa")}}">Missions et attributions de l'ONSSA</a></li>
                                        <li><a class="link" href="{{ route('pages.show',"securite-sanitaire")}}">Sécurité sanitaire</a></li>
                                        <li><a class="link" href="{{ route('pages.show',"surveillance-et-controle-sanitaire")}}">Surveillance et contrôle sanitaire</a></li>
                                        <li><a class="link" href="{{ route('pages.show',"conformite-des-produits")}}">Conformité des produits</a></li>
                                        <li><a class="link" href="{{ route('pages.show',"transport-des-produits-alimentaires")}}">Transport des produits alimentaires</a></li>
                                        <li><a class="link" href="{{ route('pages.show',"import-et-export")}}">Import et Export</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="#">La réglementation séctorielle</a>
                                    <ul class="sbm">
                                        <li><a class="link" href="{{ route('pages.sant.animale',"la-sante-animale")}}">La santé animale</a></li>
                                        <li><a class="link" href="{{ route('pages.show',"les-produits-alimentaires")}}">Les produits alimentaires</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="{{ route('pages.show',"la-reglementation-connexe")}}">La réglementation connexe</a></li>
                                <li><a class="link" href="{{ route('pages.show',"les-references-normatives")}}">Les références normatives</a></li>
                            </ul>

                        </li>
                        <li class="li"><a class="link" href="#">Inspection ante-mortem</a>
                            <ul class="sbm">
                                <li><a class="link" href="{{ route('pages.show',"inspection-ante-mortem-definition-et-principe")}}">Définition et principe</a></li>
                                <li><a class="link" href="{{ route('pages.show',"inspection-ante-mortem-techniques-dinspection")}}">Techniques d'inspection</a></li>
                                <li><a class="link" href="{{ route('pages.show',"inspection-ante-mortem-conduite-a-tenir")}}">Conduite à tenir</a></li>
                            </ul>
                        </li>

                        <li class="li"><a class="link" href="#">Inspection post-mortem</a>
                            <ul class="sbm">
                                <li><a class="link" href="#">Modalités de l'inspection sanitaire</a>
                                    <ul class="sbm">
                                        <li><a class="link" href="{{ route('pages.show',"modalites-de-linspection-sanitaire-definition-et-principes") }}">Définition et principes</a></li>
                                        <li><a class="link" href="{{ route('pages.show',"modalites-de-linspection-sanitaire-moyens-utilises") }}">Moyens utilisés</a></li>
                                        <li><a class="link" href="{{ route('pages.modalite.espece',"modalites-dinspection-selon-lespece") }}">Modalités d'inspection selon l'espèce</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="#">Diagnose</a>
                                    <ul class="dbm">
                                        <li><a class="link" href="#">La configuration anatomique</a></li>
                                        <li><a class="link" href="#">La fressure</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="#">Détermination de l'âge et du sexe</a>
                                    <ul>
                                        <li><a class="link" href="#">Estimation de l'âge</a></li>
                                        <li><a class="link" href="#">Estimation du sexe</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="#">Modalités de l'inspection qualitative</a>
                                    <ul class="dbm">
                                        <li><a class="link" href="#">Les critères de la classification</a></li>
                                        <li><a class="link" href="#">Les caratéristiques techniques de l'estampillage</a></li>
                                        <li><a class="link" href="#">La classification des carcasses</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li  class="li"><a class="link" href="#">Motif de saisie</a>
                            <ul class="sbm">
                                <li><a class="link" href="#">Viandes cadavériques</a></li>
                                <li><a class="link" href="#">Viandes insuffisantes</a>
                                    <ul>
                                        <li><a class="link" href="#">Viandes gélatineuses</a></li>
                                        <li><a class="link" href="#">Viandes infiltrées</a></li>
                                        <li><a class="link" href="#">Viandes maigres, amyotrophiques et cachectiques</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="#">Viandes issues d'abattage défectueux</a>
                                    <ul class="dbm">
                                        <li><a class="link" href="#">Ecoffrage</a></li>
                                        <li><a class="link" href="#">Tiquetage musculaire (Purpura d'abattage)</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="#">Viandes répugnantes</a>
                                    <ul class="dbm">
                                        <li><a class="link" href="#">Couleur anormale</a></li>
                                        <li><a class="link" href="#">Odeur anormale</a></li>
                                    </ul>
                                </li>
                                <li><a class="link" href="#">Viandes toxiques</a></li>
                                <li><a class="link" href="#">Viandes virulentes</a>
                                    <ul class="sbm">
                                        <li><a class="link" href="#">Viandes issues d'animaux atteints de MRLC</a></li>
                                        <li><a class="link" href="#">Viandes issues d'animaux non atteints de MRLC</a></li>
                                        <li><a class="link" href="#">Affections parasitaires</a>
                                            <ul class="sbm">
                                                <li><a class="link" href="#">La carcasse</a></li>
                                                <li><a class="link" href="#">Le 5ème quartier</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="link" href="#">Viandes dangereuses</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="float-right header-tools text-muted font-small">
                <ul class="header-social-network d-inline-block list-inline mr-15">
                    <li class="list-inline-item">
                        <a href="https://facebook.com" target="_blank" title="Facebook"
                            class="social-icon text-xs-center page_speed_941651901"><i
                                class="elegant-icon social_facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com" target="_blank" title="Twitter"
                            class="social-icon text-xs-center page_speed_1460339408"><i
                                class="elegant-icon social_twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://linkedin.com" target="_blank" title="Linkedin"
                            class="social-icon text-xs-center page_speed_105723944"><i
                                class="elegant-icon social_linkedin"></i></a>
                    </li>
                </ul>
                <div class="off-canvas-toggle-cover d-inline-block">
                    <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle"><span></span></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
