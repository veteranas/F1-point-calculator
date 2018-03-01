<div class="container heading" id="calculator">
    <h2>F1 taškų skaičiuoklė</h2>
</div>
<div class="container h4">
    <p>Ši skaičiuoklė yra skirta nustatyti surinktų taškų kiekį pagal vykstančio žaidimo taisykles svetainėje <a href="http://www.f-1.lt" target="_blank">F-1.lt</a>. Pasirinkus visus komponentus bus suskaičiuojami taškai pagal rezultatus iš karto po etapo, ignoruojant paskirtas nuobaudas.</p>
    <h4 class="text-left">Komponentų pasirinkimas</h4>
    <div class="row text-center">
        <!-- SESIJA  -->
        <div class="col- calc-card">
            <a href="#session_calc" data-toggle="modal">
                <img src="images/sk_event.png" width=170 height=140 alt="event">
            </a>
            <p>ETAPAS</p>
            <p id="sesija"></p>
        </div>
        <!-- PILOTAS 1  -->
        <div class="col- calc-card">
            <a href="#driver1_calc" data-toggle="modal">
                <img src="images/sk_driver.png" width=170 height=140 alt="pilot1">
            </a>
            <p>PILOTAS Nr. 1</p>
            <p id="pilotas1"></p>
        </div>
        <!-- PILOTAS 2  -->
        <div class="col- calc-card">
            <a href="#driver2_calc" data-toggle="modal">
                <img src="images/sk_driver.png" width=170 height=140 alt="pilot2">
            </a>
            <p>PILOTAS Nr. 2</p>
            <p id="pilotas2"></p>
        </div>
        <!-- KOMANDA  -->
        <div class="col- calc-card">
            <a href="#team_calc" data-toggle="modal">
                <img src="images/sk_team.png" width=170 height=140 alt="team">
            </a>
            <p>KOMANDA</p>
            <p id="komanda"></p>
        </div>
        <!-- VARIKLIS  -->
        <div class="col- calc-card">
            <a href="#engine_calc" data-toggle="modal">
                <img src="images/sk_engine.png" width=170 height=140 alt="engine">
            </a>
            <p>VARIKLIS</p>
            <p id="variklis"></p>
        </div>
    </div>
