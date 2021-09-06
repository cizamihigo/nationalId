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
 $projects = array();
 //$joule = $_SESSION['Id'];
 // fetch data from the database
 $seql = "SELECT idnumbers.Idnumber, idnumbers.Valid, idnumbers.AddOn, idnumbers.Profileid, COUNT(idnumbers.Profileid), profile.Fullname from idnumbers, profile GROUP BY idnumbers.Valid, profile.Fullname HAVING COUNT(idnumbers.Valid)>1 WHERE idnumbers.Valid = 1 AND idnumber.Profileid = profile.Id";

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
                          <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div
                              class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                            >
                              <img
                                class="object-cover w-full h-full rounded-full"
                                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                alt=""
                                loading="lazy"
                              />
                              <div
                                class="absolute inset-0 rounded-full shadow-inner"
                                aria-hidden="true"
                              ></div>
                            </div>
                            <div>
                              <p class="font-semibold"><?= $project['profile.Fullname'];?></p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['idnumbers.AddOn'];?>
                        </td>
                        <td class="px-4 py-3 text-xs">
                          <?php
                             $st = $project['idnumbers.Valid'];
                             if($st == 1 )
                             {

                          ?>
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            Invalidate
                          </span>
                          <?php }
                          else
                          {
                            ?>
                          <span
                            class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            ...
                          </span>

                          <?php
                          }
                          
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
              </div>
              
            </div>

                </div>
              </div>
            </div>
          </div>
        </main>

<?php

}
else
{
    $alldata= "SELECT idnumbers.Idnumber, idnumbers.Valid, idnumbers.AddOn, idnumbers.Profileid, profile.Fullname, COUNT(Valid) from idnumbers, profile WHERE idnumbers.Valid = 1 AND idnumbers.Profileid= profile.Id";
    $record = mysqli_query($conn, $alldata);
?>
<body>
<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
               Valid Ids 
            </h2> <a href='invalidated.php'>Invalid Id</a>
            
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
                      <th class="px-4 py-3">Status</th>
                      
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

                            echo("Hey");
                  ?>
                      <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div>
                              <p class="font-semibold"><?= $project['Fullname'];?></p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['Idnumber'];?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['AddOn'];?>
                        </td>
                        <td class="px-4 py-3 text-xs">
                          <?php
                             $st = $project['Valid'];
                             if($st == 1 )
                             {

                          ?>
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            Invalidate
                          </span>
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
                <span class="flex items-center col-span-3">
                  Pending user requests <?=$project['COUNT(Valid)']?>
                </span>
                <span class="col-span-2"></span>
                
              </div>
            </div>
   
              
            </div>

                </div>
              </div>
            </div>
          </div>
        </main>


<?php
}?>
</body>
