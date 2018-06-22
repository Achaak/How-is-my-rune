<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

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
                <div class='modal-content'>
                    <div class='close'>×</div>
                    <div class='part'>
                        <h2>How to use ?</h2>
                        <p></p>
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
                </div>
            </div>
        <!-- END INFO MODAL -->
    <!-- END INFO -->


    <!-- HEADER -->
        <header>
            <h1>How is my rune ?</h1>
        </header>
    <!-- END HEADER -->
    
    

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
        </section>
    <!-- END SECTION -->


    
    <!-- FOOTER -->
        <footer>

        </footer>
    <!-- END FOOTER -->



    <!-- JAVASCRIPT -->
        <script src="framework/jquery/jquery.min.js"></script>
        <script src="framework/jquery-ui/jquery-ui.min.js"></script>
        <script src="controller/js/rune.js"></script>
        <script src="controller/js/rune-efficiency.js"></script>
        <script src="controller/js/modale.js"></script>
        
        <script type="text/javascript">
        </script>
    <!-- END JAVASCRIPT -->
</body>
</html>