</div>
<div class="container h4">
    <h4>Komponentų taškų skaičiavimas</h4>
    <div class="row">
        <div class="col- calc-btnrow">
            <button class="btn btn-close" onclick="checkCallD1()">Pilotas Nr. 1</button>
            <button class="btn btn-close" onclick="checkCallD2()">Pilotas Nr. 2</button>
            <button class="btn btn-close" onclick="checkCallT()">Komanda</button>
            <button class="btn btn-close" onclick="checkCallE()">Variklis</button>
            <button class="btn btn-close" onclick="" disabled="">Suma Q</button> 
            <button class="btn btn-close" onclick="" disabled="">Suma R</button> 
            <button class="btn btn-close" onclick="" disabled="">Iš viso</button>  
        </div>
    </div>
    <div class="container h4 calculator">
        <h4>Rezultatai</h4>
        <div id="points">
            <p>Pilotas Nr. 1</p><h5 id="points1">Pilotas Nr. 1</h5>
            <p>Pilotas Nr. 2</p><h5 id="points2">Pilotas Nr. 2</h5>
            <p>Komanda</p><h5 id="points3">Komanda</h5>
            <p>Variklis</p><h5 id="points4">Variklis</h5>
            <h5 id="points6">Bendra taškų suma už kvalifikaciją</h5>
            <h5 id="points7">Bendra taškų suma už lenktynes</h5>
            <h5 id="points8">Taškų suma iš viso</h5>
        </div>
        <div>
            <input type="button" class="btn btn-choose" value="Rinktis viską iš naujo" onclick="window.location.reload(true).href='#calculator'">
        </div>
    </div>
    <div class="modal fade" id="session_calc">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-card-title">
                    <h2 class="modal-title">Etapas</h2>
                    <button type="button" class="xbtn" data-dismiss="modal" area-label="Uždaryti"><i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="etapai">
                        <option value="" hidden selected>Etapas</option>
                        <option value="Australija">Australija</option>
                        <option value="Bahreinas">Bahreinas</option>
                        <option value="Kinija">Kinija</option>
                        <option value="Azerbaidžanas">Azerbaidžanas</option>
                        <option value="Ispanija">Ispanija</option>
                        <option value="Monakas">Monakas</option>
                        <option value="Kanada">Kanada</option>
                        <option value="Prancūzija">Prancūzija</option>
                        <option value="Austrija">Austrija</option>
                        <option value="Britanija">Didžioji Britanija</option>
                        <option value="Vokietija">Vokietija</option>
                        <option value="Vengrija">Vengrija</option>
                        <option value="Belgija">Belgija</option>
                        <option value="Italija">Italija</option>
                        <option value="Singapūras">Singapūras</option>
                        <option value="Rusija">Rusija</option>
                        <option value="Japonija">Japonija</option>
                        <option value="Amerika">Amerika</option>
                        <option value="Meksika">Meksika</option>
                        <option value="Brazilija">Brazilija</option>
                        <option value="AbuDabis">Abu Dabis</option>
                    </select>
                <button class="btn btn-choose" onclick="callSession()">Rinktis</button>
                </div>
                <div class="modal-footer modal-card-title">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Uždaryti</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="driver1_calc">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-card-title">
                    <h2 class="modal-title">Pilotas Nr. 1</h2>
                    <button type="button" class="xbtn" data-dismiss="modal" area-label="Uždaryti"><i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="pilotai1">
                        <option value="" hidden selected>Pilotas</option>
                        <option value="Hamilton">Hamilton</option>
                        <option value="Bottas">Bottas</option>
                        <option value="Vettel">Vettel</option>
                        <option value="Raikkonen">Raikkonen</option>
                        <option value="Ricciardo">Ricciardo</option>
                        <option value="Verstappen">Verstappen</option>
                        <option value="Ocon">Ocon</option>
                        <option value="Perez">Perez</option>
                        <option value="Hulkenberg">Hulkenberg</option>
                        <option value="Sainz">Sainz</option>
                        <option value="Sirotkin">Sirotkin</option>
                        <option value="Stroll">Stroll</option>
                        <option value="Grosjean">Grosjean</option>
                        <option value="Magnussen">Magnussen</option>
                        <option value="Alonso">Alonso</option>
                        <option value="Vandoorne">Vandoorne</option>
                        <option value="Gasly">Gasly</option>
                        <option value="Hartley">Hartley</option>
                        <option value="Ericsson">Ericsson</option>
                        <option value="Leclerc">Leclerc</option>
                    </select>
                <button class="btn btn-choose" onclick="callDriver1()">Rinktis</button>
                </div>
                <div class="modal-footer modal-card-title">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Uždaryti</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="driver2_calc">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-card-title">
                    <h2 class="modal-title">Pilotas Nr. 2</h2>
                    <button type="button" class="xbtn" data-dismiss="modal" area-label="Uždaryti"><i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="pilotai2">
                        <option value="" hidden selected>Pilotas</option>
                        <option value="Hamilton">Hamilton</option>
                        <option value="Bottas">Bottas</option>
                        <option value="Vettel">Vettel</option>
                        <option value="Raikkonen">Raikkonen</option>
                        <option value="Ricciardo">Ricciardo</option>
                        <option value="Verstappen">Verstappen</option>
                        <option value="Ocon">Ocon</option>
                        <option value="Perez">Perez</option>
                        <option value="Hulkenberg">Hulkenberg</option>
                        <option value="Sainz">Sainz</option>
                        <option value="Sirotkin">Sirotkin</option>
                        <option value="Stroll">Stroll</option>
                        <option value="Grosjean">Grosjean</option>
                        <option value="Magnussen">Magnussen</option>
                        <option value="Alonso">Alonso</option>
                        <option value="Vandoorne">Vandoorne</option>
                        <option value="Gasly">Gasly</option>
                        <option value="Hartley">Hartley</option>
                        <option value="Ericsson">Ericsson</option>
                        <option value="Leclerc">Leclerc</option>
                    </select>
                <button class="btn btn-choose" onclick="callDriver2()">Rinktis</button>
                </div>
                <div class="modal-footer modal-card-title">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Uždaryti</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="team_calc">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-card-title">
                    <h2 class="modal-title">Komanda</h2>
                    <button type="button" class="xbtn" data-dismiss="modal" area-label="Uždaryti"><i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="komandos">
                        <option value="" hidden selected>Komanda</option>
                        <option value="AMG">Mercedes</option>
                        <option value="Scuderia">Ferrari</option>
                        <option value="Redbull">Red Bull</option>
                        <option value="Force">Force India</option>
                        <option value="Williams">Williams</option>
                        <option value="Renaultsport">Renault</option>
                        <option value="Torro">Torro Rosso</option>
                        <option value="Haas">Haas</option>
                        <option value="McLaren">McLaren</option>
                        <option value="Sauber">Sauber</option>
                    </select>
                <button class="btn btn-choose" onclick="callTeam()">Rinktis</button>
                </div>
                <div class="modal-footer modal-card-title">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Uždaryti</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="engine_calc">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-card-title">
                    <h2 class="modal-title">Variklis</h2>
                    <button type="button" class="xbtn" data-dismiss="modal" area-label="Uždaryti"><i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="varikliai">
                        <option value="" hidden selected>Variklis</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="Renault">Renault</option>
                        <option value="Honda">Honda</option>
                    </select>
                <button class="btn btn-choose" onclick="callEngine()">Rinktis</button>
                </div>
                <div class="modal-footer modal-card-title">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Uždaryti</button>
                </div>
            </div>
        </div>
    </div>
</div>