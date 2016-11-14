<div class="Wrapper" ng-app="myApp">
    <div class="Sidebar" ng-class="boolie ? 'is-collapsed' : ''">
        <header class="Sidebar-header">
            <div class="Sidebar-logo"></div>
        </header>
        <nav role="navigation">
            <ul>
                <li class="Sidebar-navItem">
                    <p> <?php echo $keywords ?></a> </p>
                </li>

                <li class="Sidebar-navItem" data-toggle="modal" data-target="#graphModal">
                    <a href="">Choose Graph </a>
                </li>
                <li class="Sidebar-navItem" data-toggle="modal" data-target="#exportModal">
                    <a href="#">Export graph</a>
                </li>
                <li class="Sidebar-navItem" data-toggle="modal" data-target="#importModal">
                    <a href="#">Import graph</a>
                </li>
                <li class="Sidebar-navItem" data-toggle="modal" data-target="#importModal">
                    <a href="<?php echo site_url('home/userscenario')?>">JSON</a>
                </li>
            </ul>
        </nav>

        <footer class="Sidebar-footer" ng-click="boolie = !boolie">
            <i class="Sidebar-toggleArrow Sidebar-menuIcon fa fa-arrow-left" ng-class="boolie ? 'rotate' : ''"></i>
            <span class="Sidebar-toggleText">Minimize menu</span>
        </footer>
    </div>

    <!-- Graph pop-up modal -->
    <div class="modal fade" id="graphModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Choose graph</h4>

                </div>
                <div class="modal-body">
                    <p> <a href=" <?php echo site_url('home')?>" style="color: black">Line Chart </a> </p>
                    <p> <a href=" <?php echo site_url('home/area_graph')?>" style="color: black">Area Chart </a> </p>
                    <p> <a href=" <?php echo site_url('home/bar_graph')?>" style="color: black">Bar Chart </a> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Export graph pop-up modal -->
    <div class="modal fade" id="exportModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Click on the type of file you want to export the graph</h4>
                </div>
                <div class="modal-body">
                    <p style="color: #000000">Table View </p>
                    <p style="color: #000000">CSV </p>
                    <p style="color: #000000">JSON </p>
                    <p style="color: #000000">XML </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Import graph pop-up modal -->
    <div class="modal fade" id="importModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Click on the type of file you want to import </h4>
                </div>
                <div class="modal-body">
                    <p> <a href="<?php echo site_url('home/upload')?>" style="color: black">CSV </a> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>