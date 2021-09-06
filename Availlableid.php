<?php
$pagename = "Availlable Id";
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

    $alldata= "SELECT idnumbers.*,  profile.Fullname FROM idnumbers, profile WHERE idnumbers.Valid = 1 AND idnumbers.Profileid= profile.Id ORDER BY idnumbers.Id DESC";
    $record = mysqli_query($conn, $alldata);
?>
<body>
  <center>
  <table style="margin-bottom: 20px">
  <tr style="text-align: center">
    <td> <pre>  <a href='invalidated.php'>Invalid Id</a></td> <td>     |        </pre></td>
    <td><pre><a href='duplicate.php'>Duplicated Id</a></td></pre>
  </tr>
  <tr></tr>
  <td colspan='3'></td>
</table>
  </center>
<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
          
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
               Valid Ids 
            </h2> 
            
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Full name</th>
                      <th class="px-4 py-3">Id number</th>
                      <th class="px-4 py-3">Date Confirmed</th>
                      <th class="px-4 py-3">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  <?php 
                      while (  $row =  mysqli_fetch_assoc($record)    )
                      {
                          $projects[] = $row;
                          foreach ($projects as $project):
                  ?>
                      <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div>
                              <p class="font-semibold"><?= $project['Fullname'];?></p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['IdNumber'];?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['AddOn'];?>
                        </td>
                        <td class="px-4 py-3 text-xs">
                          <?php
                             $st = $project['Valid'];
                             if($st == 1 )
                             {
                               $val = $project['Id'];

                          ?>
                        <a href="includes/invalid.php?prof=<?=$val?>"><span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            Invalidate
                          </span> </a>
                          <?php }
                          
                          ?>
                        </td>
                       
                      </tr>
                      <?php endforeach; 
                          }
                      ?>
                  <?php
                  ?>
                    
                  </tbody>
                </table>
             
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
              
                <span class="col-span-2"></span>
                
              </div>
            </div>
   
              
            </div>

                </div>
              </div>
            </div>
          </div>
        </main>
</body>
