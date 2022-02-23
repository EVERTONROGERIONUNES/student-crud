<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <style>
        .box {
            margin-top: 2%;
            margin-bottom: 2%;
        }
        .box2 {
            margin: 2% 7% 2% 7%;
        }
        body{
            background: linear-gradient(270deg, black 10%, rgb(3, 40, 53) 80%);
        }
        tamanho{
            width: 100px;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm box">

        <div class="container">     

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
    


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>

                        <li class="nav-item dropdown">
                            
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="<?php echo e(route('login')); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                       
                        <a class="dropdown-item" href="<?php echo e(route('course.index')); ?>">Cursos</a>

                        <a class="dropdown-item" href="<?php echo e(route('class.index')); ?>">Turmas</a>

                        <a class="dropdown-item" href="<?php echo e(route('module.index')); ?>">Módulos</a>

                        <a class="dropdown-item" href="<?php echo e(route('discipline.index')); ?>">Disciplinas</a>

                        <a class="dropdown-item" href="<?php echo e(route('professor.index')); ?>">Professores</a>

                        <a class="dropdown-item" href="<?php echo e(route('assign.index')); ?>">Atribuição</a>

                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>;
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script>
   
// get the table element
var $table = document.getElementById("myTable"),
// number of rows per page
$n = 4,
// number of rows of the table
$rowCount = $table.rows.length,
// get the first cell's tag name (in the first row)
$firstRow = $table.rows[0].firstElementChild.tagName,
// boolean var to check if table has a head row
$hasHead = ($firstRow === "TH"),
// an array to hold each row
$tr = [],
// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
$i,$ii,$j = ($hasHead)?1:0,
// holds the first row if it has a (<TH>) & nothing if (<TD>)
$th = ($hasHead?$table.rows[(0)].outerHTML:"");
// count the number of pages
var $pageCount = Math.ceil($rowCount / $n);
// if we had one page only, then we have nothing to do ..
if ($pageCount > 1) {
// assign each row outHTML (tag name & innerHTML) to the array
for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
$tr[$ii] = $table.rows[$i].outerHTML;
// create a div block to hold the buttons
$table.insertAdjacentHTML("afterend","<div id='buttons'></div");
// the first sort, default page is the first one
sort(1);
}

// ($p) is the selected page number. it will be generated when a user clicks a button
function sort($p) {
/* create ($rows) a variable to hold the group of rows
** to be displayed on the selected page,
** ($s) the start point .. the first row in each page, Do The Math
*/
var $rows = $th,$s = (($n * $p)-$n);
for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
$rows += $tr[$i];

// now the table has a processed group of rows ..
$table.innerHTML = $rows;
// create the pagination buttons
document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
// CSS Stuff
document.getElementById("id"+$p).setAttribute("class","active btn btn-outline-warning");
}


// ($pCount) : number of pages,($cur) : current page, the selected one ..
function pageButtons($pCount,$cur) {
/* this variables will disable the "Prev" button on 1st page
 and "next" button on the last one */
var $prevDis = ($cur == 1)?"disabled":"",
$nextDis = ($cur == $pCount)?"disabled":"",
/* this ($buttons) will hold every single button needed
** it will creates each button and sets the onclick attribute
** to the "sort" function with a special ($p) number..
*/
$buttons = "<input class='btn btn-outline-primary' type='button' value='<< Anterior' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
for ($i=1; $i<=$pCount;$i++)
$buttons += "<input type='button' class='btn btn-outline-secondary' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
$buttons += "<input type='button' class='btn btn-outline-primary' value='Proximo >>' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
return $buttons;
}

function myFunction() {
var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");
for (i = 0; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[1];
if (td) {
  txtValue = td.textContent || td.innerText;
  if (txtValue.toUpperCase().indexOf(filter) > -1) {
    tr[i].style.display = "";
  } else {
    tr[i].style.display = "none";
  }
}       
}
}

  function mascaraCelular(o, f) {
  v_obj = o
  v_fun = f
  setTimeout("execmascara()", 1)
}
function execmascara() {
  v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
  v = v.replace(/\D/g, "");
  v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
  v = v.replace(/(\d)(\d{4})$/, "$1-$2");
  return v;
} 
</script>

</html>
<?php /**PATH E:\Laravel\school-system-oficial\resources\views/templates/template.blade.php ENDPATH**/ ?>