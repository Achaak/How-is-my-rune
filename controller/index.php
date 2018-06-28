<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-2433389260772608",
        enable_page_level_ads: true
    });
    </script>

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
                        <div class='part'>
                            <h2>How to use ?</h2>
                            <p>Enter the stats of your rune and look at the efficiency of this one. It's simple ! :D</p>
                        </div>
                        <div class='part'>
                            <h2>Credit</h2>
                            <p>Create by <a href='https://github.com/Achaak' target='_blank'>Achak</a></p>
                        </div>
                        <div class='part'>
                            <h2>Source</h2>
                            <p>These calculations are based on Barion's Rune Efficiency Theory.</p>
                            <p>The utility of the runes is based on <a href='https://www.reddit.com/user/Aknologya' target='_blank'>Aknologya</a>'s graphic on Reddit.</p>
                        </div>
                        
                        <div class='part footer'>
                            <ul>
                                <li><a href='https://github.com/Achaak/How-is-my-rune'>Github</a></li>
                                <li>© Achak <?php echo date('Y'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END INFO MODAL -->
    <!-- END INFO -->


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
                            <div class='col-md-4'>
                                <label for='search-location'>Location</label>
                                <select id='search-location'>
                                    <option value='0'>All</option>
                                    <option value='1'>Inventory</option>
                                    <option value='2'>Equipped on monsters</option>
                                </select>
                            </div>

                            <div class='col-md-4 input-multi-choice'>
                                <label for='search-main-stat'>Main stat</label>
                                <div class='selected' id='search-main-stat'>

                                </div>
                                <div class='possible-choice'>
                                    <span>HP%</span>
                                    <span>HP</span>
                                    <span>ATK%</span>
                                    <span>ATK</span>
                                    <span>DEF%</span>
                                    <span>DEF</span>
                                    <span>SPD</span>
                                    <span>CRate</span>
                                    <span>CDmg</span>
                                    <span>RES</span>
                                    <span>ACC</span>
                                </div>                                
                            </div>

                            <div class='col-md-4 input-multi-choice'>
                                <label for='search-quality'>Quality</label>
                                <div class='selected' id='search-quality'>

                                </div>
                                <div class='possible-choice'>
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

                <table class='list-runes sort'>
                    <thead>
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
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>

                <div class='pages'>

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

        <script src="model/js/data/list_monsters.js"></script>
        
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
            $(document).ready(function(){   
                $("table.sort").stupidtable();
            });
        </script>
    <!-- END JAVASCRIPT -->
</body>
</html>	