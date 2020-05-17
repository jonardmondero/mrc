       <?php
    $search = "CALL spSearchCustomer()";
    $exec_search = $con->prepare($search);
    $exec_search->execute();
       
       ?>        
               
               
                <table id="customers" class="table table-bordered table-hover ">
                      <thead>
                      
                       
                            <th> ID </th>
                            <th> Name </th>
                            <th> Contact No. </th>
                            <th > Address</th>                                                                 
                        
                      </thead>
                    
                      <tbody>
                      <?php while($result = $exec_search->fetch(PDO::FETCH_ASSOC)){ ?> 
                      <tr>
                        <td><?php echo $result['id']  ?></td>
                        <td><?php echo $result['name']  ?></td>
                        <td><?php echo $result['contactno']  ?></td>
                        <td><?php echo $result['address']  ?></td>
                      <?php }   ?>
                      </tr>

                      </tbody>
                    </table>

