<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Project_01</title>
  </head>
  <body>
       <div style="margin-top: 50px; " class="container ">
       <ul style="border:1px solid #ddd;padding:10px 0;" class="nav">
                <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/overview.php">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/resourse.php">Resourse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/">quiz</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/assignment.php">Assignment</a>
                    </li>
                    
                </ul>
            <div style="width:100%; margin-top: 30px;" class="card">
                <div class="card-header">
                Class 7 Overview
                </div>
                <div class="card-body ">
                    
                    <p class="card-text"> 
                        <ul>
                            <h5 class="card-title"> More array Functions</h5>
                            <li>
                            array_rand(from_which_array, how_many_element) - pick random keys 
                            </li>
                            <li>
                            shuffle(which_array) - randomize order of array elements
                            </li>
                            <li>
                            array_chunk(which_array, how_many_element, keys_sequence) - Split an array into chunks
                            </li>
                            <li>
                            asort(which_array, sort_rule) - sort ascending order, arsort(which_array, sort_rule) - sort descending order,
                            </li>
                            <li>
                            ksort(which_array, sort_rule) - sort keys by ascending order, krsort() - sort keys by descending order
                            </li>
                            <li>
                            implode(separator_symble, which_array) - Join array elements with a string (array to string)
                            </li>
                            <li>
                            explode(separator_symble, which_string, element_limit) - String to array
                            </li>
                           <br>
                            <h5 class="card-title"> Write php code on html</h5>
                            <h5 class="card-title"> Project based on array</h5>
                            <li>
                            Mini Project - Product List (table/E-commerce)
                            </li>
                            
                        </ul> 
                    </p>
                    
                </div>
            </div>

       </div>
    </body>
</html>