<?php
    $pagename = "users management";
    include("head.php");
    include("includes/header.php");


?>
<?php
    include("includes/db.man.php");
     $projects = array();
     $joule = $_SESSION['Id'];
     // fetch data from the database
     $seql = "SELECT * FROM connect Where Type = 1 ORDER BY  Id DESC";
     $records = mysqli_query($conn, $seql);
?>
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    
    <script src="./assets/js/init-alpine.js"></script>
    
  </head>
<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Availlable users
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
                      <th class="px-4 py-3">Id</th>
                      <th class="px-4 py-3">Email</th>
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
                        
                        <td class="px-4 py-3 text-sm">
                          <?=$project['Id'];?>
                        </td>
                        <td class="px-4 py-3 text-xs">
                          <?php
                             $st = $project['Email'];
                            echo($st);
                          ?>
                        
                        </td>
                        <td class="px-4 py-3 text-sm">
                          
                            <a href="uprofile.php?Id=<?=$project['Id']?>"><button>Profile </button></a>
                          </td> <td>
                           
                        </td>
                       
                      </tr>
                      <?php endforeach; 
                          }
                      ?>
                  
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Pending user requests
                </span>
                <span class="col-span-2"></span>
                
              </div>
            </div>

                </div>
              </div>
            </div>
          </div>
        </main>