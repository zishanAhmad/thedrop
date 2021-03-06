
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/thedrop/index.php/admin/"> Dashboard</a>
                    </li>
                    <li>
                        <a href="/thedrop/index.php/admin/get_complaints"> Complaints</a>
                    </li>
                    <li class="active">
                      <a href="javascript:;" data-toggle="collapse" data-target="#tanker"> Tanker</a>
                      <ul id="tanker" class="collapse">
                          <li>
                              <a href="/thedrop/index.php/admin/tanker">View Tankers</a>
                          </li>
                          <li>
                              <a href="/thedrop/index.php/admin/add_tanker">Add Tanker</a>
                          </li>
                      </ul>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List of Tankers
                        </h1>
                        <!-- <h1><?php echo $tinfo[0]->route ?></h1> -->
          							<div>
          								<table class="table">
          									<tr>
          										<th>Tanker ID</th>
          										<th>Place</th>
          										<th>Arrival Time</th>
          										<th>Departure Time</th>
          										<th>Vehicle ID</th>
          										<th>Filling Time</th>
          									</tr>

          										<?php
          											foreach($tinfo as $t) {
          												echo "<tr>";
          												echo "<td>$t->tid</td>";
          												echo "<td>$t->place</td>";
          												echo "<td>$t->arrival</td>";
          												echo "<td>$t->departure</td>";
          												echo "<td>$t->vid</td>";
          												echo "<td>$t->filling</td>";
          												echo "</tr>";
          											}
          										?>
          								</table>
          							</div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
