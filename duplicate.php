<?php
$pagename = "All Invalidated Id";
include("head.php");
include("includes/header.php");

?>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="./assets/css/tailwind.output.css" />

<script src="./assets/js/init-alpine.js"></script>

</head>
<?php
include("includes/db.man.php");
 $projects = array();
 //$joule = $_SESSION['Id'];
 // fetch data from the database
 $seql = "SELECT idnumbers.*, profile.Fullname FROM idnumbers, profile  WHERE idnumbers.Valid = 1 AND profile.Id = idnumbers.Profileid ORDER BY idnumbers.Profileid ASC, idnumbers.AddOn ASC";

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
                      <th class="px-4 py-3">Id number</th>
                      <th class="px-4 py-3">User Name</th>
                      <th class="px-4 py-3">Date Confirmed</th>
                      <th class="px-4 py-3">Attribute</th>
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
                              <p class="font-semibold"><?= $project['IdNumber'];?></p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['Fullname'];?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['AddOn'];?>
                        </td>
                        <td class="px-4 py-3 text-xs">
                          
                          <span
                            class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            
                          Duplicate
                          </span>

                          
                        </td>
                        <td class="px-4 py-3">
                        <a href="includes/dup.clean.php?prof=<?=$project['Id'];?>">Disactivate</a>
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
    echo("not ending my page");
}

?>