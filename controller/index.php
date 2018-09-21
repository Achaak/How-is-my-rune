<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121446205-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-121446205-1');
        </script>

    <title>How is my rune ? | SWRATE</title>
    <meta name="description" content="" />
    <meta property="og:title" content="How is my rune ? | SWRATE" />
    <meta property="og:description" content='"How is my rune?" is a rune management tools for the game Summoners War.' />
    <meta property="og:image" content="view/pictures/logo-swrate.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://swrate.com/" />
    
    <meta name="robots" content="index,follow"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="view/css/common.css">

        <link type="text/css" rel="stylesheet" href="framework/jquery-ui/jquery-ui.min.css">
        <link type="text/css" rel="stylesheet" href="framework/flexbox/flexboxgrid.min.css">
        <link type="text/css" rel="stylesheet" href="framework/input-multi-choice/input-multi-choice.css">
    <!-- END CSS -->

    <link rel="icon" href="view/pictures/logo-swrate.ico">
</head>
<body>

    <!-- INFO -->
        <!-- INFO ICON -->
            <div class='icon-info modal-btn'></div>
        <!-- END INFO ICON -->

        <!-- INFO MODAL -->
            <div class='modal-info modal-background'>
                <div class='modal-content-flex'>
                    <div class='modal-content'>
                        <div class='close'>×</div>
                        <div class='row'>
                            <div class='part col-xs-12'>
                                <h2>PRESENTATION</h2>
                                <p>Welcome to "How is my rune"! This website is intended for Summoners War game. Its function is to help you to calculate, sort or find the usefulness of your runes.</p>
                            </div>

                            <div class='col-xs-6'>
                                <div class='part'>
                                    <h2>HOW TO USE « TEST A RUNE »?</h2>
                                    <p>This tool allows you to test the efficiency of a rune. To do this, simply fill in the statistics of your rune, as well as the level of this one. The tool will return you the efficiency and max efficiency, as well as the use that you will be able to make of it.</p>
                                </div>
                                <div class='part'>
                                    <h2>HOW TO USE « TEST MY RUNES »?</h2>
                                    <p>This tool allows you to display all your runes with their efficiency and utilities. To do this you will have to import your JSON file previously recovered serious software <a href='https://github.com/Xzandro/sw-exporter/releases' target='_blank'>SW-EXPORTER</a> or <a href='https://github.com/kakaroto/SWProxy/releases' target='_blank'>SWProxy</a>. After that, you can navigate through your runes by choosing parameters.</p>
                                </div>
                            </div>

                            
                            <div class='col-xs-3'>
                                <div class='part'>
                                    <h2>NEW FEATURES</h2>
                                    <ul class='features'>
                                        <li>
                                            <ul>
                                                <span class='date-feature'>19/09/2018</span>
                                                <li>- Added the rune removal feature</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class='col-xs-3'>
                                <div class='part'>
                                    <h2>Credit</h2>
                                    <p>Create by <a href='https://github.com/Achaak' target='_blank'>Achak</a></p>
                                </div>
                                <div class='part'>
                                    <h2>Source</h2>
                                    <p>These calculations are based on Barion's Rune Efficiency Theory.</p>
                                    <p>The utility of the runes is based on <a href='https://www.reddit.com/user/Aknologya' target='_blank'>Aknologya</a>'s graphic on Reddit.</p>
                                </div>
                                <div class='part'>
                                    <h2>SUPPORTS</h2>
                                    <p>If you want to support the website or the creator: <a href='https://www.paypal.me/Achaak' target='_blank'>Paypal</a>.</p>
                                </div>
                            </div>
                            
                            <div class='part footer col-xs-12'>
                                <ul>
                                    <li><a href='https://github.com/Achaak/How-is-my-rune'>Github</a></li>
                                    <li>© Achak <?php echo date('Y'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END INFO MODAL -->
    <!-- END INFO -->
    

    <!-- DELETE RUNE -->
        <!-- DELETE RUNE MODAL -->
            <div class='modal-delete-rune modal-background'>
                <div class='modal-content-flex'>
                    <div class='modal-content'>
                        <div class='part'>
                            <p>Do you want to delete this rune ?</p>
                        </div>
                        <div class='part div-btn'>
                            <div class='btn delete'>DELETE</div>
                            <div class='btn cancel'>CANCEL</div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END DELETE RUNE MODAL -->
    <!-- END DELETE RUNE -->


    <!-- HEADER -->
        <header>
            <h1>How is my rune ?</h1>
        </header>
    <!-- END HEADER -->
    
    <nav>
        <ul>
            <li class='selected'>Test a rune</li>
            <li>Test my runes</li>
        </ul>
    </nav>

    <!-- SECTION -->
        <section>
            <article class='rune-tester'>
                <div class='results-rune-tester'>
                    <div class='result-rune-tester actual-efficiency'>
                        <span class='title'>ACTUAL EFFICIENCY</span>
                        <span class='efficiency'>
                            <span class='number'>--</span>%
                        </span>
                    </div>

                    <div class='result-rune-tester max-efficiency'>
                        <span class='title'>MAX EFFICIENCY</span>
                        <span class='efficiency'>
                            <span class='number'>--</span>%
                        </span>
                    </div>
                </div>
                <div class='results-rune-tester'>
                    <div class='result-rune-tester utility'>
                        <span class='title'>UTILITIES</span>
                        <ul class='type-utility'>
                            <li>---</li>
                        </ul>
                    </div>
                </div>

                <table>
                    <tr>
                        <th>
                            <span>Rune level</span>
                        </th>
                        <td>
                            <select class='rune-level'>
                                <?php 
                                    for ($i=0; $i <= 15; $i++) { 
                                        echo "<option value='".$i."'>".$i."</option>";
                                    }
                                ?>                                
                            </select>
                        </td>
                    </tr>
                    <tr class='main-stat'>
                        <th>
                            <span>Main stat</span>
                        </th>
                        <td>
                            <select class='stat-type'>
                                <option value=''>---</option>
                                <option value='SPD'>SPD</option>
                                <option value='ATK%'>ATK%</option>
                                <option value='ATK flat'>ATK flat</option>
                                <option value='DEF%'>DEF%</option>
                                <option value='DEF flat'>DEF flat</option>
                                <option value='HP%'>HP%</option>
                                <option value='HP flat'>HP flat</option>
                                <option value='CRate'>CRate</option>
                                <option value='CDmg'>CDmg</option>
                                <option value='RES'>RES</option>
                                <option value='ACC'>ACC</option>
                            </select>
                        </td>
                    </tr>
                    <tr class='stat innate-stat'>
                        <th>
                            <span>Innate stat</span>
                        </th>
                        <td>
                            <select class='stat-type'>
                                <option value=''>---</option>
                                <option value='SPD'>SPD</option>
                                <option value='ATK%'>ATK%</option>
                                <option value='ATK flat'>ATK flat</option>
                                <option value='DEF%'>DEF%</option>
                                <option value='DEF flat'>DEF flat</option>
                                <option value='HP%'>HP%</option>
                                <option value='HP flat'>HP flat</option>
                                <option value='CRate'>CRate</option>
                                <option value='CDmg'>CDmg</option>
                                <option value='RES'>RES</option>
                                <option value='ACC'>ACC</option>
                            </select>
                        </td>
                        <td>
                            <input type='number' class='stat-value'>
                        </td>
                    </tr>
                    <tr class='stat stat-one'>
                        <th>
                            <span>Stat 1</span>
                        </th>
                        <td>
                            <select class='stat-type'>
                                <option value=''>---</option>
                                <option value='SPD'>SPD</option>
                                <option value='ATK%'>ATK%</option>
                                <option value='ATK flat'>ATK flat</option>
                                <option value='DEF%'>DEF%</option>
                                <option value='DEF flat'>DEF flat</option>
                                <option value='HP%'>HP%</option>
                                <option value='HP flat'>HP flat</option>
                                <option value='CRate'>CRate</option>
                                <option value='CDmg'>CDmg</option>
                                <option value='RES'>RES</option>
                                <option value='ACC'>ACC</option>
                            </select>
                        </td>
                        <td>
                            <input type='number' class='stat-value'>
                        </td>
                    </tr>
                    <tr class='stat stat-two'>
                        <th>
                            <span>Stat 2</span>
                        </th>
                        <td>
                            <select class='stat-type'>
                                <option value=''>---</option>
                                <option value='SPD'>SPD</option>
                                <option value='ATK%'>ATK%</option>
                                <option value='ATK flat'>ATK flat</option>
                                <option value='DEF%'>DEF%</option>
                                <option value='DEF flat'>DEF flat</option>
                                <option value='HP%'>HP%</option>
                                <option value='HP flat'>HP flat</option>
                                <option value='CRate'>CRate</option>
                                <option value='CDmg'>CDmg</option>
                                <option value='RES'>RES</option>
                                <option value='ACC'>ACC</option>
                            </select>
                        </td>
                        <td>
                            <input type='number' class='stat-value'>
                        </td>
                    </tr>
                    <tr class='stat stat-three'>
                        <th>
                            <span>Stat 3</span>
                        </th>
                        <td>
                            <select class='stat-type'>
                                <option value=''>---</option>
                                <option value='SPD'>SPD</option>
                                <option value='ATK%'>ATK%</option>
                                <option value='ATK flat'>ATK flat</option>
                                <option value='DEF%'>DEF%</option>
                                <option value='DEF flat'>DEF flat</option>
                                <option value='HP%'>HP%</option>
                                <option value='HP flat'>HP flat</option>
                                <option value='CRate'>CRate</option>
                                <option value='CDmg'>CDmg</option>
                                <option value='RES'>RES</option>
                                <option value='ACC'>ACC</option>
                            </select>
                        </td>
                        <td>
                            <input type='number' class='stat-value'>
                        </td>
                    </tr>
                    <tr class='stat stat-four'>
                        <th>
                            <span>Stat 4</span>
                        </th>
                        <td>
                            <select class='stat-type'>
                                <option value=''>---</option>
                                <option value='SPD'>SPD</option>
                                <option value='ATK%'>ATK%</option>
                                <option value='ATK flat'>ATK flat</option>
                                <option value='DEF%'>DEF%</option>
                                <option value='DEF flat'>DEF flat</option>
                                <option value='HP%'>HP%</option>
                                <option value='HP flat'>HP flat</option>
                                <option value='CRate'>CRate</option>
                                <option value='CDmg'>CDmg</option>
                                <option value='RES'>RES</option>
                                <option value='ACC'>ACC</option>
                            </select>
                        </td>
                        <td>
                            <input type='number' class='stat-value'>
                        </td>
                    </tr>
                </table>
            </article>

            <article class='runes-tester'>
                <div class='menu'>
                    <div class='tools'>
                        <div class='row'>

                            <div class='col-xs-4 tool input-multi-choice'>
                                <label for='search-set'>Set</label>
                                <div class='selected' id='search-set'>

                                </div>
                                <div class='possible-choice'>
                                    <span>Accuracy</span>
                                    <span>Blade</span>
                                    <span>Despair</span>
                                    <span>Destroy</span>
                                    <span>Determination</span>
                                    <span>Endure</span>
                                    <span>Energy</span>
                                    <span>Enhance</span>
                                    <span>Fatal</span>
                                    <span>Fight</span>
                                    <span>Focus</span>
                                    <span>Guard</span>
                                    <span>Nemesis</span>
                                    <span>Rage</span>
                                    <span>Revenge</span>
                                    <span>Shield</span>
                                    <span>Swift</span>
                                    <span>Tolerance</span>
                                    <span>Vampire</span>
                                    <span>Violent</span>
                                    <span>Will</span>
                                </div>                                
                            </div>

                            <div class='col-xs-4 tool input-multi-choice'>
                                <label for='search-slot'>Slot</label>
                                <div class='selected' id='search-slot'>

                                </div>
                                <div class='possible-choice'>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                    <span>4</span>
                                    <span>5</span>
                                    <span>6</span>
                                </div>                                
                            </div>

                            <div class='col-xs-4 tool input-multi-choice'>
                                <label for='search-main-stat'>Main stat</label>
                                <div class='selected' id='search-main-stat'>

                                </div>
                                <div class='possible-choice'>
                                    <span>HP%</span>
                                    <span>HP flat</span>
                                    <span>ATK%</span>
                                    <span>ATK flat</span>
                                    <span>DEF%</span>
                                    <span>DEF flat</span>
                                    <span>SPD</span>
                                    <span>CRate</span>
                                    <span>CDmg</span>
                                    <span>RES</span>
                                    <span>ACC</span>
                                </div>                                
                            </div>
                            

                            <div class='col-xs-4 tool'>
                                <label for='range-slider-grade'>Grade</label>
                                <span class='value-slider'>1 - 6</span>
                                <div id='range-slider-grade'>
                                </div>
                            </div>
                            
                            <div class='col-xs-4 tool'>
                                <label for='range-slider-level'>Level</label>
                                <span class='value-slider'>0 - 15</span>
                                <div id='range-slider-level'>
                                </div>
                            </div>


                            <div class='col-xs-4 tool input-multi-choice'>
                                <label for='search-second-stat'>Second stat</label>
                                <div class='selected' id='search-second-stat'>

                                </div>
                                <div class='possible-choice'>
                                    <span>HP%</span>
                                    <span>HP flat</span>
                                    <span>ATK%</span>
                                    <span>ATK flat</span>
                                    <span>DEF%</span>
                                    <span>DEF flat</span>
                                    <span>SPD</span>
                                    <span>CRate</span>
                                    <span>CDmg</span>
                                    <span>RES</span>
                                    <span>ACC</span>
                                </div>                                
                            </div>


                            <div class='col-xs-4 tool'>
                                <label for='search-location'>Location</label>
                                <select id='search-location'>
                                    <option value='0'>All</option>
                                    <option value='1'>Inventory</option>
                                    <option value='2'>Equipped on monsters</option>
                                </select>
                            </div>

                            <div class='col-xs-4 tool input-multi-choice'>
                                <label for='search-utility'>Utility</label>
                                <div class='selected' id='search-utility'>

                                </div>
                                <div class='possible-choice'>
                                    <span>Accuracy nuker</span>
                                    <span>ATK nuker</span>
                                    <span>Bombers</span>
                                    <span>DEF nuker</span>
                                    <span>Healer/support</span>
                                    <span>Healer/support ATK</span>
                                    <span>Healer/support RES</span>
                                    <span>HP nuker</span>
                                    <span>Nuker</span>
                                    <span>Raid frontliners</span>
                                    <span>Raid monster</span>
                                    <span>Slow accuracy nuker</span>
                                    <span>Slow ATK nuker</span>
                                    <span>Slow DEF nuker</span>
                                    <span>Slow healer/support</span>
                                    <span>Slow HP nuker</span>
                                </div>                                
                            </div>

                            <div class='col-xs-4 tool input-multi-choice'>
                                <label for='search-quality'>Quality</label>
                                <div class='selected' id='search-quality'>

                                </div>
                                <div class='possible-choice'>
                                    <span>Unknown</span>
                                    <span>Normal</span>
                                    <span>Magic</span>
                                    <span>Rare</span>
                                    <span>Hero</span>
                                    <span>Legendary</span>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class='upload'>
                        <form class='import-json'>
                            <div class="input-file-container">
                                <input type="file" id="input-file" class='input-file' name="input-file" accept=".json">
                                <div class='text-input-file'>
                                    <img src='view/pictures/load.gif' class='import-loader' label='Icone de chargement'>
                                    <label for="input-file" class='name-input-file'>Select JSON file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class='nbRuneByPage'>
                    <span>Show</span>
                    <select>
                        <option value='-1'>All</option>
                        <option value='10' selected>10</option>
                        <option value='25'>25</option>
                        <option value='50'>50</option>
                        <option value='100'>100</option>
                    </select>
                    <span>runes</span>
                </div>

                <div class='div-table-list-runes'>
                    <div class='loading'><div class='loading-image'></div></div>
                    <table class='list-runes sort'>
                        <thead>
                            <tr class="tr-subtile">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th colspan='2'>Main stat</th>
                                <th colspan='2'>Innate stat</th>
                                <th colspan='11'>Substats</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th data-sort="string"><span>Location</span></th>
                                <th data-sort="string"><span>Set</span></th>
                                <th data-sort="int"><span>Slot</span></th>
                                <th data-sort="int"><span>Grade</span></th>
                                <th data-sort="int"><span>Level</span></th>
                                <th data-sort="string"><span>Quality</span></th>
                                
                                <th data-sort="string"><span>Type</span></th>
                                <th data-sort="int"><span>Value</span></th>

                                <th data-sort="string"><span>Type</span></th>
                                <th data-sort="int"><span>Value</span></th>

                                <th data-sort="int"><span>HP%</span></th>
                                <th data-sort="int"><span>HP</span></th>
                                <th data-sort="int"><span>ATK%</span></th>
                                <th data-sort="int"><span>ATK</span></th>
                                <th data-sort="int"><span>DEF%</span></th>
                                <th data-sort="int"><span>DEF</span></th>
                                <th data-sort="int"><span>SPD</span></th>
                                <th data-sort="int"><span>CRate</span></th>
                                <th data-sort="int"><span>CDmg</span></th>
                                <th data-sort="int"><span>RES</span></th>
                                <th data-sort="int"><span>ACC</span></th>

                                <th data-sort="float"><span>Eff.%</span></th>
                                <th data-sort="float"><span>Max Eff.%</span></th>
                                <th data-sort="string"><span>Utilities</span></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>

                <div class='pages unselect'>

                </div>
            </article>
        </section>
    <!-- END SECTION -->


    
    <!-- FOOTER -->
        <footer>
        </footer>
    <!-- END FOOTER -->



    <!-- JAVASCRIPT -->
        <script src="framework/jquery/jquery.min.js"></script>
        <script src="framework/jquery-ui/jquery-ui.min.js"></script>
        <script src="framework/stupidtable/stupidtable.min.js"></script>
        <script src="framework/input-multi-choice/input-multi-choice.js"></script>
        
        <script src="controller/js/other.js"></script>
        <script src="controller/js/rune-tools.js"></script>
        <script src="controller/js/tools.js"></script>
        <script src="controller/js/modale.js"></script>
        <script src="controller/js/nav.js"></script>
        <script src="controller/js/import-runes.js"></script>
        <script src="controller/js/test-a-rune.js"></script>
        <script src="controller/js/test-my-runes.js"></script>
        <script src="controller/js/test-my-runes-table.js"></script>
        
        <script type="text/javascript">
            var minSliderLevel = 0;
            var maxSliderLevel = 15;
            var minSliderGrade = 1;
            var maxSliderGrade = 6;
            
            $(document).ready(function(){   
                $("table.sort").stupidtable();

                $("#range-slider-level").slider({
                    range: true,
                    min: 0,
                    max: 15,
                    values: [ 0, 15 ],
                    slide: function( event, ui ) {
                        minSliderLevel = ui.values[0];
                        maxSliderLevel = ui.values[1];

                        $(event.target).parent().find('.value-slider').html(ui.values[0] + ' - ' + ui.values[1]);
                        toolsDisplayRunes();
                    }
                });                

                $("#range-slider-grade").slider({
                    range: true,
                    min: 1,
                    max: 6,
                    values: [ 1, 6 ],
                    slide: function( event, ui ) {
                        minSliderGrade = ui.values[0];
                        maxSliderGrade = ui.values[1];

                        $(event.target).parent().find('.value-slider').html(ui.values[0] + ' - ' + ui.values[1]);
                        toolsDisplayRunes();                        
                    }
                });
            });
        </script>
    <!-- END JAVASCRIPT -->
</body>
</html>	