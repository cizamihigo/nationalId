<?php
$pagename = "User Dashboard";
include("head.php");
include("includes/header.php"); 

if(isset($_SESSION['Id']))
{
  $pagename = $_SESSION['Email']."Dashboard";
  include_once("includes/header.php");
  
}
else{
  header("Location: login.php");
  exit();
}


?>
<?php
    include("includes/db.man.php");
     $projects = array();
     $joule = $_SESSION['Id'];
     // fetch data from the database
     $seql = "SELECT * FROM request WHERE ReqStatus = 'Pending' ORDER  BY  ReqDate DESC";
     $records = mysqli_query($conn, $seql);
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    
    <script src="./assets/js/init-alpine.js"></script>
    
  </head>
  <body>
    
  
     
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
        
            
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for projects"
                  aria-label="Search"
                />
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
             
              <!-- Profile menu -->
             
            </ul>
          </div>
        </header>
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Dashboard
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
                      <th class="px-4 py-3">Request Id</th>
                      <th class="px-4 py-3">Date</th>
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
                              <p class="font-semibold"><?= $project['ReqName'];?></p>
                              <p class="text-xs text-gray-600 dark:text-gray-400">
                                User request <?= $project['ConnectId'];?>
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?=$project['ReqDate'];?>
                        </td>
                        <td class="px-4 py-3 text-xs">
                          <?php
                             $st = $project['ReqStatus'];
                             if($st == "Approved")
                             {

                          ?>
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            Approved
                          </span>
                          <?php }
                          else if( $st == "Pending")
                          {
                            ?>
                          <span
                            class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            Pending
                          </span>

                          <?php
                          }
                          
                          ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          <?php
                            if($st == "Approved")
                            {
                              ?>
                            <button>View/ Print </button>
                          <?php
                            }
                            else{
                              ?>
                              <a href= "includes/approve.php?approve=<?=$project['Id'];?>&userId=<?= $project['ConnectId'] ?>&Rqname=<?= $project['ReqName'];?>"><button class ="px-4 py-2 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Approve</button>
                            </a><?php
                            }
                          ?></td> <td>
                           <a href="includes/cancel.php?cancel=<?=$project['Id'];?>">Cancel</a>
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
      </div>
    </div>
  </body>
</html>
