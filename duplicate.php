<?php
include("includes/db.man.php");
 $projects = array();
 //$joule = $_SESSION['Id'];
 // fetch data from the database
 $seql = "SELECT idnumbers.Idnumber, idnumbers.Valid, idnumbers.AddOn, idnumbers.Profileid, profile.Fullname from idnumbers, profile GROUP BY idnumbers.Valid, profile.Fullname  WHERE idnumbers.Valid = 0 AND idnumber.Profileid = profile.Id";

 $records = mysqli_query($conn, $seql);
 if($records)
 {


?>

        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Duplacated Valid Ids
            </h2>
            <!-- CTA -->
           
           
            

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Full name</th>
                      <th class="px-4 py-3">Date Confirmed</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3">Action</th><th class="px-4 py-3"></th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  <?php 
                      while (  $row =  mysqli_fetch_assoc($records)    )
                      {
                          $projects[] = $row;
                          foreach ($projects as $project):
                  ?>
                      <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                         
                            <div>
                              <p class="font-semibold"><?= $project['profile.Fullname'];?></p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['idnumbers.AddOn'];?>
                        </td>
                        <td class="px-4 py-3 text-xs">
                          
                          <span
                            class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                           
                          </span>

                          
                        </td>
                       
                      </tr>
                      <?php endforeach; 
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
        </main>

        <?php

}
else{

}

?>