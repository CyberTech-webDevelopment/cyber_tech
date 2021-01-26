<?php
           include "../heder.php";
          //  if(empty($_SESSION['login']) || $_SESSION['login']!="admin"){
          
          //      header('location:../index.php');
          // }


        ?>
    <body>
        <?php
           include "../menu.php";
           include "../../config/config.php";
           require_once "../../classes/DB.class.php";
           $db=new DB();
           $db->tblname='clients';
        ?>
            
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card data-tables">
                                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="fresh-datatables">
                                        
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Full name</th>
                                                    <th>company name</th>
                                                    <th>email</th>
                                                    <th>country name / code</th>
                                                    <th>phone number</th>
                                                    <th>project description</th>
                                                    <th>message</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Full name</th>
                                                    <th>company name</th>
                                                    <th>email</th>
                                                    <th>country name / code</th>
                                                    <th>phone number</th>
                                                    <th>project description</th>
                                                    <th>message</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody id="sortable">
                                                    <?php 
                                                    $count=0;
                                                    $sql="SELECT * FROM clients";
                                                    $result=mysqli_query($con, $sql);
                                                    while($row=mysqli_fetch_assoc($result)){
                                                      $count++;
                                                        echo " <tr name=".$row['id']."><td class='first_td'>".$count."</td>
                                                               <td class='full_name'>".$row['full_name']."</td>
                                                               <td class='company_name'>".$row['company_name']."</td>
                                                               <td class='email'>".$row['email']."</td>
                                                               <td class='country_name'>".$row['country_name']."</td>
                                                               <td class='phone_number'>".$row['phone_number']."</td>
                                                               <td class='p_description'>".$row['project_description']."</td>
                                                               <td class='message'>".$row['message']."</td>
                                                               <td class='text-right'>
                                                                   <a href='client-file.php?".$row['id']."' class='btn btn-link btn-warning edit a_edit' name=".$row['id']."><i class='fa fa-external-link'></i></a>
                                                                   <a href='#' class='btn btn-link btn-danger remove' data_name=".$row['id']."><i class='fa fa-times'></i></a>
                                                               </td>
                                                               </tr>";
                                                    }
                                                    ?>
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php 
                include "../footer.php";
             ?>
             <script >
                $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });
                // var table = $('#datatables').DataTable();
             </script>
</body>
</html>