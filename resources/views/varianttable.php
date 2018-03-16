<?php echo View::make('layout'); ?>
<?php echo View::make('navbar'); ?>
<?php echo View::make('BootstrapTable'); ?>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Variant Table</h2>
                </div>
                <div class="col-lg-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                        <span>Add New Varient</span></a>

                </div>

            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>

                <th class='space'>S.No.</th>
                <th class='space'>Product Title</th>
                <th class='space'>Sku</th>
<!--                <th class='space'>Title</th>-->
                <th class='space'>Price</th>
                <th class='space'>Inventory Quantity</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $i = 0;
            foreach ($showdata as $data) {

                echo "<tr><td class='space'>" . ++$i . "</td>";

                echo "<td class='space'>" . $data->product_title . "</td>";
                echo "<td class='space'>" . $data->sku . "</td>";
//                echo "<td class='space'>" . $data->title . "</td>";
               echo "<td class='space'>" . $data->price . "</td>";
                echo "<td class='space'>" . $data->inventory_quantity . "</td>";
                echo "<td><a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\"
                                                                                 data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\"
                                                                                     data-toggle=\"tooltip\"
                                                                                     title=\"Delete\">&#xE872;</i></a> 
                   </td>";

            }
            ?>



            </tr>
            </tbody>
        </table>
    </div>
</div>
